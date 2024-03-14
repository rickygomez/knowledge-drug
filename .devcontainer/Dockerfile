# Use an official PHP Apache runtime
FROM php:8.2-apache

# Xdebug
ARG XDEBUG_VERSION=3.3.1

# Enable Apache modules
RUN a2enmod rewrite

# Install PostgreSQL client and its PHP extensions
RUN set -eux; \
    apt-get update; \
    apt-get upgrade -y; \
    apt-get install -y --no-install-recommends \
            curl \
            libmemcached-dev \
            libz-dev \
            libpq-dev \
            libjpeg-dev \
            libpng-dev \
            libfreetype6-dev \
            libssl-dev \
            libwebp-dev \
            libxpm-dev \
            libmcrypt-dev \
            libonig-dev; \
    rm -rf /var/lib/apt/lists/*

RUN pecl install xdebug-${XDEBUG_VERSION} \
    && docker-php-ext-enable xdebug

RUN set -eux; \
    # Install the PHP pdo_mysql extention
    docker-php-ext-install pdo_mysql; \
    # Install the PHP pdo_pgsql extention
    docker-php-ext-install pdo_pgsql; \
    # Install the PHP gd library
    docker-php-ext-configure gd \
            --prefix=/usr \
            --with-jpeg \
            --with-webp \
            --with-xpm \
            --with-freetype; \
    docker-php-ext-install gd; \
    php -r 'var_dump(gd_info());'

# Install Composer form image DockerHub
COPY --from=composer:2.6.6 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
