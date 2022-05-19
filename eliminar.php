<?php 
    include('conexion.php');
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $query = "DELETE FROM principal WHERE id_principal = '$id'";
        $resultado = mysqli_query($conexion, $query);

        if(!$resultado){
            die('El query falló');
        }
        echo "Se ejecutó el script";
    }
    
?>