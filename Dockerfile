FROM yudhaputrama/php-oracle

MAINTAINER Kurniawan Yudha Putrama <yudhaputrama.edu@gmail.com>

RUN apt-get install git

WORKDIR /tmp
RUN curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
RUN rm -rf

COPY . /var/www/html
RUN cd application | composer install