<?php
include('conecta.php');
$cod = $_GET['cd_produto'];
$sql = "select * from tb_produto where cd_produto = $cod";
if($lista = $mysqli->query($sql)){
    while($item_lista = $lista->fetch_object()){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando</title>
</head>
<body>
    <form method="post" action="alterar_item.php">
     <input type="hidden" name="codigo" value= <?php echo $item_lista->cd_produto ?>>
     <p> Codigo: <?php echo $_GET['cd_produto'];?></p> 
     <input type="text" name="nome" value=<?php echo $item_lista->nm_produto ?>>
     <input type="text" name="valor" value=<?php echo $item_lista->vl_produto ?>>
     <input type="submit" value="alterar">
     </form>

        <?php
        
    }
}

        ?>

</body>
</html>