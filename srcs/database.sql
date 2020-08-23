CREATE USER 'jiandre'@'localhost' IDENTIFIED BY 'root';
GRANT ALL PRIVILEGES ON ft_database.* TO 'jiandre'@'localhost';
CREATE DATABASE ft_database;
FLUSH PRIVILEGES;
UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE user='jiandre';