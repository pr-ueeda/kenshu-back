<!DOCTYPE>
<html lang="ja">
<head>
</head>
<body>
<?php
require_once '../../app/controllers/register_controller.php';

use app\model\users;

$signup_message = '';

if (isset($_POST['add'])) {
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];

    $users = new users();
    $users->insert($email_address, $password);

    $signup_message = '登録完了' . $email_address . $password;
}
?>
<form method="post">
    <div><?php echo  htmlspecialchars($signup_message, ENT_QUOTES) ?></div>
    <label>email address</label>
    <input type="text" id="email_address" name="email_address" class="form-control" placeholder="EmailAddress">
    <label>password</label>
    <input type="text" id="password" name="password" class="form-control" placeholder="password">
    <button name="add" id="add" type="submit" class="btn btn-info">登録</button>
</form>
</body>
</html>