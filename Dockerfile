# Stage 1 — Build frontend assets with Node
FROM node:20 AS frontend

WORKDIR /app

COPY package*.json vite.config.* postcss.config.* tailwind.config.* ./
RUN npm install

COPY . .
RUN npm run build


# Stage 2 — Install PHP dependencies with Composer
FROM composer:2 AS vendor

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# copy the rest of the source so scripts like post-install can run if needed
COPY . .
RUN composer dump-autoload --optimize


# Stage 3 — Final FrankenPHP runtime image
FROM dunglas/frankenphp:latest

ENV SERVER_NAME=:80
WORKDIR /app

# Use PHP production INI
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy application source code
COPY . .

# Copy vendor folder from composer stage
COPY --from=vendor /app/vendor ./vendor

# Copy frontend build artifacts
COPY --from=frontend /app/public/build ./public/build

# Ensure writable dirs
RUN mkdir -p storage bootstrap/cache \
 && chown -R www-data:www-data storage bootstrap/cache
