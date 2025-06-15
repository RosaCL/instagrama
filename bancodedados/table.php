<?php
include ('/laragon/www/instagrama/api/config.php');


$pdo->exec("CREATE TABLE IF NOT EXISTS user(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (250) NOT NULL,
    email VARCHAR (250) UNIQUE NOT NULL,
    image VARCHAR (250),
    user_type ENUM ('Usuário', 'Organizador') DEFAULT 'Usuário',
    pass VARCHAR (250) NOT NULL
)");

$pdo->exec("CREATE TABLE IF NOT EXISTS organizador(
    id_org INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    name_org VARCHAR (250) NOT NULL,
    email_org VARCHAR (250) UNIQUE NOT NULL,
    image_org VARCHAR (250),
    cnpj INT NOT NULL,
    pass VARCHAR (250) NOT NULL,
    FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE
)");

$pdo->exec("CREATE TABLE IF NOT EXISTS evento(
    id_evt INT PRIMARY KEY AUTO_INCREMENT,
    id_org INT NOT NULL,
    name_evt VARCHAR (250) NOT NULL,
    descricao VARCHAR (250)  NOT NULL,
    image_evt VARCHAR (250),
    start_date_event DATETIME NOT NULL,
    end_date DATETIME,
    local_evento VARCHAR(255) NOT NULL,
    cidade VARCHAR (250) NOT NULL,
    preco DECIMAL(10,2) DEFAULT 0.00,
    status_evento ENUM('Ativo', 'Cancelado', 'Encerrado') DEFAULT 'Ativo',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_org) REFERENCES organizador (id_org) ON DELETE CASCADE
)");

$pdo->exec("CREATE TABLE IF NOT EXISTS interacao(
    id_interacao INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    id_evt INT NOT NULL,
    tipo ENUM('Curtir', 'Seguir') NOT NULL,
    UNIQUE ( id_user, id_evt, tipo),
    FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_evt) REFERENCES evento (id_evt) ON DELETE CASCADE
)");

$pdo->exec("CREATE TABLE IF NOT EXISTS comentario(
    id_cmt INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    id_evt INT NOT NULL,
    comentario VARCHAR(250) NOT NULL,    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_evt) REFERENCES evento (id_evt) ON DELETE CASCADE
)");



?>