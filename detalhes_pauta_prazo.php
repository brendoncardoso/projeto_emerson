<?php
    $conn = require ('connection.php');
    
    $stmt = $conn -> prepare('SELECT * FROM pauta_prazo WHERE id=?');
    $stmt -> bind_param('i', $id);
    $stmt -> execute();
    $result = $stmt -> get_result();
    $user = $result->fetch_assoc();
?>

<script>
    $(document).ready(function(){
        var id = $('
        ')
    });
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes</title>
    
    <!--jQUERY-->
    <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
    <!--SCRIPT JS-->
    <script type="text/javascript" src="js/myScript.js"></script>

</head>
<body>

    <fieldset>
        <legend>DADOS DA AUDIÊNCIA</legend>
        <p><b>ID:</b> <?php echo $user['id']?></p>
        <p><b>Data de Audiência:</b> <?php echo $user['data_audiencia']?></p>
        <p><b>Processo Administrativo:</b> <?php echo $user['processo_administrativo']?></p>
        <p><b>VT:</b> <?php echo $user['vt']?></p>
        <p><b>Comarca:</b> <?php echo $user['comarca']?></p>
        <p><b>Processo Eletrônico:</b> <?php echo $user['processo_eletronico']?></p>
        <p><b>Horário:</b> <?php echo $user['horario']?></p>
        <p><b>Reclamante:</b> <?php echo $user['reclamante']?></p>
        <p><b>Reclamada:</b> <?php echo $user['reclamada']?></p>
        <p><b>Procurador:</b> <?php echo $user['procurador']?></p>
        <p><b>Observação:</b> <?php echo $user['obs']?></p>
        <p><b>Status:</b> <?php echo $user['status_prazo']?></p>
    </fieldset>
    <br>
    <fieldset>
        <legend>DATA DE PRAZO</legend>
        <p><b>Data de Prazo:</b> <?php echo $user['data_prazo']?></p>
        <p><b>Prazo:</b> <?php echo $user['prazo']?></p>
        <p><b>Status:</b> <?php echo $user['status_prazo']?></p>
        <p><b>Data de Despacho:</b> <?php echo $user['data_despacho']?></p>
        <p><b>Despacho:</b> <?php echo $user['despacho']?></p>
        <p><b>Ofício:</b> <?php echo $user['oficio']?></p>
        <p><b>Secretária:</b> <?php echo $user['secretaria']?></p>
        <p><b>Procurador:</b> <?php echo $user['procurador']?></p>
        <p><b>Observação:</b> <?php echo $user['obs']?></p>
    </fieldset>
    <br>
    <a href="registros_cadastrados.php" style="text-decoration:none;">
        <button class="no-print">Voltar</button>
    </a>

    <input type="submit" name="imprime" class="no-print imprime" value="Imprimir" onclick="imprime();">
</body>
</html>