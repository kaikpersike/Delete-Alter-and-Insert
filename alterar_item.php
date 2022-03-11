<?php

include('conecta.php');
$cod = $_POST['codigo'];
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$sql = "update tb_produto set nm_produto = '".$nome."', vl_produto = '".$valor."' where cd_produto = $cod";

if($lista = $mysqli->query($sql)){
    ?>
    <script>
        alert("Alterado com sucesso");
        window.location.href="index.php";
    </script>
    <?php

}else{
    echo $mysqli->error;
}

?>