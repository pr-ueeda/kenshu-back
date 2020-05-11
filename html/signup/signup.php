<?php
use app\model\users;

require_once '../../app/models/users.php';

session_start();

$signup_message = '';

if (isset($_POST['add'])) {
    $display_name = $_POST['display_name'];
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];

    $users = new users();
    $users->signup($display_name, $email_address, $password);

    $signup_message = '登録完了' . $email_address . $password . 'user名' . $display_name;
}
?>
<!DOCTYPE>
<html lang="ja">
<head>
</head>
<body>

<form method="post">
    <div><?php echo  htmlspecialchars($signup_message, ENT_QUOTES) ?></div>
    <label>表示名</label>
    <input type="text" id="display_name" name="display_name" class="form-control" placeholder="displayName">
    <label>email address</label>
    <input type="text" id="email_address" name="email_address" class="form-control" placeholder="EmailAddress">
    <label>password</label>
    <input type="text" id="password" name="password" class="form-control" placeholder="password">
    <button name="add" id="add" type="submit" class="btn btn-info">登録</button>
</form>
</body>
</html>