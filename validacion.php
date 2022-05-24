<?php

include('conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$ip_url= "http://myexternalip.com/raw";
$ip = file_get_contents($ip_url);

session_start();
$_SESSION['usuario']=$usuario;
    date_default_timezone_set('America/Guayaquil'); 
    $fechaingreso = date('m-d-Y h:i:s a', time());
    
    $consulta="CALL spLoginUsuario('$usuario', '$contraseña', '$fechaingreso', '$ip')";
    $resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

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
