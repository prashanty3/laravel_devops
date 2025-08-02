FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Add user for Laravel application
RUN groupadd -g 1000 www && useradd -u 1000 -ms /bin/bash -g www www

# Copy code with proper permissions
COPY --chown=www:www . .

# Use non-root user
USER www

EXPOSE 9000
CMD ["php-fpm"]
