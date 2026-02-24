FROM php:8.1-apache
RUN apt-get update && apt-get install -y firebird-dev && \
    pecl install firebird && \
    docker-php-ext-install pdo_firebird && \
    docker-php-ext-enable firebird && \
    a2enmod rewrite
