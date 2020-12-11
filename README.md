# ft_server

## ft_server project from E42

**Project Commands:**<br>

**To build the image:**<br>
```
docker build -t ft_server .
```

**To run the container:**<br>
```
docker run -it -p80:80 -p443:443 ft_server
```

**To switch auto-index on/off:**<br>
```
sh ./srcs/s_autoindex.sh
```
**Other info:**<br>
Login MariaDB:          root              “”
Loging Wordpress:    wordpres     1234
