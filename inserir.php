<?php      
error_reporting(E_ERROR);

$servername = "Localhost";
$username = "root";
$password = "160906";
$database = "produtos";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
echo "$nome $descricao $preco $estoque";


$insert = "INSERT INTO itens (nome, descricao, preco, estoque) values ('$nome', '$descricao', $preco, $estoque)";

mysqli_query($conn, $insert);

header("Location: cadastro.php"); 
?>