DELIMITER $$
DROP PROCEDURE IF EXISTS `spLoginUsuario`;
CREATE PROCEDURE `spLoginUsuario` ( in usua VARCHAR(55), in contra VARCHAR(55), in fechaing VARCHAR(55), in iping VARCHAR(55))
BEGIN
 	-- SELECT * FROM usuario  WHERE Usuario= usua AND Contraseña= contra AND Estado= 1;
    declare numero int;
	SELECT  count(*)  into numero from usuario WHERE Usuario= usua  AND Contraseña= contra AND Estado = 1;
	IF(numero = 1) THEN
		INSERT into bitacora(UsuarioIngId, FechaIng, Ip, IngresoExitoso) VALUES(usua, fechaing, iping, 1);
    ELSE
		INSERT into bitacora(UsuarioIngId, FechaIng, Ip, IngresoExitoso) VALUES(usua, fechaing, iping, 0);
    END IF;
    SELECT * FROM usuario  WHERE Usuario= usua AND Contraseña= contra AND Estado= 1;
END$$
DELIMITER ;
