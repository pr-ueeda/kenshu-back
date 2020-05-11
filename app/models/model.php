<?php
namespace app\model;

use PDO;

class model {
    public $pdo;

    public function __construct() {
        try {
            $dsn = 'mysql:dbname=kenshu-back;host=kenshu-mysql';
            $user = 'root';
            $pass = 'pass';
            $this->pdo = new PDO($dsn, $user, $pass);
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
