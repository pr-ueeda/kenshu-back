<?php
namespace app\model;

require_once 'model.php';
use PDO;

class users extends model {
    private $table_name = 'users';

    public function __construct() {
        parent::__construct();
    }

    public function getAll():array {
        $sql = <<< EOF
SELECT * FROM ($this->table_name)
EOF;
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $rs = $stmt->fetchAll();
        } catch (\Exception $e) {
            echo $e;
        }

        return $rs;
    }

    public function signin(string $email_address, $password) {
        $sql = "SELECT * FROM {$this->table_name} WHERE email_address = ?";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($email_address));

            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                session_regenerate_id(true);
                if ($password == $row['pass']) {
                    $email_address = $row['email_address'];
                    $sql = "SELECT * FROM {$this->table_name} WHERE email_address = $email_address";
                    $stmt = $this->pdo->query($sql);
                    foreach ($stmt as $row) {
                        $row['display_name'];
                    }
                    $_SESSION['display_name'] = $row['display_name'];
                    header("Location: ../index.php");
                    exit();
                } else {
                    echo '~ログインに失敗しました。';
                }
            } else {
                echo '~ログインに失敗しました。';
            }
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function signup(string $display_name, string $email_address, string $password) {
        $sql = "INSERT INTO {$this->table_name} (display_name ,email_address, pass) VALUES (? ,?, ?)";

        try {
            $stmt = $this->pdo->prepare($sql);
            //$stmt->bindParam(':password',$param['password'],PDO::PARAM_STR);
            $stmt->execute(array($display_name, $email_address, $password));
            $_SESSION['display_name'] = $display_name;
            header("Location: ../index.php");
            exit();
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
