<?php

include('conecta.php');
$nome = $_POST['nome_produto'];
$valor = $_POST['valor_produto'];
$sql = "insert into tb_produto value(null, '".$nome."', '".$valor."') ";

if($lista = $mysqli->query($sql)){
    ?>
    <script>
        alert("Inserido com sucesso");
        window.location.href = "index.php";
    </script>

<?php

echo $mysqli->error;

}

?>