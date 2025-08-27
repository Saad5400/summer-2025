FROM dunglas/frankenphp:latest

ENV SERVER_NAME=:80
WORKDIR /app

# Use PHP production INI
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy your Laravel app into the image
COPY . /app

# Ensure writable dirs
RUN mkdir -p storage bootstrap/cache \
 && chown -R www-data:www-data storage bootstrap/cache
