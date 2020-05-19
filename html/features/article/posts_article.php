<?php
use app\model\articles;

require_once '../../../app/models/articles.php';

session_start();
$article = new articles();

if (isset($_POST['posts'])) {
    if ($_POST['title'] === '') {
        $error_title = "タイトルが未入力です。";
    } else if($_POST['body'] === '') {
        $error_body = "本文が未入力です。";
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $tag_name = $_POST['tag'];

        if ($tag_name != '') {
            $tags = explode('#', $tag_name);
            foreach ($tags as $tag) {
                $article->insert_tag($tag);
            }
        }
        $article->insert_article($title, $body);
    }
}

?>

<!DOCTYPE>
<html lang="ja">
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script>
    function upload_file() {
        var formdata = new FormData($('#upload_form').get(0))

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
        <a href="/index.php">戻る</a><br>
        <label>題名</label>
        <input type="text" id="title" name="title" class="form-control" placeholder="タイトル">
        <div><?php echo $error_title?></div><br>
        <label>タグ</label>
        <input type="text" id="tag" name="tag" class="form-control" placeholder="#から始めて、単語をスペースで区切って入力"><br>
        <label>本文</label>
        <textarea id="body" name="body" class="form-control" rows="50" cols="80" placeholder="本文をここに入力"></textarea>
        <div><?php echo $error_body?></div><br>
        <button name="posts" id="posts" type="submit" class="btn btn-info">投稿</button>
    </form>
    <form id="upload_form">
        <label>画像アップロード</label>
        <input type="file" name="file_up">
        <button type="button" onclick="upload_file()">アップロード</button>
    </form>
    <div class="uploaded_images"></div>
</div>
</body>
</html>
