<?php 
    include('conexion.php');
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $contenido = $_POST['contenido'];
        $padre = $_POST['padre'];
        $tipo = $_POST['tipo'];

        $sql = "INSERT into principal(id_tipo, nombre, padre, contenido) VALUES ('$tipo', '$nombre', '$padre', '$contenido')";
        $resultado = mysqli_query($conexion, $sql);

        echo $sql;

        
        if(!$resultado){
            die('el query falló');
        }
        echo 'Datos guardados';
    }
?>