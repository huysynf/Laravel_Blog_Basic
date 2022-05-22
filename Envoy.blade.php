@setup
$product_dir = '/var/www/html/my-blog/';
@endsetup

@servers(['product' => 'root@54.236.187.178'])

@story('deploy', ['on' => ['product']])
@if($branch == 'main')
    product
@endif
@endstory

@task('product')
cd {{ $product_dir }}
git stash
export GIT_SSL_NO_VERIFY=1
git checkout main
git pull origin main
composer install --prefer-dist --no-ansi --no-interaction --no-progress --no-scripts
composer dump-autoload
php artisan key:generate
php artisan cache:clear
php artisan config:clear
php artisan migrate
php artisan db:seed
php artisan queue:restart
php artisan cache:clear
@endtask

