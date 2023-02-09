#syntax=docker/dockerfile:1.4

ARG PHP_VERSION="8.1"
ARG ALPINE_VERSION="3.16"

FROM php:${PHP_VERSION}-cli-alpine${ALPINE_VERSION} as php

ARG MONGODB_EXT_VERSION

RUN apk add autoconf openssl make g++ openssl-dev
RUN pecl install mongodb-${MONGODB_EXT_VERSION} \
    && docker-php-ext-enable mongodb


FROM mongo:6.0-focal as mongo

COPY --link docker/mongo.key /file.key
RUN chmod 400 /file.key \
    && chown mongodb:mongodb /file.key