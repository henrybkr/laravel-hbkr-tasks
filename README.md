<p align="center"><img src="https://github.com/henrybkr/hbkr-tasks/blob/master/src/assets/images/logo1_dark.svg" width="400"></p>

# laravel-hbkr-tasks

This is the corresponding server-side RESTful API that is used for the fetching, updating and deletion of records for an external database. This API is used in conjunction with the main project which can be seen [here](https://github.com/henrybkr/hbkr-tasks).

## Current Features
* Store (create), destroy (delete) & update functionality for an external database
* Provides some validation of input data before accepting the data

## Features to Implement
* Require user authentication for the api
* Deliver only data relevant to a specific user

## Technologies Utilised
* [PHP 7.3](https://github.com/php/php-src)
* [Laravel](https://github.com/laravel/laravel)
* [Laravel-cors](https://github.com/barryvdh/laravel-cors) - Cross-origin API calls when not using the same domain (developer mode)
* [Laravel Passport](https://laravel.com/docs/5.8/passport) - OAuth2 based API authentication

### Notes
* artisan serve command doesn't play well with guzzle http requests. For dev testing, switched the apache dev server htdocs