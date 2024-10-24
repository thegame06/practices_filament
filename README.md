composer create-project laravel/laravel annonai-management

composer require filament/filament:"^3.2" -W

php artisan filament:install --panels

php artisan make:filament-user

# Sample 01 - Filament PHP

Env:
https://laragon.org/download/#Edition
https://pen-y-fan.github.io/2023/01/15/how-to-update-the-php-version-in-laragon/


Paquetes:

https://packagist.org/packages/altwaireb/laravel-world


php artisan make:filament-resource User  --generate
php artisan make:filament-resource Country  --generate




php artisan make:migration add_address_fields_to_users_table



https://filamentphp.com/docs/3.x/support/icons


# Aqui los pasos para ambiente de desarrollo.

1- preparar el .env cuando no se tiene 
2- composer install
php artisan key:generate
php artisan migrate
php artisan world:seeder
php artisan migrate:refresh --seed