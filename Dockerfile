FROM php:8.1-cli

RUN apt-get update
RUN apt-get install -y bash
RUN apt-get install -y unzip git curl

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

COPY pipe /pipe

RUN chmod +x /pipe/pipe.sh

ENTRYPOINT ["bash", "/pipe/pipe.sh"]