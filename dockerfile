FROM php:7.4-apache

COPY ./nomor3/ /var/www/html/

RUN chown -R www-data /var/www
RUN chgrp -R www-data /var/www

RUN chmod -R o-wx /var/www

RUN docker-php-ext-install mysqli

EXPOSE 80
