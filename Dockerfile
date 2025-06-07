# Start from the official PHP image with Apache
FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite for Laravel routing
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy Laravel app files into container
COPY . /var/www/html

# Install Composer (dependency manager for PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set correct permissions for storage & cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Install Laravel dependencies
RUN composer install --no-interaction --optimize-autoloader

# Expose port 80
EXPOSE 80
