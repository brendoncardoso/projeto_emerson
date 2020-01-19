<?php
    require 'connection.php';
    session_start();
    $query = "DELETE FROM pauta_audiencia WHERE id=". $_POST['id'];
    $sql_query = mysql_query($query);  
?>