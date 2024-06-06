<?php 
    $servername = "Localhost";
    $username = "root";
    $password = "160906";
    $database = "produtos";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    error_reporting(E_ERROR);
    $id = $_GET['id'];
    $delete = "DELETE FROM itens  WHERE  id = $id";

    mysqli_query($conn, $delete);
    
    header("Location: cadastro.php"); 





?>