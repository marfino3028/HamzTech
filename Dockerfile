FROM brettt89/silverstripe-web:latest

WORKDIR /var/www/html
COPY . .

# Instal dependensi Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Build asset Vite (Node.js sudah tersedia di image)
RUN npm install
RUN npm run build

# Atur izin
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]