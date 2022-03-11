<?php

include('conecta.php');
$sql = "select * from tb_produto";
if($lista = $mysqli->query($sql)){
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>
<body>
    <form action="inserir_item.php" method="post">

        Nome: <input type="text" name="nome_produto" value=""> 
        Valor: <input type="text" name="valor_produto" value=""> 
        <input type="submit" value="inserir">   

    </form>

    <?php
        

}

        ?>
    
</body>
</html>