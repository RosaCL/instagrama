<?php
include ('/laragon/www/instagrama/api/config.php');


$pdo->exec("CREATE TABLE IF NOT EXISTS user(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (250) NOT NULL,
    email VARCHAR (250) UNIQUE NOT NULL,
    image VARCHAR (250),
    city VARCHAR (250) NOT NULL,
    country VARCHAR (250) NOT NULL,
    pass VARCHAR (250) NOT NULL
)");



$pdo->exec("CREATE TABLE IF NOT EXISTS publi(
    id_publi INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    title VARCHAR (250) NOT NULL,
    descricao VARCHAR (250)  NOT NULL,
    image_publi VARCHAR (250),    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_user) REFERENCES user(id_user) ON DELETE CASCADE
)");

$pdo->exec("CREATE TABLE IF NOT EXISTS interacao(
    id_interacao INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    id_publi INT NOT NULL,
    tipo ENUM('Curtir', 'Seguir') NOT NULL,
    UNIQUE ( id_user, id_publi, tipo),
    FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_publi) REFERENCES publi (id_publi) ON DELETE CASCADE
)");

$pdo->exec("CREATE TABLE IF NOT EXISTS comentario(
    id_cmt INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    id_publi INT NOT NULL,
    comentario VARCHAR(250) NOT NULL,    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_publi) REFERENCES publi (id_publi) ON DELETE CASCADE
)");



?>