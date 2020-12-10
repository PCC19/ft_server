#!/bin/bash

# Add srcs to PATH to execute s_autoindex.sh
export PATH=/srcs/:$PATH

# Start all services
service nginx start
service mysql start
service php7.3-fpm start

bash
