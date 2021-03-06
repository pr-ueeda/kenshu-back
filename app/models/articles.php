<?php
namespace app\model;

require_once 'model.php';
use PDO;
use const http\Client\Curl\PROXY_SOCKS4;

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

    public function get_articles() {
        $sql = "SELECT * FROM {$this->users_table}
        INNER JOIN {$this->user_articles_table}
        ON {$this->user_articles_table}.user_id = {$this->users_table}.user_id
        INNER JOIN {$this->articles_table}
        ON {$this->articles_table}.article_id = {$this->user_articles_table}.article_id
        INNER JOIN {$this->article_images_table}
        ON {$this->article_images_table}.article_id = {$this->articles_table}.article_id
        INNER JOIN {$this->images_table}
        ON {$this->images_table}.image_id = {$this->article_images_table}.image_id
        INNER JOIN {$this->thumbnails_table}
        ON {$this->thumbnails_table}.image_id = {$this->images_table}.image_id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }

        return $result;
    }

    public function get_user_article(int $article_id): array {
        $sql = "SELECT * FROM {$this->articles_table}
        INNER JOIN {$this->article_images_table}
        ON {$this->article_images_table}.article_id = {$this->articles_table}.article_id
        INNER JOIN {$this->thumbnails_table}
        ON {$this->thumbnails_table}.article_id = {$this->articles_table}.article_id
        INNER JOIN {$this->article_tags_table}
        ON {$this->article_tags_table}.article_id = {$this->articles_table}.article_id
        INNER JOIN {$this->tags_table}
        ON {$this->tags_table}.tag_id = {$this->article_tags_table}.tag_id
        WHERE {$this->articles_table}.article_id IN (:article_id)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }

        return $result;
    }

    public function get_article(): array {
        $session_article_id = $_SESSION['article_id'];

        $sql = "SELECT * FROM {$this->users_table}
        INNER JOIN {$this->user_articles_table}
        ON {$this->user_articles_table}.user_id = {$this->users_table}.user_id
        INNER JOIN {$this->articles_table}
        ON {$this->articles_table}.article_id = {$this->user_articles_table}.article_id
        INNER JOIN {$this->article_images_table}
        ON {$this->article_images_table}.article_id = {$this->articles_table}.article_id
        INNER JOIN {$this->images_table}
        ON {$this->images_table}.image_id = {$this->article_images_table}.image_id
        INNER JOIN {$this->thumbnails_table}
        ON {$this->thumbnails_table}.image_id = {$this->images_table}.image_id
        INNER JOIN {$this->article_tags_table}
        ON {$this->article_tags_table}.article_id = {$this->articles_table}.article_id
        INNER JOIN {$this->tags_table}
        ON {$this->tags_table}.tag_id = {$this->article_tags_table}.tag_id
        WHERE {$this->articles_table}.article_id = ($session_article_id)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }

        return $result;
    }

    public function get_meta(): array {
        $session_user_id = $_SESSION['user_id'];

        $sql = "SELECT {$this->articles_table}.title, {$this->articles_table}.article_id FROM {$this->articles_table}
        INNER JOIN {$this->user_articles_table}
        ON {$this->user_articles_table}.article_id = {$this->articles_table}.article_id
        INNER JOIN {$this->users_table}
        ON {$this->users_table}.user_id = {$this->user_articles_table}.user_id
        WHERE {$this->users_table}.user_id IN ($session_user_id)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }

        return $row;
    }

    public function insert_article(string $title, string $body) {
        $sql = "INSERT INTO {$this->articles_table} (title, body) VALUES (:title,:body)";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR, 100);
            $stmt->bindParam(':body', $body, PDO::PARAM_STR);
            $stmt->execute();
            $article_id = $this->pdo->lastInsertId('article_id');

            $this->insert_user_articles($article_id);
            $this->insert_article_images($article_id, $_SESSION['image_id']);
            $this->insert_thumbnail($article_id, $_SESSION['image_id']);
            $this->insert_article_tags($article_id, $_SESSION['tag_id']);
            header('Location: ../user/mypage.php');
            exit();
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function insert_image(string $image_url) {
        $sql = "INSERT INTO {$this->images_table} (image_url) VALUES (:image_url)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':image_url', $image_url, PDO::PARAM_STR);
            $stmt->execute();

            $image_id = $this->pdo->lastInsertId('image_id');
            $_SESSION['image_id'] = $image_id;
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function insert_thumbnail(int $article_id, int $image_id) {
        $sql = "INSERT INTO {$this->thumbnails_table} (article_id, image_id) VALUES (:article_id, :image_id)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $stmt->bindParam(':image_id', $image_id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function insert_tag(string $tag_name) {
        $sql = "INSERT INTO {$this->tags_table} (tag_name) VALUES (:tag_name)";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':tag_name', $tag_name, PDO::PARAM_STR, 30);
            $stmt->execute();
            $tag_id = $this->pdo->lastInsertId('tag_id');
            $_SESSION['tag_id'] = $tag_id;
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    private function insert_user_articles(int $article_id) {
        $sql = "INSERT INTO {$this->user_articles_table} (user_id, article_id) VALUES (:user_id, :article_id)";
        $session_user_id = $_SESSION['user_id'];

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':user_id', $session_user_id, PDO::PARAM_INT);
            $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    private function insert_article_images(int $article_id, int $image_id) {
        $sql = "INSERT INTO {$this->article_images_table} (article_id, image_id) VALUES (:article_id, :image_id)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $stmt->bindParam(':image_id', $image_id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    private function insert_article_tags(int $article_id, int $tag_id) {
        $sql = "INSERT INTO {$this->article_tags_table} (article_id, tag_id) VALUES (:article_id, :tag_id)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $stmt->bindParam(':tag_id', $tag_id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function update(string $title, string $body, int $article_id) {
        $sql = "UPDATE {$this->articles_table}
        SET title = :title, body = :body
        WHERE article_id = :article_id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR, 100);
            $stmt->bindParam(':body', $body, PDO::PARAM_STR);
            $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $stmt->execute();
            header('Location: ../user/mypage.php');
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function delete(int $article_id) {
        $sql = "DELETE FROM {$this->articles_table} WHERE article_id = :article_id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }
}
