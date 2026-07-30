#!/bin/sh
set -e

# Create storage directories and database if not exist
mkdir -p storage/framework/views storage/framework/sessions storage/framework/cache database storage/app/public
touch database/database.sqlite

# Remove existing broken symlink if any
rm -rf public/storage || true

# Set permissions
chmod -R 777 storage database public

# Run package discovery and Filament upgrades
php artisan package:discover --ansi || true
php artisan filament:upgrade || true

# Link storage
php artisan storage:link --force || true

# Copy public/Images folders into storage/app/public so both storage and Images URLs resolve seamlessly
if [ -d "public/Images/products" ]; then
    mkdir -p storage/app/public/products
    cp -rn public/Images/products/* storage/app/public/products/ 2>/dev/null || true
fi

if [ -d "public/Images/portfolio" ]; then
    mkdir -p storage/app/public/portfolio
    cp -rn public/Images/portfolio/* storage/app/public/portfolio/ 2>/dev/null || true
fi

# Run migrations & seeders
php artisan migrate:fresh --force --seed || true
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Starting Laravel server on port ${PORT:-8000}..."
exec php artisan serve --host=0.0.0.0 --port="${PORT:-8000}"
