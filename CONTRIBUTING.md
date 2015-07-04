# Contribution Guidelines

Please branch and issue pull requests to the dev branch to contribute.

## Getting Started

* Add ```192.168.99.11    hackmemphis.dev``` to your hosts file

* Clone this repository
* ```cd /path/to/hackmemphis.com```
* ```vagrant up```
* ```vagrant ssh```
* ```cd hackmemphis.com```
* ```cp .env.example .env```
* ```composer install```
* ```php artisan migrate```
* ```php artisan db:seed```
* Browse to [http://hackmemphis.dev](http://hackmemphis.dev)

To run the test suite:

* ```codecept run```

## Vagrant

This vagrant box is built on top of the great work done on [laravel/homestead](https://github.com/laravel/homestead)

## Testing

We use Codeception for testing. Tests should be written to cover as much of our code as possible. We currently rely heavily on acceptance testing but we have Codeception configured for functional and unit tests as well.

## Deployment

We use [Envoy](http://laravel.com/docs/5.0/envoy#envoy-installation) for deployment. You will need to have it installed locally.

You need to have your SSH key added to the server.

To run a deployment:

```envoy run deploy:prod```
