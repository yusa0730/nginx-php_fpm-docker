FROM php:fpm

RUN apt-get update && apt-get install -y \
    default-mysql-client \
    && docker-php-ext-install mysqli

WORKDIR /var/www/html

COPY src/ /var/www/html
