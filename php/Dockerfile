FROM php:5.6-fpm
COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update \
    && apt-get install -y zlib1g-dev default-mysql-client wget git \
    && docker-php-ext-install zip pdo_mysql

RUN git clone https://github.com/phalcon/cphalcon.git -b phalcon-v2.0.6 --depth 1