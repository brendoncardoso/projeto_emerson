<?php require 'connection.php'; ?>
<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('location: public/login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pauta de Prazo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark mb-5">
        <div class="container">
            <a class="navbar-brand" href="inicio.php">
                <img src="img/icon_db4.png" width="50" height="50" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="inicio.php">brendon_db</a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <div class="dropdown" style="margin: 8px;">
                        <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="cadastrar_audiencia.php">Audiência</a>
                            <a class="dropdown-item" href="cadastrar_data_prazo.php">Data de Prazo</a>
                            <a class="dropdown-item" href="cadastrar_pgm.php">PGM</a>
                        </div>
                    </div>
                    <li class="nav-link">
                        <a class="btn btn-outline-danger" href="logout.php">Sair <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>