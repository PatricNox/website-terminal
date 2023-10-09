FROM php:8.0-fpm-alpine
RUN apk add icu-dev
RUN docker-php-ext-install -j$(nproc) intl \
    pdo \
    pdo_mysql \
    mysqli

COPY docker-php-entrypoint /usr/local/bin/docker-php-entrypoint
RUN chmod +x /usr/local/bin/docker-php-entrypoint
