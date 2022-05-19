<?php
    include('conexion.php');

    $hijoQuery=htmlspecialchars($_GET['hijo']);
    
    $query = 'SELECT * FROM principal WHERE padre = '.$hijoQuery.' ';
    $result = mysqli_query($conexion, $query);

    if(!$result){
        die('el query falló'.mysqli_error($conexion));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id_principal' => $row['id_principal'],
            'padre' => $row['padre'],
            'contenido' => $row['contenido'],
        );
    }

 
    $jsonstring = json_encode($json);
    echo $jsonstring;

?>