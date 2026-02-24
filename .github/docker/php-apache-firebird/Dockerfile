FROM php:8.1-apache
RUN apt-get update && apt-get install -y firebird-dev && \
    docker-php-ext-install pdo_firebird && a2enmod rewrite
