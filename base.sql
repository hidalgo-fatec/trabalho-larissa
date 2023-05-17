CREATE DATABASE IF NOT EXISTS trabalho DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE trabalho;

CREATE TABLE users (
  id int(11) NOT NULL,
  nome varchar(80) NOT NULL,
  email varchar(80) NOT NULL,
  senha varchar(32) NOT NULL,
  nivel int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO users (id, nome, email, senha, nivel) VALUES
(1, 'Arnaldo Martins Hidalgo Junior', 'hidalgojunior@gmail.com', '12345678', 0),
(2, 'Larissa Pavarini da Luz', 'lari_pavarini@gmail.com', '87654321', 1);
ALTER TABLE users
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY email (email);
