#!/bin/bash

# Create a MariaDB user and a database for wordpress
# (The import of my_blog.sql is not mandatory)
service mysql start && \
	mysqladmin -u root password "" &&\
	mysql -u root -e "CREATE DATABASE IF NOT EXISTS wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" && \
	mysql wordpress < /srcs/my_blog.sql && \
	service mysql stop

# Phpmyadmin setup
cp /srcs/config.sample.inc.php /var/www/localhost/phpmyadmin/config.inc.php
rm /var/www/localhost/phpmyadmin/config.sample.inc.php

# Setup do SSL (C=pais, ST=estado, L=localizacao O=organizacao CN=nome)
openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-subj '/C=BR/ST=SP/L=SP/O=42SP/CN=pcunha' \
	-keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt

# Nginx setup
cp /srcs/nginx.conf /etc/nginx/sites-available/default

# Change owners and permissions
chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*

# Wordpress setup
rm /var/www/localhost/wordpress/wp-config-sample.php
cp /srcs/wp-config.php /var/www/localhost/wordpress/wp-config.php
