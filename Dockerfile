# Use official PHP image
FROM php:8.2-fpm

# Upgrade all packages to latest versions to reduce vulnerabilities
RUN apt-get update && apt-get upgrade -y

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype-dev \
    libzip-dev \
    libonig-dev \
    libpq-dev \
    unzip \
    git \
    curl

# Configure PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo_mysql mbstring zip exif gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application files
COPY . .

# Install dependencies (no dev dependencies for production)
RUN composer install --optimize-autoloader --no-dev

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Use port 7001 for PHP-FPM (instead of 9000)
EXPOSE 7001
CMD ["php-fpm"]