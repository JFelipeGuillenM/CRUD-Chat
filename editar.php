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
if(isset($_POST['id'])){
    $id=$_POST['id'];
    //$query = "SELECT * from principal Where IdPrincipal = '$id'";
    $query = "CALL spConsultarEditar('$id')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die('el query falló'.mysqli_error($conexion));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id_principal' => $row['IdPrincipal'],
            'nombre' => $row['Nombre'],
            'padre' => $row['Padre'],
            'id_tipo' => $row['IdTipo'],
            'contenido' => $row['Contenido'],
            'conector' => $row['Conector']
        );
    }

    $jsonstring = json_encode($json[0]);
    echo $jsonstring;

}

?>