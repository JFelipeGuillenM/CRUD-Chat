<?php
$ip_url= "http://myexternalip.com/raw";
$ip = file_get_contents($ip_url);
//seguridad de session
session_start();
error_reporting(0);
$varsession= $_SESSION['usuario'];
if($varsession== null || $varsession== ''){
    header("location:login.php");
    die();
}

?>
<?php 
    include('conexion.php');
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $contenido = $_POST['contenido'];
        $padre = $_POST['padre'];
        $tipo = $_POST['tipo'];
        $conector = $_POST['conector'];

        $fechamod = date("Y-m-d");
        $horamod = date("H:i:s");

        $usuariomodid = $varsession;


 
        //$sql = "INSERT into principal(IdTipo, Nombre, Padre, Contenido) VALUES ('$tipo', '$nombre', '$padre', '$contenido')";
        $sql = "call spAgregar('$tipo', '$nombre', '$padre', '$contenido', '$conector', '', '$fechamod', '$horamod', '$usuariomodid', '$ip')";
        $resultado = mysqli_query($conexion, $sql);

        echo $sql;

        
        if(!$resultado){
            die('el query falló');
        }
        echo 'Datos guardados';
    }
?>