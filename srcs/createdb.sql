CREATE DATABASE ft_server_db;
CREATE USER 'arannara'@'localhost' IDENTIFIED BY 'qwertynara24';
GRANT ALL PRIVILEGES ON ft_server_db.* TO 'arannara'@'localhost';
FLUSH PRIVILEGES;
