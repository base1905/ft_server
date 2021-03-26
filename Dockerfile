# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: arannara <base1905@yandex.ru>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/09/14 18:25:33 by arannara          #+#    #+#              #
#    Updated: 2020/09/21 16:05:58 by arannara         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM		debian:buster

RUN		apt-get -y update 
RUN		apt-get -y install vim nginx default-mysql-server php7.3 php7.3-fpm php7.3-mysql openssl wordpress

ADD		https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz pma.tar.gz
RUN		tar -xvf pma.tar.gz && mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin

COPY		./srcs/default ./srcs/entrypoint.sh ./srcs/createdb.sql /etc/nginx/sites-available/
COPY		./srcs/config.inc.php /var/www/html/phpmyadmin
COPY		./srcs/autoindex.sh /

RUN		mv /usr/share/wordpress /var/www/html
COPY		./srcs/wp-config.php /var/www/html/wordpress

RUN		openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt \
		-subj "/C=RU/ST=Russia/L=Moscow/O=21 School/OU=4th Wave/CN=Vasily Belov"


RUN		chown -R www-data:www-data /var/www/html
RUN		chmod 755 /var/www/html/phpmyadmin/config.inc.php
RUN		service mysql start && mysql < /etc/nginx/sites-available/createdb.sql

EXPOSE		80 443

ENTRYPOINT	["bash", "/etc/nginx/sites-available/entrypoint.sh"]	
