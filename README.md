composer create-project laravel/laravel laravel_crud
cd laravel_crud
php artisan serve

(open new CMD in project folder)

php artisan make:model product -m

(-m for generate migration file automatically)

(add fields in generated migration file)

(config .env file for database)

php artisan migrate:fresh

php artisan make:controller ProductController  --resource

php artisan make:view products/layouts/app
php artisan make:view products/layouts/header
php artisan make:view products/index
php artisan make:view products/create
php artisan make:view products/edit
php artisan make:view products/show

(add these routes)

Route::get('/', [ProductController::class, 'index']);
Route::get('/products/{id}/show', [ProductController::class, 'show']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::patch('/products/{id}/update', [ProductController::class, 'update']);
Route::delete('/products/{id}/delete', [ProductController::class, 'destroy']);

(add bootstrap CDN in app.blade.php)

