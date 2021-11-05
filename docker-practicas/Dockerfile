FROM php:8.0-apache
RUN pecl install xdebug-3.1.1 \
 && docker-php-ext-enable xdebug
## Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git
