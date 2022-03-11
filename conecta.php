<?php

$mysqli = new mysqli('localhost', 'root', '', 'bd_loja');
if($mysqli -> connect_errno){
    echo $mysqli -> connect->error;
}

?>