DELIMITER $$
DROP PROCEDURE IF EXISTS `spListar`;
CREATE PROCEDURE `spListar` ()
BEGIN
	SELECT*FROM principal WHERE estado = 1;
END$$
DELIMITER ;