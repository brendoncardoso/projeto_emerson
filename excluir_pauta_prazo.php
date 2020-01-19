<?php
    require 'connection.php';
    $id = $_GET['id']?$_GET['id']:NULL;
    $sql = mysql_query ("DELETE FROM pauta_prazo WHERE id= '$id'");
    header ('location: registros_cadastrados.php');
?>    
