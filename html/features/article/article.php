<?php
use app\model\articles;

require_once '../../../app/models/articles.php';

session_start();
$_SESSION['article_id'] = $_POST['read'];

$articles = new articles();
$rows = $articles->get_article();
var_dump($rows);
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
    <main role="main" class="container">
        <div class="col-md-8 blog-main">
            <div class="d-flex">
                <?php foreach ($rows as $row) { ?>
                    <div class="blog-post">
                        <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
                        <p class="blog-post-meta"><?php echo '投稿者:' . $row['display_name']; ?></p>
                        <p class="blog-post-meta"><?php echo $row['tag_name']; ?></p>
                        <hr>
                        <img src="<?php echo $row['image_url']?>">
                        <p><?php echo $row['body']; ?></p>
                    </div><!-- /.blog-post -->
                <?php } ?>
            </div>
        </div>
    </main>
</div>
</body>
</html>