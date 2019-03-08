# チームラボ オンラインスキルアップSTEP1

## 概要

##画面仕様書の中で実装できたもの
①ログイン画面：ログインボタン
②ホーム場面：キャプション
③投稿画面
：キャプション入力フォーム（文字制限はできていません）
  投稿ボタン

##画面仕様書の中で実装できなかったもの
①ホーム画面
：ユーザ名
　投稿画像
  投稿削除、前へ、次へボタン
  いいね
②投稿画面
③プロフィール画面
④いいねしたユーザー名一覧
：画像選択ボタン（アップロードができませんでした)

##難しかったところ 
全てが難しかったです。エラーの意味がわからず検索しても何で対処できるか全くわかりませんでした。
また、.phpのファイルやGitなどがどのようにつながっているのかなどの全体像の把握が難しかったです。

## 工夫した点
特になし。

## 起動・停止

起動
```
$ docker-compose up -d
```

停止
```
$ docker-compose down
```

## URL

index.php  
http://localhost:9000

pgadmin  
http://localhost:5050


## ディレクトリ構成
* phpなコンテンツは./appに配置となります
* nginxの設定は./nginx/site.conf

```
.
├── app
│   └── index.php
├── nginx
│   └── site.conf
├── pgadmin
├── pgsql
│   └── data
│       └── .gitkeep
├── docker-compose.yml
├── .gitignore
└── README.md
```

## pgadminへの接続
デフォルトのログインアカウントは以下の通り
```
USER：user@domain.com
PASS：SuperSecret
```

データベースの追加は以下の通り
```
サーバー名：自由に決めて
HOSTNAME：pgsql
DBNAME：postgres
USERNAME：postgres
PASSWORD：example
PORT:5432
```
