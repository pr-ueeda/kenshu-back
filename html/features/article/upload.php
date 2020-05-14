<?php
use app\model\articles;

require_once '../../../app/models/articles.php';

$file_dir = '/var/www/html/public/images/';
$articles = new articles();

if (is_uploaded_file($_FILES['file_up']['tmp_name'])) {
    $tmp_name = $_FILES['file_up']['tmp_name'];
    $name = $_FILES['file_up']['name'];

    move_uploaded_file($tmp_name, $file_dir.$name);
    $articles->insert_image($file_dir . $name);
    echo '/images/' . $name;
} else {
    echo 'ファイルをアップロードできませんでした。';
}

