CREATE DATABASE IF NOT EXISTS burger_shop_db COLLATE utf8mb4_general_ci;

/* switch to database */
USE burger_shop_db;

CREATE TABLE IF NOT EXISTS client
(
    id       INT(11)      NOT NULL AUTO_INCREMENT,
    email    VARCHAR(100) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY email (email)
);

INSERT INTO `client` (`id`, `email`, `username`, `password`)
VALUES ('1', 'user1@gmail.com', 'David', MD5('123123'));
INSERT INTO `client` (`id`, `email`, `username`, `password`)
VALUES ('2', 'user2@gmail.com', 'Alex', MD5('123123'));
