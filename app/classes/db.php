<?php

use PDO;

class Model {
    public $pdo;

    public function __construct() {
        try {
            $dsn = 'mysql:dbname=kenshu-back;host=kenshu-mysql';
            $user = 'root';
            $pass = 'pass';
            $this->pdo = new PDO($dsn, $user, $pass);
        } catch (\Exception $error) {
            echo $error;
        }
    }
}