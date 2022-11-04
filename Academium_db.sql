CREATE DATABASE academium-bd;

CREATE TABLE `usuarios` (
  `id_user` int PRIMARY KEY AUTO_INCREMENT,
  `email` char(255) UNIQUE NOT NULL,
  `nome_user` char(50)  NOT NULL,
  `pasword` char(50) NOT NULL
);

CREATE TABLE `alura_cursos` (
  `id_curso` int PRIMARY KEY AUTO_INCREMENT,
  `curso_nome` char(255),
  `carga_horaria` int,
  `preco_curso` double,
  `link_curso` char(255),
  `avaliacao_curso` double,
  `topico_curso` char(100),
  `instrutor` char(255)
);

CREATE TABLE `cursos_favoritados` (
  `email` char(50),
  `id_curso` int
);
