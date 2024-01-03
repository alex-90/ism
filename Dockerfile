FROM php:7.4-apache

COPY . .

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

#RUN apt-get update

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN service apache2 start

WORKDIR /var/www/html/public

