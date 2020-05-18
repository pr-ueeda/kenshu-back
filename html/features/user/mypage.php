<?php
use app\model\articles;

require_once '../../../app/models/articles.php';

session_start();

$articles = new articles();
$rows = $articles->get_meta();

?>
<!DOCTYPE>
<html lang="ja">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link href="../example.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <p class="center">マイページ</p>
    <a class="text-muted" href="/index.php">トップへ</a>
</div>
<main role="main" class="container">
    <table class="table table-hover table-condensed settinglist">
        <thead>
        <tr class=" hidden-xs">
            <th>タイトル</th>
            <th class="center">編集</th>
            <th class="center">削除</th>
        </tr>
        </thead>
        <tbody>
        <tr class=" hidden-xs">
            <?php foreach ($rows as $row) { $_SESSION['article_id'] = $row['article_id'] ?>
            <td><?php echo htmlspecialchars($row['title'])?></td>
            <form method="post" action="/features/article/edit.php">
                <td class="center"><button name="edit" id="edit" value="<?=$row['article_id'] ?>" class="btn  btn-primary  btn-sm" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            </form>
            <form method="post" action="/features/article/delete.php">
                <td class="center"><button name="delete" id="delete" value="<?=$row['article_id'] ?>" class="btn  btn-danger  btn-sm" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            </form>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</main>
</body>
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
</html>