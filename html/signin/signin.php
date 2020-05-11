<?php
use app\model\users;

require_once '../../app/models/users.php';

session_start();

$signin_message = '';

if (isset($_POST['signin'])) {
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];

    $users = new users();
    $users->signin($email_address, $password);

    $signin_message = 'ログインしました。' . 'user名' . $signin_message;
}
?>
<!DOCTYPE>
<html lang="ja">
<head>
</head>
<body>

<form method="post">
    <div><?php echo  htmlspecialchars($signin_message, ENT_QUOTES) ?></div>
<label>email address</label>
<input type="text" id="email_address" name="email_address" class="form-control" placeholder="EmailAddress">
<label>password</label>
<input type="text" id="password" name="password" class="form-control" placeholder="password">
<button name="signin" id="signin" type="submit" class="btn btn-info">ログイン</button>
</form>
</body>
</html>