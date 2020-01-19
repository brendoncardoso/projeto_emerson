<?php
    require ('connection.php');
    
    session_start();
    
    if(isset($_SESSION['login'])){
        header('location: inicio.php');
    }

    if(isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['senha']) && !empty($_POST['senha'])) {
        
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        $verifica_usuario = mysql_query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
        $verifica_usuario_row = mysql_fetch_assoc($verifica_usuario);

        $_SESSION['id'] = $verifica_usuario_row['id'];
        $_SESSION['nome'] = $verifica_usuario_row['nome'];
        $_SESSION['email'] = $verifica_usuario_row['email'];
        $_SESSION['senha'] = $verifica_usuario_row['senha'];


        $verifica_usuario_num_rows = mysql_num_rows($verifica_usuario);


        if($verifica_usuario_num_rows == 1){
            session_start();
            $_SESSION['login'] = 'login';
            header('location: inicio.php');
        }
    }


?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
<style type="text/css">
    body{
        background-color: #373f42;
        color: black;
    }


    .right{
        float: right;
    }

    .center {
        text-align: center;
    }
</style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <label for="">Email:</label>
                            <div class="form-group mb-4">
                                <input type="email" class="form-control" name="email" placeholder="email@email.com">
                            </div>

                            <label for="">Senha:</label>
                            <div class="form-group">
                                <input type="password" class="form-control" name="senha">
                            </div>

                            <?php if(!isset($verifica_usuario_num_rows) == 0) { ?>
                                <div class="alert alert-warning text-center">
                                    <small>Email ou senha incorreta. Tente novamente.</small>
                                </div>
                            <?php } ?>

                            <div class="right">
                                <button type="submit" id="sendlogin" class="btn btn-primary" placeholder="******">Entrar</button>
                            </div>
                        </form>
                    </div>
                    <div class="container center mb-3 mt-0">
                        <small class="">Não tem uma conta? <a href="cadastrar.php">Clique aqui</a> para se cadastrar</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>