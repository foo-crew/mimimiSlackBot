FROM jorge07/alpine-php:7-dev-sf

RUN sed -i "s/opcache.enable=1/opcache.enable=0/g" /etc/php7/conf.d/00_opcache.ini \
   && sed -i "s/opcache.enable_cli=1/opcache.enable_cli=0/g" /etc/php7/conf.d/00_opcache.ini

RUN apk add --no-cache --update \
    php7-gd \
    rsync \
    nodejs \
    vim \
    nodejs-npm \
    && npm install -g bower

WORKDIR /app
