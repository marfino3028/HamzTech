# Stage 1: Build dengan Node.js untuk asset
FROM node:18 AS builder
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm install
COPY resources/ ./resources/
COPY vite.config.js .
RUN npm run build

# Stage 2: Gunakan image PHP untuk runtime
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Salin kode aplikasi
COPY . .

# Instal dependensi Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Salin asset yang dibuild dari stage 1
COPY --from=builder /app/public/build ./public/build

# Atur izin
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]