<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <table border="1px">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Estoque</th>
                <th scope="col">Excluir</th>
            

            </tr>   






    <form action="inserir.php" method="post">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome">
        <label>Descrição</label>
        <input type="text" name="descricao" id="descricao">
        <label>Preço</label>
        <input type="number" name="preco" id="preco">
        <label>Estoque</label>
        <input type="number" name="estoque" id="estoque">

        
        <input type="submit" value="Enviar" name="submit">
    </form>

    <?php 
        error_reporting(E_ERROR);
        $servername = "Localhost";
        $username = "root";
        $password = "160906";
        $database = "produtos";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        
        
        $consulta = 'SELECT * FROM itens';
        $result = mysqli_query($conn, $consulta);

        while($linha = mysqli_fetch_array($result)){
            $id = $linha ['id'];
            $nome = $linha ['nome'];
            $descricao = $linha ['descricao'];
            $preco = $linha['preco'];
            $estoque = $linha['estoque'];

            echo "<tr>";
            echo "<td> $id</td>";
            echo "<td> $nome</td>";
            echo "<td> $descricao</td>";
            echo "<td> $preco</td>";
            echo "<td> $estoque</td>";
            echo "<td><a href='excluir.php?id=$id'>excluir</a></td>";
            echo"<td>";


        }
        
        
        
    
    
    
    
    
    ?>
        





    
</body>
</html>