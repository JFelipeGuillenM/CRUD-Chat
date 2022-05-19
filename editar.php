<?php
include('conexion.php');
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $query = "SELECT * from principal Where id_principal = '$id'";
    $result = mysqli_query($conexion, $query);

    if(!$result){
        die('el query falló'.mysqli_error($conexion));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id_principal' => $row['id_principal'],
            'nombre' => $row['nombre'],
            'padre' => $row['padre'],
            'id_tipo' => $row['id_tipo'],
            'contenido' => $row['contenido']
        );
    }

    $jsonstring = json_encode($json[0]);
    echo $jsonstring;

}

?>