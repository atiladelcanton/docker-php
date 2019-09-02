FROM php:7.2-fpm

LABEL maintainer="Atila Rampazo <atilarampazo@gmail.com>"

RUN apt-get update && \
    apt-get install -y --no-install-recommends && \
    docker-php-ext-install pdo_mysql && \
    apt-get clean
