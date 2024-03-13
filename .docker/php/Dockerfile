FROM php:8.2-fpm-alpine3.18

RUN apk update \
    && apk add vim \
    && apk add libpq-dev && docker-php-ext-install pdo_pgsql \
