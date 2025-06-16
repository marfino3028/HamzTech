FROM php:8.1-apache

WORKDIR /var/www/html
COPY . .

# Instal Composer ke direktori sementara
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/tmp --filename=composer
RUN php /tmp/composer install --no-dev --optimize-autoloader

# Pastikan asset sudah dibuild lokal (karena kita hindari Node.js di sini)
# (Jalankan 'npm run build' lokal sebelum commit)

# Atur izin
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]