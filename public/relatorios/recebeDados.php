
<?php  
require 'connection.php';
session_start();
//PAGINAÇÃO
$num_for_pages = 20;

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}

$start_from = ($page-1)*20;if(isset($_POST['dia1']) && ($_POST['dia2']) && empty($_POST['filtrar'])){
    $dia1 = addslashes($_POST['dia1']);
    $dia2 = addslashes($_POST['dia2']);

    $sql_audiencia = "SELECT * FROM pauta_audiencia WHERE data_audiencia BETWEEN '$dia1' AND '$dia2' AND id_user = {$_SESSION['id']} ORDER BY data_audiencia ASC";
    $sql_audiencia_query = mysql_query($sql_audiencia);
    $sql_audiencia_num_rows = mysql_num_rows($sql_audiencia_query);

    while($users = mysql_fetch_assoc($sql_audiencia_query)){
        $arrayUsersAudiencias[$users['id_user']][$users['id']] = [
            "id" => $users['id'],
            "data_audiencia" => $users['data_audiencia'],
            "processo_administrativo" => $users['processo_administrativo'],
            "processo_eletronico" => $users['processo_eletronico'],
            "procurador" => $users['procurador'],
            "status_audiencia" => $users['status_audiencia']
        ];
    }

}elseif(empty($_POST['dia1']) && empty($_POST['dia2']) && !empty($_POST['filtrar'])){
    $filtrar = addslashes($_POST['filtrar']);

    $sql_audiencia = "SELECT * FROM pauta_audiencia WHERE processo_administrativo LIKE '%$filtrar%' OR processo_eletronico LIKE '%$filtrar%' OR procurador LIKE '%$filtrar%'";
    $sql_audiencia_query = mysql_query($sql_audiencia);
    $sql_audiencia_num_rows = mysql_num_rows($sql_audiencia_query);

    while($users = mysql_fetch_assoc($sql_audiencia_query)){
        $arrayUsersAudiencias[$users['id_user']][$users['id']] = [
            "id" => $users['id'],
            "data_audiencia" => $users['data_audiencia'],
            "processo_administrativo" => $users['processo_administrativo'],
            "processo_eletronico" => $users['processo_eletronico'],
            "procurador" => $users['procurador'],
            "status_audiencia" => $users['status_audiencia']
        ];
    }
}elseif(!empty($_POST['dia1']) && !empty($_POST['dia2']) && !empty($_POST['filtrar'])) {
    $dia1 = addslashes($_POST['dia1']);
    $dia2 = addslashes($_POST['dia2']);
    $filtrar = addslashes($_POST['filtrar']);

    $sql_audiencia = "SELECT * FROM pauta_audiencia WHERE data_audiencia BETWEEN '$dia1' AND '$dia2' AND processo_administrativo LIKE '%$filtrar%' OR processo_eletronico LIKE '%$filtrar%' OR procurador LIKE '%$filtrar%' AND id_user = {$_SESSION['id']} ORDER BY data_audiencia ASC";
    $sql_audiencia_query = mysql_query($sql_audiencia);
    $sql_audiencia_num_rows = mysql_num_rows($sql_audiencia_query);

    while($users = mysql_fetch_assoc($sql_audiencia_query)){
        $arrayUsersAudiencias[$users['id_user']][$users['id']] = [
            "id" => $users['id'],
            "data_audiencia" => $users['data_audiencia'],
            "processo_administrativo" => $users['processo_administrativo'],
            "processo_eletronico" => $users['processo_eletronico'],
            "procurador" => $users['procurador'],
            "status_audiencia" => $users['status_audiencia']
        ];
    }
}else{
    $sql_audiencia = "SELECT * FROM pauta_audiencia WHERE id_user = " .$_SESSION['id']. " LIMIT $start_from, $num_for_pages";
    $sql_audiencia_query = mysql_query($sql_audiencia);
    $sql_audiencia_num_rows = mysql_num_rows($sql_audiencia_query);

    while($users = mysql_fetch_assoc($sql_audiencia_query)){
        $arrayUsersAudiencias[$users['id_user']][$users['id']] = [
            "id" => $users['id'],
            "data_audiencia" => $users['data_audiencia'],
            "processo_administrativo" => $users['processo_administrativo'],
            "processo_eletronico" => $users['processo_eletronico'],
            "procurador" => $users['procurador'],
            "status_audiencia" => $users['status_audiencia']
        ];
    }

}
?>

<?php if($sql_audiencia_num_rows > 0) { ?>
    <div class="mt-4 mb-2">
        <div class="right">
            <button type="button" class="btn btn-danger btn-sm button_excluir" disabled><i class="fas fa-trash-alt"></i> Excluir</button>
        </div>

        <div class="left">
            <button type="button" class="btn btn-success btn-sm button_excel"><i class="fas fa-file-excel"></i> Excel</button>
            <button type="button" class="btn btn-dark btn-sm button_txt"><i class="fas fa-file-csv"></i> Txt</button>
        </div>
    </div>
    <form action="" method="post">

    <table id="table" class="table table-hover mt-4">
        <thead>
            <tr>
                <th scope="col"><input type="checkbox" name="" id=""></th>
                <th scope="col">#</th>
                <th scope="col">Data de Audiência</th>
                <th scope="col">Proc.ADM</th>
                <th scope="col">Proc. Eletrônico</th>
                <th scope="col">Procurador</th>
                <th scope="col">Status</th>
                <th scope="col">Ações:</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arrayUsersAudiencias as $id_user => $ids) { ?>
                <?php foreach($ids as $id => $user) { ?>
                    <tr class="<?php echo $id?>">
                        <td><input type="checkbox" name="" id=""></td>
                        <th scope="row"><?php echo $id?></th>
                        <td><?php echo date('d/m/Y', strtotime($user['data_audiencia']))?></td>
                        <td><?php echo $user['processo_administrativo']?></td>
                        <td><?php echo $user['processo_eletronico']?></td>
                        <td><?php echo $user['procurador']?></td>
                        <td><?php echo $user['status_audiencia']?></td>
                        <td>
                            <button id="<?php echo $id; ?>" type="button" class="btn btn-outline-primary btn-sm viewButton"><i class="fas fa-eye"></i></button>
                            <button id="<?php echo $id; ?>" type="button" class="btn btn-outline-warning btn-sm editButton"><i class="fas fa-edit"></i></button>
                            <button id="<?php echo $id; ?>" type="button" class="btn btn-outline-danger btn-sm btn-sm deleteButton"><i class="fas fa-trash-alt"></i></button>                            
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
        <div id="view"></div>
        <div id="edit"></div>
        <div id="saved"></div>
        <div id="delete"></div>
    </table>
    </form>

    <nav aria-label="Page navigation example" style="">
        <ul class="pagination">
            <?php
                $sql_query = "SELECT * FROM pauta_audiencia WHERE id_user = " .$_SESSION['id'];
                $sql = mysql_query($sql_query);

                $total_records = mysql_num_rows($sql);
                $total_pages = ceil($total_records/$num_for_pages);                        
            ?>

            <?php if($page > 1) { ?>
                <li class="page-item">
                    <a class="page-link" href="relatorio_audiencia.php?page=<?php echo $page-1?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            <?php } ?>

            <?php if($total_records > $num_for_pages) { ?>
                <?php for($i = 1; $i <= $total_pages; $i++) { ?>
                    <li class="page-item">
                        <a class="page-link" href="relatorio_audiencia.php?page=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                <?php } ?>
            <?php } else { ?>

            <?php } ?>
            
            <?php if($page == $total_pages) { ?>
            <?php } else { ?>
                <li class="page-item">
                    <a class="page-link" href="relatorio_audiencia.php?page=<?php echo $page+1?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
    <?php } else { ?>
        <div class="alert alert-danger mt-3" role="alert">
            Não foi possível encontrar o(s) relátorio(s) de Audiência. <a href="cadastrar_audiencia.php" class="alert-link">Clique aqui</a> para cadastrar.
        </div>
    <?php } ?>