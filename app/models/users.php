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

    public function insert(string $email_address, string $password) {
        $sql = <<< EOF
INSERT INTO {$this->table_name}
(email_address, pass) VALUES (?, ?)
EOF;
        try {
            $stmt = $this->pdo->prepare($sql);
            //$stmt->bindParam(':password',$param['password'],PDO::PARAM_STR);
            $stmt->execute(array($email_address, $password));
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
