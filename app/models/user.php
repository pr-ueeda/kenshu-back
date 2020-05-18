<?php
namespace app\model;

require_once 'model.php';
use PDO;

class user extends Model {
    private $users_table = 'users';

    public function __construct() {
        parent::__construct();
    }

    public function signin(string $email_address, string $password) {
        $sql = "SELECT * FROM {$this->users_table} WHERE email_address = ?";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($email_address));

            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                session_regenerate_id(true);
                if ($password == $row['pass']) {
                    $_SESSION['display_name'] = $row['display_name'];
                    $_SESSION['user_id'] = $row['user_id'];
                    header("Location: ../../index.php");
                    exit();
                } else {
                    echo 'パスワードが違います。';
                }
            } else {
                echo '~ログインに失敗しました。';
            }

        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function signup(string $display_name, string $email_address, string $password) {
        $sql = "INSERT INTO {$this->users_table} (display_name ,email_address, pass) VALUES (? ,?, ?)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($display_name, $email_address, $password));
            $_SESSION['display_name'] = $display_name;
            header("Location: ../../index.php");
            exit();
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
