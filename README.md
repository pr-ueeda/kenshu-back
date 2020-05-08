##バックエンド研修


##Phinx
マイグレーションパッケージ

```
// 初期化コマンド
$ phnix init
```

phinx.ymlファイルを環境に合わせて書き換え

```
// マイグレーションファイル作成
$ phinx create マイグレーション名
```

```
// マイグレーション実行
$ phinx migrate -e development
```

```
// 特定のバージョンを指定してマイグレーション実行
$ phinx migrate -e development -t 2020050803314
```

```$xslt
// ロールバック実行
$ phinx rollback -e development
```
