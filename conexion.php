<?php
    /*
    $con = mysqli_connect("localhost:3307", "root", "password");
    mysqli_select_db($con, "chatbot");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
        // die imprime y sale del script
    }*/
    
    $conexion = mysqli_connect(
        'localhost',
        'root',
        '',
        'chatbot'
    )

?>