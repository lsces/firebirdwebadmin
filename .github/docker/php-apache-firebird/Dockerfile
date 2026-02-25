FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    firebird-dev \
    git \
    autoconf \
    build-essential \
    && git clone https://github.com/FirebirdSQL/php-firebird.git /tmp/php-firebird \
    && cd /tmp/php-firebird \
    && phpize \
    && ./configure \
    && make \
    && make install \
    && docker-php-ext-install pdo_firebird \
    && docker-php-ext-enable interbase \
    && a2enmod rewrite \
    && rm -rf /tmp/php-firebird \
    && apt-get purge -y --auto-remove git autoconf build-essential \
    && rm -rf /var/lib/apt/lists/*

RUN { \
    echo 'error_reporting = E_ALL'; \
    echo 'display_errors = Off'; \
    echo 'display_startup_errors = Off'; \
    echo 'log_errors = On'; \
    echo 'error_log = /dev/stderr'; \
    } > /usr/local/etc/php/conf.d/docker-php-logging.ini
