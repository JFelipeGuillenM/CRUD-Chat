DELIMITER $$
DROP PROCEDURE IF EXISTS `spRegistroBitacora`;
CREATE PROCEDURE `spRegistroBitacora` (usuarioing VARCHAR(50), fechaing VARCHAR(100), ip VARCHAR(55))
BEGIN
	INSERT into bitacora(UsuarioIngId, FechaIng, Ip) VALUES(usuarioing, fechaing, ip);
END$$
DELIMITER ;


