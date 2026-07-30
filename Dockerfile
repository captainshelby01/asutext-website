FROM php:8.2-cli-alpine

# Install system packages & PHP extension dependencies
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    sqlite-dev \
    oniguruma-dev \
    libzip-dev \
    icu-dev \
    nodejs \
    npm

# Install PHP extensions required by Laravel & Filament
RUN docker-php-ext-install pdo_sqlite mbstring zip gd intl bcmath exif opcache

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy repository source files
COPY . .

# Create database directory and sqlite file prior to composer build
RUN mkdir -p database storage/framework/views storage/framework/sessions storage/framework/cache && \
    touch database/database.sqlite

# Install PHP production dependencies without running artisan scripts during build
RUN composer install --no-dev --no-scripts --optimize-autoloader --no-interaction

# Install NPM dependencies & build frontend assets
RUN npm ci && npm run build

# Make entrypoint script executable
RUN chmod +x /var/www/html/docker-entrypoint.sh

EXPOSE 8000

ENTRYPOINT ["/var/www/html/docker-entrypoint.sh"]
