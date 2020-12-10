#!/bin/bash

arq='/etc/nginx/sites-enabled/default'

grep "autoindex on;" "$arq" > /dev/null
if [ $? -eq 0 ]; then
	echo "Status atual do autoindex: ON"
	sed -i 's/autoindex on/autoindex off/' "$arq"
	flag="OFF";
else
	echo "Status atual do autoindex: OFF"
	sed -i 's/autoindex off/autoindex on/' "$arq"
	flag="ON"
fi
echo "Switching auto-index ..."
echo "Restarting ngnix ..."
service nginx restart
echo "Done"
echo "Autoindex is: $flag"
