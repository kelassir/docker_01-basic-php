FROM php:7.3-apache
RUN apt update && apt upgrade -y && apt install -y libzip-dev zlib1g-dev libpng-dev libicu-dev g++ libxml2-dev
RUN docker-php-ext-install json mysqli iconv ctype tokenizer mbstring zip gd intl xmlrpc soap opcache
