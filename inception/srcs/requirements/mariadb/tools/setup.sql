CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER IF NOT EXISTS 'bditte'@'%' IDENTIFIED BY 'bditte_password';
GRANT ALL PRIVILEGES ON wordpress.* TO 'bditte'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root12345';