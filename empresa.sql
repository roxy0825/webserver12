CREATE DATABASE empresa;
USE empresa;

CREATE TABLE `usuarios` (
  `usr` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `activo` varchar(2) NOT NULL DEFAULT 'si'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr`, `nombre`, `correo`, `clave`, `activo`) VALUES
('danny', 'Daniela Contrearas', 'dany8@gmail.com', '1011', 'si'),
('Roxyg', 'Rosa Gongora', 'roxyg261@gmail.com', '123', 'si'),
('sebass', 'Sebastian Orozco', 'sebitas@gmail.com', '456', 'si'),
('tatis', 'Tatiana Gamboa', 'tata@gmail.com', '789', 'si');

CREATE TABLE `agenda` (
  `ID` INT NOT NULL,
  `TITULO` VARCHAR(45) NOT NULL,
  `NOTA` VARCHAR(45) NOT NULL,
  `HORA` VARCHAR(45) NOT NULL,
  `ACTIVO` VARCHAR(2) NULL DEFAULT 'si',
  PRIMARY KEY (`ID`));