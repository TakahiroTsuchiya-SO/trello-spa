FROM ubuntu:20.04
RUN apt-get update && apt-get install -y init && apt-get clean all

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get install -y curl vim git

RUN apt-get install -y php7.4 php7.4-fpm php7.4-mysql php7.4-mbstring php7.4-zip php7.4-bcmath php7.4-xml
RUN mkdir -p /run/php7.4-fpm

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs

RUN useradd nginx
WORKDIR /var/www/

RUN echo "" >> ~/.bashrc
RUN echo "alias ll='ls -l'" >> ~/.bashrc