CREATE TABLE `usuarios` (
  `id_user` int PRIMARY KEY AUTO_INCREMENT,
  `usuario` char(50) UNIQUE,
  `password` char(50),
  `email` char(255)
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
  `usuario` char(50),
  `id_curso` int
);
