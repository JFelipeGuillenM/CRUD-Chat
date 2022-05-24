<?php
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
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$contenido = $_POST['contenido'];
$padre = $_POST['padre'];
$tipo = $_POST['tipo'];
$conector = $_POST['conector'];

$fechamod = date("Y-m-d");
$horamod = date("H:i:s");

$usuariomodid = $varsession;

//$query="UPDATE principal SET Nombre='$nombre', Contenido = '$contenido', Padre='$padre', IdTipo='$tipo' WHERE IdPrincipal = '$id'";
$query="CALL spEditarData('$id','$tipo', '$nombre', '$padre', '$contenido', '$conector', '$fechamod', '$horamod', '$usuariomodid', '$ip')";
echo "id: ".$id;
$result=mysqli_query($conexion, $query);
    if(!$result){
        die("Failed to update" .mysqli_error($conexion) );
    }
    echo "tarea actualizada";
?>