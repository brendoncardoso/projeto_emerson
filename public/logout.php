<?php
    session_start();

    if(isset($_SESSION['login'])){
        unset($_SESSION['login']);
        setcookie(session_name(), null, 0);
    }

    setcookie(session_name(), null, 0);

    header('location: index.php');
?>