DELIMITER $$
DROP PROCEDURE IF EXISTS `spConsultarEditar`;
CREATE PROCEDURE `spConsultarEditar`(in id int )
BEGIN
	SELECT * FROM principal Where IdPrincipal= id AND Estado=1;
END$$
DELIMITER ;