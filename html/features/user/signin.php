<?php
use app\model\user;

require_once '../../../app/models/user.php';

session_start();

$signin_message = '';

if (isset($_POST['signin'])) {
    if ($_POST['email_address'] === '' or !strpos($_POST['email_address'], '@')) {
        $error_mail = "メールアドレスが未入力か形式が正しくありません。";
    } else if ($_POST['password'] === '' or !preg_match('/\A[a-z\d]{8,100}+\z/i', $_POST['password'])) {
        $error_pass = "8文字以上100文字以下で入力してください";
    } else {
        $email_address = $_POST['email_address'];
        $password = $_POST['password'];

        $user = new user();
        $user->signin($email_address, $password);

        if ($user === true) {
            $signin_message = 'ログインしました。' . 'user名' . $_SESSION['display_name'];
        }
    }
}

if (isset($_POST['signout'])) {
    $_SESSION = array();

    session_destroy();
    header('Location: index.php');
}

?>
<!DOCTYPE>
<html lang="ja">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <a href="/index.php">戻る</a>
    <div>ログイン画面</div><br>
    <form method="post">
        <div><?php echo  htmlspecialchars($signin_message, ENT_QUOTES) ?></div>
        <label>email address</label>
        <input type="text" id="email_address" name="email_address" class="form-control" placeholder="EmailAddress">
        <div><?php echo $error_mail ?></div><br>
        <label>password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="password">
        <div><?php echo $error_pass ?></div><br>
        <button name="signin" id="signin" type="submit" class="btn btn-info">ログイン</button>
    </form>
</div>
</body>
</html>