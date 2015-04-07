#!/bin/sh
php artisan down
git pull origin master
composer install
php artisan migrate:reset
php artisan migrate
php artisan db:seed
php artisan up