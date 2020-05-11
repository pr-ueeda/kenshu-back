FROM php:7.2-apache

RUN  a2enmod rewrite
RUN apt-get update \
    && docker-php-ext-install pdo_mysql
