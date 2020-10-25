FROM php:7.4-fpm


RUN apt-get update \
    && apt-get install -y --no-install-recommends vim curl debconf subversion git apt-transport-https apt-utils \
    build-essential locales acl mailutils wget nodejs zip unzip \
    gnupg gnupg1 gnupg2 \
    zlib1g-dev \
    sudo \
    vim

RUN docker-php-ext-install pdo pdo_mysql opcache

COPY conf/php.ini /usr/local/etc/php/php.ini
COPY conf/php-fpm-pool.conf /usr/local/etc/php/pool.d/www.conf
COPY conf/opcache.ini /usr/local/etc/php/conf.d/opcache.ini


ARG UUID
ARG GUID

# Stablish UUID:GUID to www-data (Usually 501:20)
RUN usermod -u ${UUID} www-data && \
    groupmod -g 1020 dialout && \
    groupmod -g ${GUID} www-data

RUN echo "www-data ALL=(ALL) ALL" > /etc/sudoers

WORKDIR /var/www/html
USER www-data
RUN chown www-data:www-data /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
