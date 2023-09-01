FROM php:8.1-apache
EXPOSE 80
VOLUME /var/www/html
WORKDIR /var/www/html
RUN a2enmod headers \
&& a2enmod rewrite \
&& service apache2 restart