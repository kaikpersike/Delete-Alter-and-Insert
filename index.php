<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter, Delet and Insert</title>
</head>
<body>
    <?php
    
        include("conecta.php");

        $sql = "select * from tb_produto";
        if($lista = $mysqli -> query($sql)){
            while($item_lista = $lista->fetch_object()){
                echo 
                $item_lista -> cd_produto." ".
                $item_lista -> nm_produto." ".
                $item_lista -> vl_produto." ".
                '<a href="apagar.php?cd_produto='. $item_lista->cd_produto .'">apagar</a>
                <a href="alterar.php?cd_produto='. $item_lista->cd_produto .'">alterar</a> <br>';
                
            }
        }else{
            echo $mysqli->error;
        }
    
    ?>

<a href="inserir.php">Inserir</a>
    
    
</body>
</html>