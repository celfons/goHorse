create table ocorrencias( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, usuario VARCHAR(30) NOT NULL, perdaComercial tinyint(1) DEFAULT NULL, programa VARCHAR(50), horario VARCHAR(10), origem VARCHAR(50), falha VARCHAR(255), anexo VARCHAR(50) );

create table acesso(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, usuario VARCHAR(30) NOT NULL, senha VARCHAR(30) NOT NULL, administrador tinyint(1) DEFAULT NULL );
