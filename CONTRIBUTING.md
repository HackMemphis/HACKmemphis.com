# Contribution Guidelines

Please branch and issue pull requests to the dev branch to contribute.

## Getting Started

* Clone this repository
* ```cd /path/to/hackmemphis.com```
* ```vagrant up```
* ```vagrant ssh```
* ```cd hackmemphis.com```
* ```cp .env.example .env```
* ```composer install```
* ```php artisan migrate```
* ```php artisan db:seed```
* Browse to [http://localhost:8000](http://localhost:8000)

To run the test suite:

* ```phpunit```

## Vagrant

This vagrant box is built on top of the great work done on [laravel/homestead](https://github.com/laravel/homestead)

## Testing

To run the test suite:

* ```phpunit```

## Deployment

We use [Envoy](http://laravel.com/docs/5.0/envoy#envoy-installation) for deployment. You will need to have it installed locally.

You need to have your SSH key added to the server.

To run a deployment:

```envoy run deploy:prod```
