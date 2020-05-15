<?php
?>
<!DOCTYPE>
<html lang="ja">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link href="../example.css" rel="stylesheet">
</head>
<body>
<p>マイページです</p>
<a class="text-muted" href="/index.php">トップへ</a>

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