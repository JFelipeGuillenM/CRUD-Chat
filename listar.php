<?php
    include('conexion.php');

    $query = "SELECT * from principal";
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
            'contenido' => $row['contenido'],
            'conector' => $row['conector'],
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;

?>