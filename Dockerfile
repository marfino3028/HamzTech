FROM php:8.1-apache

WORKDIR /var/www/html
COPY . .

# Instal Composer ke /tmp
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/tmp --filename=composer
RUN php /tmp/composer install --no-dev --optimize-autoloader

# Atur izin
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Konfigurasi Apache untuk public/
RUN a2enmod rewrite
COPY .htaccess ./public/
RUN sed -i 's/\/var\/www\/html/\/var\/www\/html\/public/g' /etc/apache2/sites-available/000-default.conf

EXPOSE 80
CMD ["apache2-foreground"]