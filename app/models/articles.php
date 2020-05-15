<?php
namespace app\model;

require_once 'model.php';
use PDO;

class articles extends Model {
    private $users_table = 'users';
    private $articles_table = 'articles';
    private $user_articles_table = 'user_articles';
    private $images_table = 'images';
    private $article_images_table = 'article_images';
    private $tags_table = 'tags';
    private $article_tags_table = 'article_tags';
    private $thumbnails_table = 'thumbnails';

    public function __construct() {
        parent::__construct();
    }

    public function get_all() {
        $sql = "SELECT * FROM {$this->users_table}
        INNER JOIN {$this->user_articles_table}
        ON {$this->user_articles_table}.id = {$this->users_table}.article_id
        INNER JOIN {$this->article_images_table}
        ON {$this->article_images_table}.article_id = {$this->articles_table}
        INNER JOIN {$this->images_table}
        ON {$this->article_images_table}.image_id = {$this->images_table}.image_id
        INNER JOIN {$this->thumbnails_table}
        ON {$this->article_images_table}.image_id = {$this->thumbnails_table}.image_id
        INNER JOIN {$this->article_tags_table}
        ON {$this->article_tags_table}.article_id = {$this->articles_table}.article_id
        INNER JOIN {$this->tags_table}
        ON {$this->article_tags_table}.tag_id = {$this->tags_table}.tag_id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function insert_article(string $title, string $body) {
        $sql = "INSERT INTO {$this->articles_table} (title ,body) VALUES (? ,?)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($title, $body));
            $article_id = $this->pdo->lastInsertId('article_id');

            $this->insert_user_articles($article_id);
            $this->insert_article_images($article_id, $_SESSION['image_id']);
            $this->insert_thumbnail($article_id, $_SESSION['image_id']);
            header('Location: ../user/mypage.php');
            exit();
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function insert_image(string $image_url) {
        $sql = "INSERT INTO {$this->images_table} (image_url) VALUES (?)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($image_url));

            $image_id = $this->pdo->lastInsertId('image_id');
            $_SESSION['image_id'] = $image_id;
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function insert_thumbnail(int $article_id, int $image_id) {
        $sql = "INSERT INTO {$this->thumbnails_table} (article_id, image_id) VALUES (?, ?)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($article_id, $image_id));
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    private function insert_user_articles(int $article_id) {
        $sql = "INSERT INTO {$this->user_articles_table} (user_id, article_id) VALUES (?, ?)";
        $session_user_id = $_SESSION['user_id'];

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($session_user_id, $article_id));
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    private function insert_article_images(int $article_id, int $image_id) {
        $sql = "INSERT INTO {$this->article_images_table} (article_id, image_id) VALUES (?, ?)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array($article_id, $image_id));
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }
}
