<?php
session_start();

if (isset($_SESSION['display_name'])) {
    echo 'ログアウトしました。';
} else {
    echo 'セッションタイムアウト';
}

$_SESSION = array();

@session_destroy();

?>
<!DOCTYPE>
<html lang="ja">
<head>
</head>
<body>
<ul>
    <li><a href="html/index.php">トップページへ</a></li>
</ul>
</body>
</html>

