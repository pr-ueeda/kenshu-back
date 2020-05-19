<?php
use app\model\articles;

require_once '../app/models/articles.php';

session_start();

if (isset($_POST['signout'])) {
    $_SESSION = array();

    session_destroy();
}

$article = new articles();
$rows = $article->get_articles();

?>

<!DOCTYPE>
<html lang="ja">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link href="../example.css" rel="stylesheet">
</head>
<body>
<a id="skippy" class="sr-only sr-only-focusable" href="#content">
    <div class="container">
        <span class="skiplink-text">Skip to main content</span>
    </div>
</a>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-end align-items-center">
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">記事投稿サイト</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-success" href="features/user/mypage.php"><?php echo $_SESSION['display_name'] ?></a>
                <div class="col-4 pt-1">
                    <?php if ($_SESSION['display_name'] != '') :?>
                    <a class="text-muted" href="features/article/posts_article.php">記事投稿</a>
                    <form class="" method="post">
                        <button name="signout" id="signout" type="submit" class="btn btn-info">ログアウト</button>
                    </form>
                    <?php else : ?>
                    <a class="col-4 text-muted" href="features/user/signin.php">ログイン</a>
                    <a class="btn btn-sm btn-outline-secondary" href="features/user/signup.php">サインアップ</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

</div>
<main role="main" class="container">
    <table class="table table-hover table-condensed settinglist">
        <thead>
        <tr class=" hidden-xs">
            <th>ユーザー</th>
            <th>サムネイル</th>
            <th>タイトル</th>
        </tr>
        </thead>
        <tbody>
        <tr class=" hidden-xs">
            <?php foreach ($rows as $row) { ?>
            <td><?php echo htmlspecialchars($row['display_name'])?></td>
            <td><img src="<?php echo $row['image_url']?>"></td>
            <td><?php echo htmlspecialchars($row['title'])?></td>
            <form method="post" action="features/article/article.php">
                <td><button id="read" name="read" class="btn  btn-primary  btn-sm" value="<?=$row['article_id'] ?>" type="submit">読む</button></td>
            </form>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</main>
<footer class="blog-footer">
</footer>
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
<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>
</body>
</html>
