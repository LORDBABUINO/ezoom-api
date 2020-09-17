FROM php:7.4-apache
RUN docker-php-ext-install -j$(nproc) mysqli
RUN docker-php-ext-install -j$(nproc) pdo
RUN docker-php-ext-install -j$(nproc) pdo_mysql
RUN mv $APACHE_CONFDIR/mods-available/rewrite.load $APACHE_CONFDIR/mods-enabled/rewrite.load
RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
