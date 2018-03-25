FROM php:7.2-fpm
RUN set -x && \
  apt-get -y update && \
  apt-get install -y libicu-dev postgresql-server-dev-9.4 && \
  NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
  docker-php-ext-install -j${NPROC} intl && \
  docker-php-ext-install -j${NPROC} pdo_pgsql && \
  docker-php-ext-install -j${NPROC} pdo_mysql && \
  rm -rf /tmp/pear
  COPY ./www /var/www/html
