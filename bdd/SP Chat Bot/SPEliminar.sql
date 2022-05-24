DELIMITER $$
DROP PROCEDURE IF EXISTS `spEliminar`;
CREATE PROCEDURE `spEliminar` (id INT)
BEGIN
	UPDATE principal SET Estado='0' WHERE IdPrincipal = id;
END$$
DELIMITER ;