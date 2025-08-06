#!/bin/bash

set -e

sudo apt update && sudo apt install -y php php-sqlite3 php-bcmath php-mbstring php-xml composer npm curl unzip

composer install
npm install && npm run build

cp .env.example .env
php artisan key:generate

mkdir -p database
touch database/database.sqlite

sed -i 's/DB_CONNECTION=.*/DB_CONNECTION=sqlite/' .env
sed -i 's|DB_DATABASE=.*|DB_DATABASE='$(pwd)'/database/database.sqlite|' .env

sudo chown -R $USER:$USER storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

php artisan migrate
php artisan db:seed --class=SiteContentSeeder

php artisan serve --host=0.0.0.0 --port=8000
