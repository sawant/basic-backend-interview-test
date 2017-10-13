FROM php:5.6.12-fpm

RUN apt-get update \
    && apt-get install -y nodejs \
    && apt-get install -y git libssl-dev zlib1g-dev libicu-dev g++ \
    && pecl install mongo \
    && echo extension=mongo.so > /usr/local/etc/php/conf.d/mongo.ini \
    && docker-php-ext-install zip mbstring intl

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer

# Workaround for write permission on write to MacOS X volumes
RUN usermod -u 1000 www-data

RUN chown -R www-data:www-data /tmp

ADD docker/php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/mcmakler
