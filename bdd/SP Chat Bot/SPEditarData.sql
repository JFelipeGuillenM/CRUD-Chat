DELIMITER $$
DROP PROCEDURE IF EXISTS `spEditarData`;
CREATE PROCEDURE `spEditarData`(IN Id int ,in IdTipo int, in NombreAct varchar(50), in PadreAct int, 
												in ContenidoAct varchar(500), in ConectorAct varchar(255), 
                                                in FechaModAct VARCHAR(55), in HoraModAct VARCHAR(55), 
                                                in UsuarioModIdAct VARCHAR(55), in IpAct VARCHAR(55))
BEGIN
	UPDATE principal 
    SET IdTipo=IdTipo, Nombre=NombreAct, Padre=PadreAct, 
		Contenido=ContenidoAct, Conector=ConectorAct, Conector=ConectorAct, 
        FechaMod=FechaModAct, HoraMod=HoraModAct, UsuarioModId=UsuarioModIdAct, Ip=IpAct
	WHERE IdPrincipal=Id AND Estado=1 ;
			
END$$
DELIMITER ;