FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy project files into Apache server's root directory
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Set correct permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html

# Expose default Apache port
EXPOSE 80
