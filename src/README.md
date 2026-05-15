# FashionablyLate-form

テスト用の入力フォームです

## 環境構築

### 1 リポジトリをクローンする

```bash
git clone https://github.com/takahiro61202-cyber/form-test.git
```

### 2 Dockerのコンテナを作成します

```bash
docker-compose up -d --build
```

### 3 phpコンテナにログインしてコンポーザーをインストールしてください

```bash
docker-compose exec php bash
composer install
```

### 4 envファイルを作成してください

```bash
cp .env.example .env
```

### 5 envファイルの下記の欄を修正してください

```bash
DB_CONNECTION=mysql
# before
DB_HOST=127.0.0.1
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
# after
DB_HOST=mysql
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

### 6 マイグレーションを実施してください

```bash
php artisan migrate
```

ここでデーターベースに作成されているか確認することをおすすめします

### 7 シーディング実施してください

```bash
php artisan db:seed
```

## 使用技術(実装環境)

- PHP version 8.1.34
- Laravel Framework 8.83.29
- Composer version 2.9.5
- mysql from 11.8.3-MariaDB
- git version 2.43.0

## ER図

![alt text](image.png)

## URL

- お問い合わせ画面: http://localhost/
- 確認画面: http://localhost/confirm
- ユーザー登録画面: http://localhost/register
- ログイン画面: http://localhost/login
- phpMyAdmin: http://localhost:8080/
