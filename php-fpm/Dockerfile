FROM php:fpm

# 必要なパッケージと拡張モジュールをインストール
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    && docker-php-ext-install mysqli

# peclを更新し、redis拡張モジュールをインストール
RUN pecl update-channels \
    && pecl install redis \
    && docker-php-ext-enable redis

# Composerのインストール
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# ComposerでPredisをインストール
# RUN composer require predis/predis


COPY src/ /var/www/html
