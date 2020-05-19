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
                <p class="blog-header-logo text-dark">記事投稿サイト</p>
            </div>
            <div class="col-4 pt-1">
                <?php if ($_SESSION['display_name'] != '') :?>
                <div class="row flex-nowrap justify-content-end align-items-center">
                    <a class="text-success" href="features/user/mypage.php"><?php echo $_SESSION['display_name'] ?></a>
                    <a class="btn btn-info" href="features/article/posts_article.php">記事投稿</a>
                    <form class="" method="post">
                        <button name="signout" id="signout" type="submit" class="btn">ログアウト</button>
                    </form>
                </div>
                <?php else : ?>
                <div class="d-flex justify-content-end align-items-center">
                    <div class="d-flex align-items-center">
                        <a href="features/user/signin.php">ログイン</a>
                        <a class="btn btn-sm btn-outline-secondary" href="features/user/signup.php">サインアップ</a>
                    </div>
                </div>
                <?php endif; ?>
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
</body>
</html>
