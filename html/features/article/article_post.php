<?php
use app\model\articles;

require_once '../../../app/models/articles.php';

session_start();

if (isset($_FILES['file_up']['error']) && is_int($_FILES['file_up']['error']) && $_FILES['file_up']['name'] !== "") {
    switch ($_FILES['upfile']['error']) {
        case UPLOAD_ERR_OK: // OK
            break;
        case UPLOAD_ERR_NO_FILE:   // 未選択
            throw new RuntimeException('ファイルが選択されていません', 400);
        case UPLOAD_ERR_INI_SIZE:  // php.ini定義の最大サイズ超過
            throw new RuntimeException('ファイルサイズが大きすぎます', 400);
        default:
            throw new RuntimeException('その他のエラーが発生しました', 500);
    }

    // 画像をバイナリデータに変換
    $binary_data = file_get_contents($_FILES['file_up']['tmp_name']);

    $tmp = pathinfo($_FILES["upfile"]["name"]);
    $extension = $tmp["extension"];
    if($extension === "jpg" || $extension === "jpeg" || $extension === "JPG" || $extension === "JPEG") {
        $extension = "jpeg";
    } else if($extension === "png" || $extension === "PNG") {
        $extension = "png";
    } else {
        echo "非対応ファイルです．<br/>";
    }

    // DBに格納するファイル名の設定
    $date = getdate();
    $file_name = $_FILES['file_up']['tmp_name'] . $date['year'] . $date['mon']
        . $date['mday'] . $date['hours'] . $date['minutes'] . $date['seconds'];
    $file_name = hash('sha256', $file_name);

    $articles = new articles();
    $articles->insert_image($file_name, $binary_data);
}

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
<form method="post" enctype="multipart/form-data">
    <label>題名</label>
    <input type="text" id="title" name="title" class="form-control" placeholder="タイトル"><br>
    <label>本文</label>
    <input type="text" id="body" name="body" class="form-control" placeholder="本文"><br>
    <label>画像アップロード</label>
    <input type="file" name="file_up">
    <input type="submit" value="アップロード"><br>
    <button name="posts" id="posts" type="submit" class="btn btn-info">登録</button>
</form>
<?php

$articles->get_images();

?>
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
