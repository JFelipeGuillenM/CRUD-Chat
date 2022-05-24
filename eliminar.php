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
        $id = $_POST['id'];
        $query = "CALL spEliminar('$id')";
        $resultado = mysqli_query($conexion, $query);

        if(!$resultado){
            die('El query falló');
        }
        echo "Se ejecutó el script";
    }
    
?>