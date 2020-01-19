<?php
    require 'connection.php';
    session_start();

    
    $sql = "UPDATE pauta_audiencia 
    SET data_audiencia = '{$_POST['data_audiencia']}', 
    processo_administrativo = '{$_POST['processo_administrativo']}',
    processo_eletronico = '{$_POST['processo_eletronico']}',
    procurador = '{$_POST['procurador']}',
    status_audiencia = '{$_POST['status_audiencia']}',
    vt = '{$_POST['vt']}',
    vc = '{$_POST['vc']}',
    processo_civil = '{$_POST['processo_civil']}',
    comarca = '{$_POST['comarca']}',
    reclamante = '{$_POST['reclamante']}',
    reclamada = '{$_POST['reclamada']}',
    procurador = '{$_POST['procurador']}',
    obs_audiencia = '{$_POST['obs_audiencia']}'
    WHERE id = '{$_POST['view_id']}' AND id_user = '{$_SESSION['id']}';";

    echo "UPDATE pauta_audiencia 
    SET data_audiencia = '{$_POST['data_audiencia']}', 
    processo_administrativo = '{$_POST['processo_administrativo']}',
    processo_eletronico = '{$_POST['processo_eletronico']}',
    procurador = '{$_POST['procurador']}',
    status_audiencia = '{$_POST['status_audiencia']}',
    vt = '{$_POST['vt']}',
    vc = '{$_POST['vc']}',
    processo_civil = '{$_POST['processo_civil']}',
    comarca = '{$_POST['comarca']}',
    reclamante = '{$_POST['reclamante']}',
    reclamada = '{$_POST['reclamada']}',
    procurador = '{$_POST['procurador']}',
    obs_audiencia = '{$_POST['obs_audiencia']}'
    WHERE id = '{$_POST['view_id']}' AND id_user = '{$_SESSION['id']}';";

    $sql_update = mysql_query($sql);
?>