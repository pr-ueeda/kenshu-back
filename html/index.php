<?php

$dns = 'mysql:dbname=kenshu-back;host=kenshu-mysql;charset=utf8';
$root = 'root';
$pass = 'pass';

try {
// データベースに接続
$pdo = new PDO($dns, $root, $pass);
    echo "success connecting DB";

} catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
}
