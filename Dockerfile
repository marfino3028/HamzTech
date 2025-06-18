# === Step 1: Build Vite assets ===
FROM node:18 AS node

WORKDIR /app

# Salin & install dependencies frontend
COPY package*.json ./
RUN npm install

# Salin semua file JS/TS frontend
COPY resources/ resources/
COPY vite.config.js .

# Build asset Vite
RUN npm run build


# === Step 2: Build Laravel app ===
FROM php:8.1-apache

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

# Set working directory
WORKDIR /var/www/html

# Copy Laravel app
COPY . .

# Copy Vite build dari tahap node
COPY --from=node /app/public/build public/build

# Install dependencies Laravel
RUN composer install --no-dev --optimize-autoloader

# Set permission
RUN chown -R www-data:www-data \
    bootstrap/cache \
    storage && \
    chmod -R 775 bootstrap/cache storage

# Enable mod_rewrite
RUN a2enmod rewrite

# Salin .htaccess ke public (jika tidak ada, lewati saja)
COPY public/.htaccess public/.htaccess

# Ganti port Apache (optional)
RUN sed -i 's/Listen 80/Listen 8000/g' /etc/apache2/ports.conf && \
    sed -i 's/:80/:8000/g' /etc/apache2/sites-available/000-default.conf

# Expose port
EXPOSE 8000

# Jalankan apache
CMD ["apache2-foreground"]