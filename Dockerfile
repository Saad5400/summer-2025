# Stage 1 — Build frontend assets with Node
FROM node:20 AS frontend

WORKDIR /app

# install npm deps
COPY package*.json vite.config.* postcss.config.* tailwind.config.* ./
RUN npm install

COPY . .
RUN npm run build


# Stage 2 — Install PHP dependencies with Composer
FROM composer:2 AS vendor

WORKDIR /app

# copy full app (so artisan & configs exist)
COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist


# Stage 3 — Final FrankenPHP runtime image
FROM dunglas/frankenphp:latest

ENV SERVER_NAME=:80
WORKDIR /app

# Use PHP production INI
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy app source
COPY . .

# Copy vendor from composer stage
COPY --from=vendor /app/vendor ./vendor

# Copy frontend build artifacts
COPY --from=frontend /app/public/build ./public/build

# Ensure writable dirs
RUN mkdir -p storage bootstrap/cache \
 && chown -R www-data:www-data storage bootstrap/cache
