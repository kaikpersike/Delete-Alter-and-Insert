<?php

    include('conecta.php');
    $cod = $_GET['cd_produto'];
    $sql = "delete from tb_produto where cd_produto = $cod";

    if($lista = $mysqli->query($sql)){
    ?>
    <script>
        alert("Deletado com sucesso");
        window.location.href="index.php";
    </script>
    <?php

}else{
    echo $mysqli->error;
}

?>