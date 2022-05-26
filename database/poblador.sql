
-- -----------------------------------------------------
-- Profesores
-- -----------------------------------------------------
INSERT INTO `profesores` (`profe_id`, `profe_nombre`, `profe_apellido`, `profe_numero`, `profe_correo`, `profe_usuario`, `profe_password`) VALUES (NULL, 'Jose Alonso', 'Perez Cruz', '9380001122', 'j_alonsopc@yahoo.com', 'j_alonsopc', '123');
INSERT INTO `profesores` (`profe_id`, `profe_nombre`, `profe_apellido`, `profe_numero`, `profe_correo`, `profe_usuario`, `profe_password`) VALUES (NULL, 'Jose Felipe', 'Cocon JuAarez', '9381234567', 'jcocon@pampano.unacar.mx', 'jcocon', '123');
INSERT INTO `profesores` (`profe_id`, `profe_nombre`, `profe_apellido`, `profe_numero`, `profe_correo`, `profe_usuario`, `profe_password`) VALUES (NULL, 'Jose Gabriel', 'Reding Dominguez', '9384445566', 'jreding@pampano.unacar.mx', 'jreding', '123');
INSERT INTO `profesores` (`profe_id`, `profe_nombre`, `profe_apellido`, `profe_numero`, `profe_correo`, `profe_usuario`, `profe_password`) VALUES (NULL, 'Gustavo', 'Verduzco Reyes', '9382221144', 'hgvrmx@hotmail.com', 'hgvrmx', '123');
INSERT INTO `profesores` (`profe_id`, `profe_nombre`, `profe_apellido`, `profe_numero`, `profe_correo`, `profe_usuario`, `profe_password`) VALUES (NULL, 'Benjamin', 'Tass Hedrrera', '9385446244', 'btass@pampano.unacar.mx', 'btass', '123');



-- -----------------------------------------------------
-- Acatas
-- -----------------------------------------------------
INSERT INTO `actas` (`acta_id`, `acta_fecha`, `acta_lugar`, `acta_titulo`) VALUES (NULL, '2022-05-16', 'Edificio de vinculación', 'Planeación del temario de la materia XXXXX ');
INSERT INTO `actas` (`acta_id`, `acta_fecha`, `acta_lugar`, `acta_titulo`) VALUES (NULL, '2022-04-15', 'bibloteca de campus principal', 'Renovación de la carrera XXXXXXX');
INSERT INTO `actas` (`acta_id`, `acta_fecha`, `acta_lugar`, `acta_titulo`) VALUES (NULL, '2022-03-12', 'Facultad de ciencias de la informarción', 'entrega de resultados');
INSERT INTO `actas` (`acta_id`, `acta_fecha`, `acta_lugar`, `acta_titulo`) VALUES (NULL, '2022-02-13', 'Plaza Real', 'comparación de datos');
INSERT INTO `actas` (`acta_id`, `acta_fecha`, `acta_lugar`, `acta_titulo`) VALUES (NULL, '2022-01-04', 'KFC', 'junta xxxxxxx');



-- -----------------------------------------------------
-- Prodesores_Acatas
-- -----------------------------------------------------

INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('1', '1', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('1', '2', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('1', '4', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('1', '5', '0', '1');

INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('2', '1', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('2', '2', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('2', '3', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('2', '4', '0', '1');

INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('3', '1', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('3', '2', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('3', '3', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('3', '5', '0', '1');

INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('4', '1', '1', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('4', '2', '1', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('4', '3', '1', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('4', '4', '1', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('4', '5', '1', '1');

INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('5', '1', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('5', '4', '0', '1');
INSERT INTO `profesores_actas` (`profe_id`, `acta_id`, `creador`, `estuve`) VALUES ('5', '5', '0', '1');


-- -----------------------------------------------------
--Asuntos
-- -----------------------------------------------------

INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto aaaaaaaaaaaaa', '1');
INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto bbbbbbbbbbbbb', '1');

INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto aaaaaaaaaaaaa', '2');
INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto yyyyyyyyyyyyy', '2');
INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto xxxxxxxxxxxxx', '2');

INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto ggggggggggggg', '3');

INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto aaaaaaaaaaaaa', '4');
INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto yyyyyyyyyyyyy', '4');
INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto xxxxxxxxxxxxx', '4');
INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto sssssssssssss', '4');

INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto yyyyyyyyyyyyy', '5');
INSERT INTO `asuntos` (`asunto_id`, `asunto_detalle`, `acta_id`) VALUES (NULL, 'asunto sssssssssssss', '5');


-- -----------------------------------------------------
--Acuerdos
-- -----------------------------------------------------
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo dsdsdsds', '1');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo qwqwqwqw', '1');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo xcxcxcxc', '1');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo bnbnbnbn', '1');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo uiiuiuiu', '1');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo klklkllk', '1');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo ewweeewe', '1');

INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo bnbnbnbn', '2');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo uiiuiuiu', '2');

INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo dsdsdsds', '3');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo qwqwqwqw', '3');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo xcxcxcxc', '3');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo bnbnbnbn', '3');


INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo klklkllk', '4');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo ewweeewe', '4');

INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo rrererrer', '5');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo ewweeewe', '5');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo klklkllk', '5');
INSERT INTO `acuerdos` (`acuerdo_id`, `acuerdo_detalle`, `acta_id`) VALUES (NULL, 'acuerdo fdfdfewr', '5');




