<?php
    $conn = require ('connection.php');
    $id = $_GET['id']?$_GET['id']:NULL;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data_audiencia = $_POST['data_audiencia']?$_POST['data_audiencia']: NULL;
        $data_prazo = $_POST['data_prazo']?$_POST['data_prazo']: NULL;
        $prazo = $_POST['prazo']?$_POST['prazo']: NULL;
        $data_despacho = $_POST['data_despacho']?$_POST['data_despacho']: NULL;
        $despacho = $_POST['despacho']?$_POST['despacho']: NULL;
        $oficio = $_POST['oficio']?$_POST['oficio']: NULL;
        $secretaria = $_POST['secretaria']?$_POST['secretaria']: NULL;
        $procurador = $_POST['procurador']?$_POST['procurador']: NULL;
        $obs = $_POST['obs']?$_POST['obs']: NULL;
        $status_prazo = $_POST['status_prazo']?$_POST['status_prazo']: NULL;
        $processo_administrativo = $_POST['processo_administrativo']?$_POST['processo_administrativo']: NULL;
        $vt = $_POST['vt']?$_POST['vt']: NULL;
        $comarca = $_POST['comarca']?$_POST['comarca']: NULL;
        $processo_eletronico = $_POST['processo_eletronico']?$_POST['processo_eletronico']: NULL;
        $horario = $_POST['horario']?$_POST['horario']: NULL;
        $reclamante = $_POST['reclamante']?$_POST['reclamante']: NULL;
        $reclamada = $_POST['reclamada']?$_POST['reclamada']: NULL;
        $stmt = $conn->prepare('UPDATE pauta_prazo SET data_audiencia=?, data_prazo=?, prazo=?, data_despacho=?, despacho=?, oficio=?, secretaria=?, procurador=?, obs=?, status_prazo=?, processo_administrativo=?, vt=?, comarca=?, processo_eletronico=?, horario=?, reclamante=?, reclamada=? WHERE id=?');
        $stmt -> bind_param ('sssssssssssssssssi', $data_audiencia, $data_prazo, $prazo, $data_despacho, $despacho, $oficio, $secretaria, $procurador, $obs, $status_prazo, $processo_administrativo, $vt, $comarca, $processo_eletronico, $horario, $reclamante, $reclamada, $id);
        $stmt -> execute();
        header ('location: registros_cadastrados.php');
        die();
    }
    
    $stmt = $conn->prepare('SELECT * FROM pauta_prazo WHERE id=?');
    $stmt -> bind_param('i', $id);
    $stmt -> execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>  
    <script rel="stylesheet" src="js/myMask.js"></script> 
</head>
<body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/icon_db4.png" width="50" height="50" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="pauta_prazo.php">brendon_db</a>
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
                        </div>
                    </div>
                    <div class="dropdown" style="margin: 8px;">
                        <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planilhas</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="planilha_audiencia.php">Audiência</a>
                            <a class="dropdown-item" href="planilha_data_prazo.php">Data de Prazo</a>
                        </div>
                    </div>
                    <li class="nav-link">
                        <a class="btn btn-outline-danger" href="index.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <p class="text-center py-5">Preencha os formulários vazios para a tabela de registros cadastrados.</p>
    <div class="container">
    <form action="" method="POST" autocomplete="off">
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="">Data de Audiência: </label>
                    <input type="text" class="form-control" id="data" name="data_audiencia" value="<?php echo $user['data_audiencia']?>" placeholder="dd/mm/aaaa" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="">Horário: </label>
                    <input type="text" class="form-control time" id="" name="horario" value="<?php echo $user['horario']?>" placeholder="00:00:00" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="">Processo Administrativo: </label>
                    <input type="text" class="form-control" id="processo_administrativo" name="processo_administrativo" value="<?php echo $user['processo_administrativo']?>" placeholder="__/_______/__" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Processo Eletrônico: </label>
                    <input type="text" class="form-control" id="processo_eletronico" name="processo_eletronico" value="<?php echo $user['processo_eletronico']?>" placeholder="_______-__.____._.__.____" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="">VT: </label>
                    <input type="text" class="form-control" id="vt" name="vt" value="<?php echo $user['vt']?>" placeholder="00ª" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Comarca: </label>
                    <input type="text" class="form-control" id="comarca" name="comarca" value="<?php echo $user['comarca']?>" placeholder="" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="">Reclamante: </label>
                    <input type="text" class="form-control" id="" name="reclamante" value="<?php echo $user['reclamante']?>" placeholder="" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="">Reclamada: </label>
                    <input type="text" class="form-control" id="" name="reclamada" value="<?php echo $user['reclamada']?>" placeholder="" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-4">
                    <label for="">Data de Prazo: </label>
                    <input type="text" class="form-control" id="data_prazo" name="data_prazo" value="<?php echo $user['data_prazo']?>" placeholder="dd/mm/aaaa" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Prazo: </label>
                    <select class="form-control" name="prazo" id="" placeholder="" required>
                        <option value=""selected></option>
                        <option value="Aguardando 180 dias"<?php echo ($user ['prazo'] == 'Aguardando 180 dias'?'selected':"")?>>Aguardando 180 dias</option>
                        <option value="Embargos Declaratórios"<?php echo ($user ['prazo'] == 'Embargos Declaratórios'?'selected':"")?>>Embargos Declaratórios</option>
                        <option value="Recurso Ordinário"<?php echo ($user ['prazo'] == 'Recurso Ordinário'?'selected':"")?>>Recurso Ordinário</option>
                        <option value="Recurso de Revista"<?php echo ($user ['prazo'] == 'Recurso de Revista'?'selected':"")?>>Recurso de Revista</option>
                        <option value="Agravo de Instrumento"<?php echo ($user ['prazo'] == 'Agravo de Instrumento'?'selected':"")?>>Agravo de Instrumento</option>
                        <option value="Impugnar Cáculos"<?php echo ($user ['prazo'] == 'Impugnar Cáculos'?'selected':"")?>>Impugnar Cáculos</option>
                        <option value="Embargos à Execução"<?php echo ($user ['prazo'] == 'Embargos à Execução'?'selected':"")?>>Embargos à Execução</option>
                        <option value="Não Informado"<?php echo ($user ['prazo'] == '"Não Informado'?'selected':"")?>>Não Informado</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Status: </label>
                    <select class="form-control" name="status_prazo" id="" placeholder="" required>
                        <option value=""selected></option>
                        <option value="Aguardando 180 dias"<?php echo ($user['status_prazo'] == 'Aguardando 180 dias'?'selected':"")?>>Aguardando 180 dias</option>                        
                        <option value="Sine Die para Sentença"<?php echo ($user['status_prazo'] == 'Sine Die para Sentença'?'selected':"")?>>Sine Die para Sentença</option>
                        <option value="Autos Conclusos para Decisão do Acórdão"<?php echo ($user['status_prazo'] == 'Autos Conclusos para Decisão do Acórdão'?'selected':"")?>>Autos Conclusos para Decisão do Acórdão</option>
                        <option value="Processo Arquivado"<?php echo ($user['status_prazo'] == 'Processo Arquivado'?'selected':"")?>>Processo Arquivado</option>
                        <option value="Município Excluído do Polo Passivo"<?php echo ($user['status_prazo'] == 'Município Excluído do Polo Passivo'?'selected':"")?>>Município Excluído do Polo Passivo</option>
                        <option value="Acordo Homologado entre o 1 Rcdo. E Reclamante"<?php echo ($user['status_prazo'] == 'Acordo Homologado entre o 1 Rcdo. E Reclamante'?'selected':"")?>>Acordo Homologado entre o 1 Rcdo. E Reclamante</option>
                        <option value="Processo em Fase de Execução"<?php echo ($user['status_prazo'] == 'Processo em Fase de Execução'?'selected':"")?>>Processo em Fase de Execução</option>
                        <option value="Não Informado"<?php echo ($user['status_prazo'] == 'Não Informado'?'selected':"")?>>Não Informado</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-3">
                    <label for="">Data de Despacho: </label>
                    <input type="text" class="form-control" id="data_despacho" name="data_despacho" value="<?php echo $user['data_despacho']?>" placeholder="dd/mm/aaaa" required>
                </div>
                <div class="form-group col-sm-3">
                    <label for="">Despacho: </label>
                    <input type="text" class="form-control" id="" name="despacho" value="<?php echo $user['despacho']?>" placeholder="" required>
                </div>
                <div class="form-group col-sm-3">
                    <label for="">Ofício: </label>
                    <input type="text" class="form-control" id="" name="oficio" value="<?php echo $user['oficio']?>" placeholder="" required>
                </div>
                <div class="form-group col-sm-3">
                    <label for="">Secretária: </label>
                    <input type="text" class="form-control" id="" name="secretaria" value="<?php echo $user['secretaria']?>" placeholder="" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="">Procurador: </label>
                    <input type="text" class="form-control" id="" name="procurador" value="<?php echo $user['procurador']?>" placeholder="" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="">Observação: </label>
                    <input type="text" class="form-control" id="" name="obs" value="<?php echo $user['obs']?>" placeholder="" required>
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-primary" style="float: right" value="Atualizar">
            <a href="registros_cadastrados.php">
                <button type="button" class="btn btn-primary mr-3" style="float: right">Voltar</button>
            </a>
        </form>
        <a href="index.php">
            <button type="button" class="btn btn-danger" style="float: left">Sair</button>
        </a>
        <br><br><br><br>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>
</body>
</html>