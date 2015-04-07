#!/bin/sh
php artisan down
git pull origin master
composer install
php artisan migrate:reset  --no-interaction
php artisan migrate --no-interaction
php artisan db:seed --no-interaction
php artisan up