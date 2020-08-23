# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: jiandre <kostbg1@gmail.com>                +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/08/04 17:36:06 by jiandre           #+#    #+#              #
#    Updated: 2020/08/23 16:12:09 by jiandre          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade
RUN apt-get install -y nginx default-mysql-server php7.3 php7.3-fpm wordpress php7.3-mysql php-json php-mbstring openssl
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpmyadmin.tar.gz
RUN tar xvzf phpmyadmin.tar.gz && mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin
RUN mv /usr/share/wordpress /var/www/html

COPY ./srcs/default /etc/nginx/sites-available/default
COPY ./srcs/database.sql /var/
COPY ./srcs/config.inc.php /var/www/html/phpmyadmin/
COPY ./srcs/wp-config.php /var/www/html/wordpress/
COPY ./srcs/server.crt /etc/ssl/certs/server.crt
COPY ./srcs/server.key /etc/ssl/private/server.key
COPY ./srcs/autoindex.sh /
COPY ./srcs/start.sh /

RUN chmod +x start.sh
RUN chown -R www-data var/www/html

EXPOSE 80 443
CMD bash start.sh