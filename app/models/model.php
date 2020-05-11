<?php
namespace app\model;

//require_once dirname(__FILE__) . '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use PDO;

class model {
    private $name = 'model';
    public $pdo;

    public function __construct() {
        try {
            $dsn = 'mysql:dbname=kenshu-back;host=kenshu-mysql';
            $user = 'root';
            $pass = 'pass';
            $this->pdo = new PDO($dsn, $user, $pass);
            echo '接続完了';
        } catch (\Exception $error) {
            echo $error;
        }
    }
}
