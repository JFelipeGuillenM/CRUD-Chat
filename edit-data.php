<?php
include('conexion.php');
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$contenido = $_POST['contenido'];
$padre = $_POST['padre'];
$tipo = $_POST['tipo'];
$query="UPDATE principal SET nombre='$nombre', contenido = '$contenido', padre='$padre', id_tipo='$tipo' WHERE id_principal = '$id' ";
echo "id: ".$id;
$result=mysqli_query($conexion, $query);
    if(!$result){
        die("Failed to update" .mysqli_error($conexion) );
    }
    echo "tarea actualizada";
?>