# focus

## Usage

```bash
$ git clone <cloneするURL> <ディレクトリ名>
$ cd <ディレクトリ名>
$ make init
```

※Windows環境でmakeが使えない場合は以下のページを参考にインストール
https://zenn.dev/genki86web/articles/6e61c167fbe926

## ブラウザへのアクセス

http://localhost:28000

- PHPの.envはdocker-comopseの環境設定で上書きします

値を変更したい場合はmake_env.shを変更してください
.envを作成して、以下を書き込みます

```bash
WEB_PORT=28000
DB_PORT=3306
DB_NAME=focus
DB_USER=phper
DB_PASS=secret
```

## エラーの対応

```bash
ERROR [youtube-stamp_web 3/4] RUN groupadd -g 20 hoge   && useradd -m -s /bin/bash -l -u 501 -g 20 hoge   && chown -R hoge:hoge /var/www/   && chmod +x /var/www/   && mkdir /var/run/php-fpm   && chown -R hoge:hoge /var
```

GIDが100以上の指定が必須(99以下はシステムアカウントのため)

make_env.shのGROUP_ID USER_IDを変更

```bash
GROUP_ID=1000
USER_ID=1000
```

```bash
$ make init
```

## Xdebug launch.jsonの記述

pathMappingsは
"コンテナ側" : "/webまでのフルパスを記述する"

```bash
{
  "version": "0.2.0",
  "configurations": [
      {
          "name": "XDebug on docker",
          "type": "php",
          "request": "launch",
          "port": 9000,
          "pathMappings": {
            "/var/www/src": "/home/<ユーザー名>/src/focus"
          }
      }
  ]
}
```

## Container structures

```bash
├── focus_web
└── focus_app
└── focus_db
```
### web container

- Base image
  - [nginx](https://hub.docker.com/_/nginx):1.20-alpine

### app container

- Base image
  - [php](https://hub.docker.com/_/php):8.1.0-fpm-bullseye
  - [node](https://hub.docker.com/_/node):16.17-bullseye-slim
  - [composer](https://hub.docker.com/_/composer):2.4

### db container

- Base image
  - [mysql](https://hub.docker.com/_/mysql):8.0.30-debian
