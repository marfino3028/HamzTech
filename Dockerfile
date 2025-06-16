# Gunakan image PHP dengan Apache
FROM php:8.1-apache

# Instal dependensi sistem
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install \
    zip \
    pdo_mysql

# Instal Node.js dan npm
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Set working directory
WORKDIR /var/www/html

# Salin kode aplikasi
COPY . .

# Instal dependensi Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Instal dependensi npm dan build asset
RUN npm install
RUN npm run build

# Atur izin
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]