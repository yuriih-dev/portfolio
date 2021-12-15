#### Create new Project
`composer create-project --prefer-dist laravel/laravel [PROJECT_NAME]`

## Basic Commands

```dtd
php artisan make:migration create_banners_table --create=banners

php artisan migrate
php artisan db:seed
php artisan serve

php artisan migrate:rollback
php artisan cache:clear
php artisan config:cache
php artisan config:clear

php artisan make:model Sample_data --migration
php artisan make:controller SampleController --resource --model=Receipt
```