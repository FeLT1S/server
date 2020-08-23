#!/bin/bash

service php7.3-fpm start 
service nginx start
service mysql start
mysql -u root --skip-password < /var/database.sql
bash
sleep 300