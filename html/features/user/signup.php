<?php
use app\model\user;

require_once '../../../app/models/user.php';

session_start();

$signup_message = '';
$users = new user();

if (isset($_POST['add'])) {
    if ($_POST['display_name'] === '') {
        $error_name = "表示名を入力してください";
    } else if ($_POST['email_address'] === '' or !strpos($_POST['email_address'], '@')) {
        $error_mail = "メールアドレスが未入力か形式が正しくありません。";
    } else if ($_POST['password'] === '' or !preg_match('/\A[a-z\d]{8,100}+\z/i', $_POST['password'])){
        $error_pass = "8文字以上100文字以下で入力してください";
    } else {
        $display_name = $_POST['display_name'];
        $email_address = $_POST['email_address'];
        $password = $_POST['password'];

        $users->signup($display_name, $email_address, $password);
        $signup_message = '登録完了' . $email_address . $password . 'user名' . $display_name;
    }
}
?>
<!DOCTYPE>
<html lang="ja">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <form method="post">
        <div><?php echo htmlspecialchars($signup_message, ENT_QUOTES) ?></div><br>
        <label>表示名</label>
        <input type="text" id="display_name" name="display_name" class="form-control" placeholder="displayName">
        <div><?php echo $error_name?></div><br>
        <label>email address</label>
        <input type="text" id="email_address" name="email_address" class="form-control" placeholder="EmailAddress">
        <div><?php echo $error_mail?></div><br>
        <label>password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="password">
        <div><?php echo $error_pass?></div><br>
        <div class="flex-column">
            <a href="/index.php">戻る</a>
            <button name="add" id="add" type="submit" class="btn btn-info">登録</button>
        </div>

    </form>
</div>
</body>
</html>
