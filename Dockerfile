# Build stage
FROM php:8.2-fpm as builder

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype-dev \
    libzip-dev \
    libonig-dev \
    unzip \
    git

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring zip exif gd

COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

RUN composer install --no-dev --optimize-autoloader \
    && chown -R www-data:www-data /var/www/storage \
    && chmod -R 775 /var/www/storage

# Production stage
FROM php:8.2-fpm

COPY --from=builder /var/www /var/www
COPY --from=builder /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y \
    libfreetype6 \
    libjpeg62-turbo \
    libpng16-16 \
    libzip4 \
    && docker-php-ext-enable opcache

WORKDIR /var/www

EXPOSE 9000
CMD ["php-fpm"]