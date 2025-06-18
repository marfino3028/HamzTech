FROM node:18 AS node

# Step 1: Build Vite assets
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY resources/ resources/
COPY vite.config.js .
RUN npm run build


# Step 2: Build Laravel + Apache + PHP
FROM php:8.1-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    libzip-dev \
    zip \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy Laravel source
COPY . .

# Copy Vite build result from first stage
COPY --from=node /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set folder permissions
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Configure Apache
COPY .htaccess ./public/
RUN sed -i 's/Listen 80/Listen 8000/g' /etc/apache2/ports.conf
RUN sed -i 's/:80/:8000/g' /etc/apache2/sites-available/000-default.conf

EXPOSE 8000
CMD ["apache2-foreground"]