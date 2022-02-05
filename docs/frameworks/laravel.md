#### Create new Project

`composer create-project --prefer-dist laravel/laravel [PROJECT_NAME]`

## Basic Commands
<details>
<summary>commands</summary>

```dtd
php artisan make:migration create_banners_table --create=banners

php artisan migrate
php artisan db:seed
php artisan serve

php artisan migrate:rollback
php artisan cache:clear
php artisan config:cache
php artisan config:clear
php artisan clear-compiled

php artisan make:model Sample_data --migration
php artisan make:controller SampleController --resource --model=Receipt
```
</details>

### Save image using media library ([Spatie Media Library](https://spatie.be/docs/laravel-medialibrary/v9/introduction))

<details>
<summary>Code</summary>

- From Request
```php
if ($request->image) {
    $item->clearMediaCollection('preview')
      ->addMediaFromRequest('image')
      ->usingFileName(guid() . "." . $request->image->getClientOriginalExtension())
      ->toMediaCollection('preview');
}
```
- From Base64
```php
 $item->clearMediaCollection('preview')
  ->addMediaFromBase64($request->image)
  ->usingFileName(guid() . ".png")
  ->toMediaCollection('preview');
```
</details>