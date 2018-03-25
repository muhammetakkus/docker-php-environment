FROM php:7.2-fpm

ENV DEBIAN_FRONTEND noninteractive
ENV DEBIAN_FRONTEND teletype

RUN set -x && \
  rm -rf /etc/apt/sources.list
RUN export DEBIAN_FRONTEND=noninteractive && apt-get -y update && \
  apt-get install dialog apt-utils -y && \
  apt-get install aptitude -y && \
  aptitude install php7.2-pdo-mysql

COPY ./etc/sources.list /etc/apt
COPY ./www /var/www
