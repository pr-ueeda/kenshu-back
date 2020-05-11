<?php
namespace app\model;

require_once 'model.php';

use PDO;

class users extends model {
    private $name = 'register_controller';

    public function __construct() {
        parent::__construct();
    }

    public function getAll():array {
        $sql = <<< EOF
SELECT * FROM ($this->name)
EOF;
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $rs = $stmt->fetchAll();
        } catch (\Exception $error) {
            $this->logging($error->getMessage());
        }

        return $rs;
    }

    public function insert(array $param) {
        $sql = <<< EOF
INSERT INTO {$this->name}
(email_address, pass) VALUES (:email_address, :password)
EOF;
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':email_address',$param['email_address'],PDO::PARAM_STR);
            $stmt->bindParam(':password',$param['password'],PDO::PARAM_STR);
            $stmt->execute();
        } catch (\Exception $e) {
            echo $e;
        }
    }

}
