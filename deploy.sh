#!/bin/sh
php artisan down
git pull origin master
composer install
php artisan migrate:reset  --force
php artisan migrate --force
php artisan db:seed --force
php artisan up