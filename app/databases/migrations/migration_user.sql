CREATE TABLE `usuarios` (
`id_usuario` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
`nombre` varchar(30) NOT NULL,
`apellido` varchar(30) NOT NULL,
`usuario` varchar(50) NOT NULL,
`clave` varchar(50) NOT NULL,
`nivel` tinyint(1) NOT NULL
);