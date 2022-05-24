DELIMITER $$
drop function if exists `loginusuarios`;
create function loginusuarios( usuario varchar(55), contraseña varchar(55)) returns  int

begin
declare numero int;
SELECT  count(*)  into numero from usuario u WHERE u.Usuario= usuario  AND u.Contraseña= contraseña AND Estado = 1;
return numero;
end$$

DELIMITER ;