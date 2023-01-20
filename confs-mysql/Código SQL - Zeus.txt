CREATE TABLE IF NOT EXISTS Usuario
(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(150) NOT NULL,
  senha VARCHAR(150) NOT NULL,
  email VARCHAR(150) NOT NULL,
  PRIMARY KEY (id)
  UNIQUE (nome, email)
);

CREATE TABLE Pessoa
(
  id INT NOT NULL AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  nome VARCHAR(150) NOT NULL,
  sobrenome VARCHAR(150) NOT NULL,
  descrição TEXT,
  PRIMARY KEY (id)
  FOREIGN KEY (id_usuario) REFERENCES Usuario(id)
);

CREATE TABLE Pais
(
  id INT NOT NULL AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  nome VARCHAR(150) NOT NULL,
  descrição TEXT,
  PRIMARY KEY (id)
  FOREIGN KEY (id_usuario) REFERENCES Usuario(id)
);

CREATE TABLE vive
(
  id INT NOT NULL AUTO_INCREMENT
  id_pessoa INT NOT NULL,
  id_pais INT NOT NULL,
  PRIMARY KEY (id)
  FOREIGN KEY (id_pessoa) REFERENCES Pessoa(id)
  FOREIGN KEY (id_pais) REFERENCES Pais(id)
);

