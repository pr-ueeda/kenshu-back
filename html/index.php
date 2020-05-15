<?php
session_start();

if (isset($_POST['signout'])) {
    $_SESSION = array();

    session_destroy();
}

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
                <!-- <a class="blog-header-logo text-dark" href="#">Large</a> -->
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
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                    <strong class="d-inline-block mb-2 text-primary">国際</strong>
                    <h3 class="mb-0">
                        <!-- <a class="text-dark" href="#">Featured post</a> -->
                        <a class="text-dark" href="#">人気のポスト</a>
                    </h3>
                    <!-- <div class="mb-1 text-muted">Nov 12</div> -->
                    <div class="mb-1 text-muted">11/12</div>
                    <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                    <p class="card-text ml-auto">これは写真の解説文付きのカードです。自然に説明を加えることができます。</p>
                    <!-- <a href="#">Continue reading</a> -->
                    <a href="#">続きを読む</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17201b29e6e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17201b29e6e%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <?php
                    use app\model\articles;

                    require_once '../app/models/articles.php';

                    $article = new articles();
                    $article->get_all();

                    ?>
                    <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
                    <strong class="d-inline-block mb-2 text-success">デザイン</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">ポストのタイトル</a>
                    </h3>
                    <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                    <div class="mb-1 text-muted">11/11</div>
                    <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
                    <p class="card-text ml-auto">これは写真の解説文付きのカードです。自然に説明を加えることができます。</p>
                    <!-- <a href="#">Continue reading</a> -->
                    <a href="#">続きを読む</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17201b29e6f%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17201b29e6f%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
    </div>
</div>
<main role="main" class="container">
    <table class="table table-hover table-condensed settinglist">
        <thead>
        <tr class=" hidden-xs">
            <th class="center">日付</th>
            <th>タイトル</th>
            <th class="center">チェック</th>
            <th class="center">編集</th>
            <th class="center">削除</th>
            <th class="center" colspan="2">順番</th>
        </tr>
        </thead>

        <tbody>
        <tr class=" hidden-xs">
            <td><span class="nowrap"><span class=" hidden-xs">2013/</span>03/20</span></td>
            <td>レスポンシブWebデザインとは</td>
            <td class="center"><a class="btn btn-link" href="../webdir/4.html" target="check"><i class="glyphicon glyphicon-check"></i><span class=" visible-md-inline visible-lg-inline"> チェック</span></a></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(4,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(4,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(4,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(4,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" visible-xs">
            <td colspan="7">レスポンシブWebデザインとは
                <a class="btn btn-link pull-right " href="../webdir/4.html" target="check"><i class="glyphicon glyphicon-check"></i></a></td>
        </tr>
        <tr class=" phone-last visible-xs">
            <td colspan="3"><span class="nowrap">03/20</span></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(4,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(4,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(4,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(4,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" hidden-xs">
            <td><span class="nowrap"><span class=" hidden-xs">2013/</span>03/18</span></td>
            <td>レスポンシブWebデザインの実体</td>
            <td class="center"><a class="btn btn-link" href="../webdir/3.html" target="check"><i class="glyphicon glyphicon-check"></i><span class=" visible-md-inline visible-lg-inline"> チェック</span></a></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(3,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(3,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(3,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(3,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" visible-xs">
            <td colspan="7">レスポンシブWebデザインの実体
                <a class="btn btn-link pull-right " href="../webdir/3.html" target="check"><i class="glyphicon glyphicon-check"></i></a></td>
        </tr>
        <tr class=" phone-last visible-xs">
            <td colspan="3"><span class="nowrap">03/18</span></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(3,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(3,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(3,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(3,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" hidden-xs">
            <td><span class="nowrap"><span class=" hidden-xs">2013/</span>03/15</span></td>
            <td>レスポンシブWebデザインの設定例：カラム幅</td>
            <td class="center"><a class="btn btn-link" href="../webdir/5.html" target="check"><i class="glyphicon glyphicon-check"></i><span class=" visible-md-inline visible-lg-inline"> チェック</span></a></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(5,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(5,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(5,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(5,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" visible-xs">
            <td colspan="7">レスポンシブWebデザインの設定例：カラム幅
                <a class="btn btn-link pull-right " href="../webdir/5.html" target="check"><i class="glyphicon glyphicon-check"></i></a></td>
        </tr>
        <tr class=" phone-last visible-xs">
            <td colspan="3"><span class="nowrap">03/15</span></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(5,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(5,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(5,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(5,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" hidden-xs">
            <td><span class="nowrap"><span class=" hidden-xs">2013/</span>03/15</span></td>
            <td>レスポンシブWebデザインの設定例：ボタン表示</td>
            <td class="center"><a class="btn btn-link" href="../webdir/7.html" target="check"><i class="glyphicon glyphicon-check"></i><span class=" visible-md-inline visible-lg-inline"> チェック</span></a></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(7,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(7,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(7,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(7,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" visible-xs">
            <td colspan="7">レスポンシブWebデザインの設定例：ボタン表示
                <a class="btn btn-link pull-right " href="../webdir/7.html" target="check"><i class="glyphicon glyphicon-check"></i></a></td>
        </tr>
        <tr class=" phone-last visible-xs">
            <td colspan="3"><span class="nowrap">03/15</span></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(7,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(7,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(7,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(7,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" hidden-xs">
            <td><span class="nowrap"><span class=" hidden-xs">2013/</span>03/14</span></td>
            <td>レスポンシブWebデザインの具体的な手法</td>
            <td class="center"><a class="btn btn-link" href="../webdir/2.html" target="check"><i class="glyphicon glyphicon-check"></i><span class=" visible-md-inline visible-lg-inline"> チェック</span></a></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(2,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(2,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(2,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(2,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" visible-xs">
            <td colspan="7">レスポンシブWebデザインの具体的な手法
                <a class="btn btn-link pull-right " href="../webdir/2.html" target="check"><i class="glyphicon glyphicon-check"></i></a></td>
        </tr>
        <tr class=" phone-last visible-xs">
            <td colspan="3"><span class="nowrap">03/14</span></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(2,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(2,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(2,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(2,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" hidden-xs">
            <td><span class="nowrap"><span class=" hidden-xs">2013/</span>03/13</span></td>
            <td>Bootstrapの画像表示機能</td>
            <td class="center"><a class="btn btn-link" href="../webdir/1.html" target="check"><i class="glyphicon glyphicon-check"></i><span class=" visible-md-inline visible-lg-inline"> チェック</span></a></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(1,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(1,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(1,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(1,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" visible-xs">
            <td colspan="7">Bootstrapの画像表示機能
                <a class="btn btn-link pull-right " href="../webdir/1.html" target="check"><i class="glyphicon glyphicon-check"></i></a></td>
        </tr>
        <tr class=" phone-last visible-xs">
            <td colspan="3"><span class="nowrap">03/13</span></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(1,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(1,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(1,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(1,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" hidden-xs">
            <td><span class="nowrap"><span class=" hidden-xs">2013/</span>03/13</span></td>
            <td>Bootstrapのその他の便利な機能</td>
            <td class="center"><a class="btn btn-link" href="../webdir/6.html" target="check"><i class="glyphicon glyphicon-check"></i><span class=" visible-md-inline visible-lg-inline"> チェック</span></a></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(6,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(6,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(6,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(6,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" visible-xs">
            <td colspan="7">Bootstrapのその他の便利な機能
                <a class="btn btn-link pull-right " href="../webdir/6.html" target="check"><i class="glyphicon glyphicon-check"></i></a></td>
        </tr>
        <tr class=" phone-last visible-xs">
            <td colspan="3"><span class="nowrap">03/13</span></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(6,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(6,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(6,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(6,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" hidden-xs">
            <td><span class="nowrap"><span class=" hidden-xs">2014/</span>03/03</span></td>
            <td>Bootstarpを使ったページネーション（前後移動リンク）のカスタマイズ</td>
            <td class="center"><a class="btn btn-link" href="../webdir/12.html" target="check"><i class="glyphicon glyphicon-check"></i><span class=" visible-md-inline visible-lg-inline"> チェック</span></a></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(12,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(12,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(12,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(12,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" visible-xs">
            <td colspan="7">Bootstarpを使ったページネーション（前後移動リンク）のカスタマイズ
                <a class="btn btn-link pull-right " href="../webdir/12.html" target="check"><i class="glyphicon glyphicon-check"></i></a></td>
        </tr>
        <tr class=" phone-last visible-xs">
            <td colspan="3"><span class="nowrap">03/03</span></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(12,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(12,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(12,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(12,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" hidden-xs">
            <td><span class="nowrap"><span class=" hidden-xs">2014/</span>03/03</span></td>
            <td>Bootstrapのクラスによる全一覧（目次）のページネーションデザインの変更</td>
            <td class="center"><a class="btn btn-link" href="../webdir/13.html" target="check"><i class="glyphicon glyphicon-check"></i><span class=" visible-md-inline visible-lg-inline"> チェック</span></a></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(13,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(13,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(13,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(13,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" visible-xs">
            <td colspan="7">Bootstrapのクラスによる全一覧（目次）のページネーションデザインの変更
                <a class="btn btn-link pull-right " href="../webdir/13.html" target="check"><i class="glyphicon glyphicon-check"></i></a></td>
        </tr>
        <tr class=" phone-last visible-xs">
            <td colspan="3"><span class="nowrap">03/03</span></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(13,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(13,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(13,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(13,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" hidden-xs">
            <td><span class="nowrap"><span class=" hidden-xs">2013/</span>03/10</span></td>
            <td>サイトのCSSでBootstrapのスタイルを上書きする方法</td>
            <td class="center"><a class="btn btn-link" href="../webdir/8.html" target="check"><i class="glyphicon glyphicon-check"></i><span class=" visible-md-inline visible-lg-inline"> チェック</span></a></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(8,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(8,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(8,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(8,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>

        <tr class=" visible-xs">
            <td colspan="7">サイトのCSSでBootstrapのスタイルを上書きする方法
                <a class="btn btn-link pull-right " href="../webdir/8.html" target="check"><i class="glyphicon glyphicon-check"></i></a></td>
        </tr>
        <tr class=" phone-last visible-xs">
            <td colspan="3"><span class="nowrap">03/10</span></td>
            <td class="center"><button class="btn  btn-primary  btn-sm" onclick="set_param(8,1,2,0)" type="submit"><i class="glyphicon glyphicon-pencil"></i><span class=" visible-md-inline visible-lg-inline">
編集</span></button></td>
            <td class="center"><button class="btn  btn-danger  btn-sm" onclick="set_param(8,2,3,0)" type="submit"><i class="glyphicon glyphicon-trash"></i><span class=" visible-md-inline visible-lg-inline">
削除</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(8,3,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-up"></i><span class=" visible-md-inline visible-lg-inline">
上へ</span></button></td>
            <td class="center"><button class="btn  btn-default btn-sm" onclick="set_param(8,4,4,0)" type="submit"><i class="glyphicon glyphicon-arrow-down"></i><span class=" visible-md-inline visible-lg-inline">
下へ</span></button>
            </td></tr>


        </tbody>

    </table>

</main>
<footer class="blog-footer">
    <!-- <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p> -->
    <p>
        <!-- <a href="#">Back to top</a> -->
        <a href="#">トップに戻る</a>
    </p>
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
