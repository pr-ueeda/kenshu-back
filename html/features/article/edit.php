<?php

use app\model\articles;

require_once '../../../app/models/articles.php';

session_start();

$article = new articles();
$article_id = (int)$_SESSION['article_id'];

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];

    $article->update($title, $body, $article_id);
}

$rows = $article->get_user_article($article_id);

?>

<!DOCTYPE>
<html lang="ja">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link href="../example.css" rel="stylesheet">
</head>
<body>
<script>
    function upload_file() {
        var formdata = new FormData($('#upload_form').get(0));

        $.ajax({
            url  : "/features/article/upload.php",
            type : "POST",
            data : formdata,
            cache       : false,
            contentType : false,
            processData : false,
            dataType    : "html"
        }).done(function(data, textStatus, jqXHR) {
            $('.uploaded_images').append('<img src="' + data + '" width="100" height="100">');
        });
    }
</script>
<div class="container">
    <form method="post">
        <label>題名</label>
        <?php foreach ($rows as $row) { ?>
            <input type="text" id="title" name="title" class="form-control" placeholder="タイトル" value="<?=$row['title'] ?>"><br>
            <label>本文</label>
            <textarea id="body" name="body" class="form-control" rows="50" cols="80" placeholder="本文をここに入力"><?=$row['body'] ?></textarea><br>
        <?php } ?>
        <button name="update" id="update" type="submit" class="btn btn-info">更新</button>
    </form>
    <form id="upload_form">
        <label>画像アップロード</label>
        <input type="file" name="file_up">
        <button type="button" onclick="upload_file()">アップロード</button>
    </form>
    <div class="uploaded_images"></div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
</body>
</html>
