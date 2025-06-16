# Gunakan image PHP dengan Apache sebagai basis
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Salin kode aplikasi
COPY . .

# Unduh dan instal Node.js sebagai binary (tanpa apt-get)
RUN curl -fsSL https://nodejs.org/dist/v18.16.0/node-v18.16.0-linux-x64.tar.xz | tar -xJ --strip-components=1 -C /usr/local

# Instal dependensi Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Instal dependensi npm dan build asset
RUN npm install
RUN npm run build

# Atur izin untuk storage dan cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]