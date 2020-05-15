<?php
use app\model\articles;

require_once '../../../app/models/articles.php';

session_start();

if (isset($_POST['posts'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];

    $articles = new articles();
    $articles->insert_article($title, $body);
}

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

<form method="post">
    <label>題名</label>
    <input type="text" id="title" name="title" class="form-control" placeholder="タイトル"><br>
    <label>本文</label>
    <textarea id="body" name="body" class="form-control" rows="50" cols="80" placeholder="本文をここに入力"></textarea>
    <button name="posts" id="posts" type="submit" class="btn btn-info">投稿</button>
</form>
<form id="upload_form">
    <label>画像アップロード</label>
    <input type="file" name="file_up">
    <button type="button" onclick="upload_file()">アップロード</button>
</form>
<div class="uploaded_images"></div>
<script src="/assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
<script src="/docs/4.4/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.4/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.4/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.4/assets/js/src/application.js"></script>
<script src="/docs/4.4/assets/js/src/search.js"></script>
<script src="/docs/4.4/assets/js/src/ie-emulation-modes-warning.js"></script>
<script charset="utf-8" src="../webdir/parts/js/admin.js" type="text/javascript"></script>
</body>
</html>
