<?php
use app\model\articles;

require_once '../../../app/models/articles.php';

session_start();

$file_dir = '/var/www/images/';
$articles = new articles();
$arr = array();

if (isset($_FILES['file_up'])) {
    for ($i = 0; $i < count($_FILES['file_up']['name']); $i++) {
        if (is_uploaded_file($_FILES['file_up']['tmp_name'][$i])) {
            $name = $_FILES['file_up']['name'][$i];
            $tmp_name = $_FILES['file_up']['tmp_name'][$i];

            $arr['name'] = $name;
            $arr['tmp_name'] = $tmp_name;

            move_uploaded_file($arr['tmp_name'], $file_dir.$arr['name']);
            $articles->insert_image($file_dir . $arr['name']);
        } else {
            echo 'ファイルをアップロードできませんでした。';
        }
    }
}

if (isset($_POST['posts'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];

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
<form method="post" enctype="multipart/form-data">
    <label>題名</label>
    <input type="text" id="title" name="title" class="form-control" placeholder="タイトル"><br>
    <label>本文</label>
    <input type="text" id="body" name="body" class="form-control" placeholder="本文"><br>
    <label>画像アップロード</label>
    <input type="file" multiple="multiple" name="file_up[]" onchange="print_file()">
    <input type="submit" value="アップロード"><br>
    <div id="result"></div>
    <!--todo: アップロードした画像を表示 --->
    <script>
        function print_file() {
            var file_list = document.getElementById('file_up').files;
            var list = '';
            for (var i=0; i<file_list; i++) {
                list += file_list[i].name + '<br>';
            }
            document.getElementById('result').innerHTML = list;
        }
    </script>
    <button name="posts" id="posts" type="submit" class="btn btn-info">投稿</button>
</form>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="/docs/4.4/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.4/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.4/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.4/assets/js/src/application.js"></script>
<script src="/docs/4.4/assets/js/src/search.js"></script>
<script src="/docs/4.4/assets/js/src/ie-emulation-modes-warning.js"></script>
<script charset="utf-8" src="../webdir/parts/js/admin.js" type="text/javascript"></script>
</body>
</html>
