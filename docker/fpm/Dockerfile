FROM php:7.1-fpm

COPY composer-install.sh /tmp/composer-install.sh

RUN pecl install xdebug-2.5.0 \
    && docker-php-ext-enable xdebug \
    && apt-get update -y \
    && apt-get install -y zlib1g-dev wget \
    && docker-php-ext-install zip \
    && sh /tmp/composer-install.sh

WORKDIR /app
