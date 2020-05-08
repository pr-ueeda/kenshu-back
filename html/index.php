<?php
/*
 * rootingの役割を担うファイル。どこからアクセスされてもここを通るように設定する。
 * このファイルの全体的な挙動としては、アクセスされたURLを解析し、URIに基づいたcontrollerで後の処理を対応する。
 */

echo $_SERVER["REQUEST_URI"];

if (empty($_SERVER['REQUEST_URI'])) {
    exit();
}

// アクセスされたURIを'/'で区切る
$parse_uri = explode('/', $_SERVER['REQUEST_URI']);
// URIの最後を取得
$last_uri = end($parse_uri);
// $last_uriで取得した値を切り離す
$call = substr($last_uri, 0, strcspn($last_uri, '?'));

// 切り離したURIに基づくファイル名が../app/controllers にあるか
if (file_exists('../app/controllers/'. $call . '.php')) {
    // あった場合includeし、controllerをインスタンス化
    include('../app/controllers/' . $call . '.php');
    $class = 'app\controllers\\' . $call;
    $obj = new $class();

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        $response = $obj->index();
    } else {
        $response = $obj->post();
    }

    echo $response;
    exit;
} else {
    // ファイルが見つからない場合は404エラーを返す
    echo "404 NOT FOUND";
    // header(" 404 NOT FOUND");
    exit();
}
