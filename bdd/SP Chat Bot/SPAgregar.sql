DELIMITER $$
DROP PROCEDURE IF EXISTS `spAgregar`;
CREATE PROCEDURE `spAgregar` (idtipo int, nombre VARCHAR(55), padre int, contenido VARCHAR(55), conector VARCHAR(55), estado int, fechamod VARCHAR(55), horamod VARCHAR(55), usuariomodid VARCHAR(55), ip VARCHAR(55))
BEGIN
	INSERT into principal(IdTipo, Nombre, Padre, Contenido, Conector, Estado, FechaMod, HoraMod, UsuarioModId, Ip) VALUES (idtipo, nombre, padre, contenido, conector, 1, fechamod, horamod, usuariomodid, ip);
END$$
DELIMITER ;