FROM php:7.1.5-fpm
RUN pecl channel-update pecl.php.net
RUN pecl install redis-3.1.2
RUN pecl install xdebug-2.5.4
RUN docker-php-ext-enable redis xdebug
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-configure pcntl \
    && docker-php-ext-install pcntl
RUN chown -R www-data:www-data /var/www/html/