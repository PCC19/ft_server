#!/bin/bash

# Make updates and upgrades
apt-get upgrade && apt-get update

#Install some tools (vim wget openssl man)
apt-get install -y vim wget openssl man

#Install php and libraries required by the other softwares
apt-get install -y php php-curl php-imagick php-xml php-zip php-xmlreader php-ssh2 php-gd php-fpm php-mysql php-mbstring

#Install nginx
apt-get install -y nginx

#Install MariaDB
apt-get install -y mariadb-server

#Create website directory
mkdir /var/www/localhost

#Install phpmyadmin
## dwnld tarball
wget --progress=bar:force:noscroll https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz
## extract tarball
tar -xf phpMyAdmin-5.0.4-english.tar.gz
## delete tarball
rm phpMyAdmin-5.0.4-english.tar.gz
## move files to site directory
mv phpMyAdmin-5.0.4-english /var/www/localhost/phpmyadmin

#Install wordpress
## dwnld tarball
wget --progress=bar:force:noscroll https://wordpress.org/latest.tar.gz
## extract tarball
tar -xf latest.tar.gz
## delete tarball
rm latest.tar.gz
## Move files to site directory
mv wordpress/ var/www/localhost/wordpress
