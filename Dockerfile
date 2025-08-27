# Stage 1 — Build frontend assets with Node
FROM node:20 AS frontend

WORKDIR /app

# Copy only package files first (better cache)
COPY package*.json vite.config.* postcss.config.* tailwind.config.* ./

RUN npm install

# Copy the rest of the source (for assets)
COPY . .

# Build assets for production (goes to public/build by default)
RUN npm run build


# Stage 2 — Build PHP dependencies with Composer
FROM dunglas/frankenphp:latest AS php

ENV SERVER_NAME=:80
WORKDIR /app

# Use PHP production INI
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy composer files first
COPY composer.json composer.lock ./

RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Copy application source
COPY . .

# Copy frontend build results from stage 1
COPY --from=frontend /app/public/build ./public/build

# Ensure writable dirs
RUN mkdir -p storage bootstrap/cache \
 && chown -R www-data:www-data storage bootstrap/cache
