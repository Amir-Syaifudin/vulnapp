@echo off
echo Menyalakan Docker...
docker compose up -d --build

echo Menginstall dependency Laravel...
docker compose exec app composer install --no-dev --optimize-autoloader

echo Menyiapkan environment dan permission...
docker compose exec app cp .env.example .env
docker compose exec app php artisan key:generate
docker compose exec app chown -R www-data:www-data storage bootstrap/cache
docker compose exec app chmod -R 775 storage bootstrap/cache

echo Menjalankan migrasi database...
docker compose exec app php artisan migrate --force

echo Mengaktifkan register_argc_argv untuk CVE-2024-52301...
docker compose exec app sed -i "s/register_argc_argv = Off/register_argc_argv = On/" /etc/php/8.3/apache2/php.ini
docker compose exec app apache2ctl graceful

echo.
echo SETUP SELESAI!
echo JANGAN LUPA: 
echo 1. Ubah DB_HOST=db di src/.env
echo 2. Revert celah Application.php secara manual di VS Code
pause