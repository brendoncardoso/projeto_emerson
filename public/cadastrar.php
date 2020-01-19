<?php
    require 'connection.php';

    if(isset($_POST['nome']) && !empty($_POST['nome']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['senha']) && !empty($_POST['senha']) &&
        isset($_POST['senha_confirmacao']) && !empty($_POST['senha_confirmacao'])) {

        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmacao_senha = addslashes($_POST['senha_confirmacao']);

        $sql_verifica_email = mysql_query("SELECT * FROM usuarios WHERE email = '$email'");
        $sql_verifica_email_num_rows = mysql_num_rows($sql_verifica_email);

        if($sql_verifica_email_num_rows == 0){
            if($confirmacao_senha == $senha){
                $sql_insert = mysql_query("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
                echo "<script>
                        alert('Cadastrado com sucesso. Por favor, faça o login para acessar o projeto.'); 
                    </script>";
            }else{
                echo "<script>alert('Senhas estão diferentes. Por favor, verificar') ;</script>";
            }
        }else{
            echo "<script>alert('Esse email já existe. Por favor, use outro email.') ;</script>";
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
                            <label for="">Nome:</label>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" name="nome">
                            </div>

                            <label for="">Email:</label>
                            <div class="form-group mb-4">
                                <input type="email" class="form-control" name="email" placeholder="email@email.com">
                            </div>

                            <label for="">Senha:</label>
                            <div class="form-group">
                                <input type="password" class="form-control" name="senha">
                            </div>

                            <label for="">Confirmar senha:</label>
                            <div class="form-group">
                                <input type="password" class="form-control" name="senha_confirmacao">
                            </div>

                            <div class="right">
                                <button type="submit" id="sendlogin" class="btn btn-primary" placeholder="******">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                    <div class="container center mb-3 mt-0">
                        <small class="">Já tem login? <a href="login.php">Clique aqui</a> para entrar</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>