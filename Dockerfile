FROM php:8.1-apache

WORKDIR /var/www/html
COPY . .

# Instal Node.js sebagai binary
RUN curl -fsSL https://nodejs.org/dist/v18.16.0/node-v18.16.0-linux-x64.tar.xz | tar -xJ --strip-components=1 -C /usr/local

# Instal dependensi Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Build asset Vite
RUN /usr/local/bin/node /usr/local/bin/npm install
RUN /usr/local/bin/npm run build

# Atur izin
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]