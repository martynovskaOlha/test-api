# PHP Version alpine image to install based on the PHP_VERSION environment variable
FROM php:8.0-fpm-alpine
COPY php.ini $PHP_INI_DIR


# Install PHP Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer self-update 1.9.1

# Run php-fpm
CMD php artisan serve --host=0.0.0.0 --port=8000
