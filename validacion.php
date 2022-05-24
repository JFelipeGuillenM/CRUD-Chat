
<?php

include('conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$ip_url= "http://myexternalip.com/raw";
$ip = file_get_contents($ip_url);

session_start();
$_SESSION['usuario']=$usuario;

    //$consulta="SELECT*FROM usuario where Usuario='$usuario' and Contraseña='$contraseña' and Estado='1'";
    $consulta="CALL spLoginUsuario('$usuario', '$contraseña')";
    //$consulta="select loginusuarios('$usuario', '$contraseña');";
    $resultado=mysqli_query($conexion,$consulta);
    //echo $consulta;
    //echo $resultado;

$filas=mysqli_num_rows($resultado);

if($filas){

    date_default_timezone_set('America/Guayaquil'); 
    $fechaingreso = date('m-d-Y h:i:s a', time());
    
    //$consulta2 = "INSERT into bitacora (UsuarioIngId, FechaIng, Ip) VALUES ('$usuario', '$fechaingreso', '$ip')";
    $consulta2="CALL spRegistroBitacora('$usuario', '$fechaingreso', '$ip')";
    $resultado2=mysqli_query($conexion,$consulta2);

    //echo $resultado2;

    header("location:index.php");

}else{
    ?>
    <?php
    include("login.php");
    ?>
        <script> Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Usuario o contraseña en incorrecta',
        });</script>;
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
