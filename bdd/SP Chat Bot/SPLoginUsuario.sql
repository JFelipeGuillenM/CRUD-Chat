DELIMITER $$
DROP PROCEDURE IF EXISTS `spLoginUsuario`;
CREATE PROCEDURE `spLoginUsuario` (usuario VARCHAR(55), contraseña VARCHAR(55))
BEGIN
	SELECT * FROM usuario u WHERE u.Usuario= usuario  AND u.Contraseña= contraseña;
    
END$$
DELIMITER ;

