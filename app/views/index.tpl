<!DOCTYPE>
<html lang="ja">
<head>
    (include file='template/head_tag.tpl')
</head>
(include file='template/header.tpl' title=$title)
<body>
<form method="post">
    <label>email address</label>
    <input type="text" id="email_address" name="email_address" class="form-control" placeholder="EmailAddress">
    <label>password</label>
    <input type="text" id="password" name="password" class="form-control" placeholder="password">
    <button name="add" type="submit" class="btn btn-info">登録</button>
</form>
</body>
(include file='template/footer.tpl' copyright='kazunari ueeda')
(include file='template/footer_tag.tpl')
</html>