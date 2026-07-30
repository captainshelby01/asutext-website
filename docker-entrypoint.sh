#!/bin/sh
set -e

# Create storage directories and database if not exist
mkdir -p storage/framework/views storage/framework/sessions storage/framework/cache database storage/app/public
touch database/database.sqlite

# Set permissions
chmod -R 777 storage database

# Run package discovery and Filament upgrades
php artisan package:discover --ansi || true
php artisan filament:upgrade || true

# Link storage and seed database cleanly
php artisan storage:link || true
php artisan migrate:fresh --force --seed || true
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Starting Laravel server on port ${PORT:-8000}..."
exec php artisan serve --host=0.0.0.0 --port="${PORT:-8000}"
