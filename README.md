# kenshu-back

#### index.php
トップページです。
ここでユーザーの記事が見れたりログイン、新規登録、ログインしているユーザーは記事投稿ができます。

マイページは、表示されているユーザー名をクリックするとマイページへ遷移できます。

#### featuresディレクトリ
機能にあたる部分は全てこのディレクトリに入っています。
それぞれHTMLを表示するページを持っています。

#### modelsディクトり
DBへの処理をする関数群です。


#### create文

#### users
```sql
CREATE TABLE users (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  email_address CHAR(100),
  password CHAR(100)
  created DATETIME()
);
```

#### articles
```sql
CREATE TABLE articles (
  article_id INT PRIMARY KEY AUTO_INCREMENT,
  title CHAR(100),
  body TEXT,
);
```

#### user_articles
```sql
CREATE TABLE user_articles (
  user_article_id INT PRIMARY KEY AUTO_INCREMET,
  user_id INT,
  article_id INT,
  
  FOREIGN KEY (user_id) REFERENCE users (user_id) 
  ON DELETE CASCADE,
  
  FOREIGN KEY (article_id) REFERENCE articles (article_id) 
  ON DELETE CASCADE 
  ON UPDATE CASCADE
);
```

#### images
```sql
CREATE TABLE images (
  image_id INT PRIMARY KEY AUTO_INCREMENT,
  image_url TEXT
);
```

#### article_images
```sql
CREATE TABLE article_images (
  article_image_id INT PRIMARY KEY AUTO_INCREMENT,
  article_id INT,
  image_id INT,
  
  ROREIGN KEY (article_id) REFERENCE articles (article_id)
  ON DELETE CASCADE 
  ON UPDATE CASCADE,
  
  ROREIGN KEY (image_id) REFERENCE images (image_id) 
  ON DELETE CASCADE 
  ON UPDATE CASCADE,
);
```

#### tags
```sql
CREATE TABLE tags (
  tag_id INT PRIMARY KEY AUTO_INCREMENT,
  tag_name CHAR(30)
);
```

#### article_tags
```sql
CREATE TABLE article_tags (
  article_tag_id INT PRIMARY KEY AUTO_INCREMENT,
  article_id INT,
  tag_id INT,
  
  FOREIGN KEY (article_id) REFERENCE articles (article_id) 
  ON DELETE CASCADE 
  ON UPDATE CASCADE,
  
  FOREIGN KEY (tag_id) REFERENCE tags (tag_id) 
  ON DELETE CASCADE 
  ON UPDATE CASCADE
);
```

#### thumbnails
```sql
CREATA TABLE thumbnails (
  thumbnail_id INT PRIMARY KEY AUTO_INCREMENT,
  image_id INT,
  
  FOREIGN KEY (image_id) REFERENCE images (image_id) 
  ON UPDATE CASCADE
);
```
