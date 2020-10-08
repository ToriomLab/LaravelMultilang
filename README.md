# Laravel 5.x MultiLanguage

## Installation

Install this package through [Composer](https://getcomposer.org/).

run a command in your command line:

    composer require toriomlab/laravel-multilang dev-master

In Laravel the service provider and facade will automatically get registered. 

Copy this line to providers at config/app.php file:

    Toriomlab\LaravelMultilang\LaravelMultilangServiceProvider::class

After run migration command

    php artisan migration

## Credits 
- [Toriom Lab](https://github.com/ToriomLab)