# === Step 1: Build Vite assets ===
FROM node:18 AS node

WORKDIR /app

# Hanya operasi Node.js di stage ini
COPY package*.json ./
RUN npm install

COPY resources/ resources/
COPY vite.config.js .

RUN npm run build

# === Step 2: Build Laravel app ===
FROM php:8.2-apache

# Install PHP dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    libzip-dev \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy Laravel app (exclude node_modules)
COPY . .

# Install dependencies Laravel
RUN git config --global --add safe.directory /var/www/html && \
    composer install --no-dev --optimize-autoloader

# Copy Vite build dari stage node
COPY --from=node /app/public/build public/build

# Set permission
RUN chown -R www-data:www-data \
    bootstrap/cache \
    storage && \
    chmod -R 775 bootstrap/cache storage
    
RUN chown -R www-data:www-data /var/www/html/public \
    && chmod -R 755 /var/www/html/public

# Enable mod_rewrite
RUN a2enmod headers
RUN a2enmod rewrite

RUN echo '<VirtualHost *:80> \
    ServerName localhost \
    DocumentRoot /var/www/html/public \
    <Directory /var/www/html/public> \
        Options Indexes FollowSymLinks \
        AllowOverride All \
        Require all granted \
    </Directory> \
    ErrorLog ${APACHE_LOG_DIR}/error.log \
    CustomLog ${APACHE_LOG_DIR}/access.log combined \
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf



# Expose port
EXPOSE 8000

CMD ["apache2-foreground"]