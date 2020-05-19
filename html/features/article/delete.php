<?php
use app\model\articles;

require_once '../../../app/models/articles.php';

session_start();

$article_id = $_POST['delete'];
$article = new articles();
if (!empty($article_id)) {
    $article->delete($article_id);
    echo "削除しました。";
} else {
    echo "削除に失敗しました。";
}

?>

<a href="/features/user/mypage.php">マイページへ</a>
