<?php include_once ('header.php'); ?>
<?php
    //PAGINAÇÃO
    $num_for_pages = 20;

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }

    $start_from = ($page-1)*20;

    $sql_prazo = "SELECT * FROM pauta_prazo WHERE id_user = ". $_SESSION['id']. " LIMIT $start_from, $num_for_pages"; 

    $sql_prazo_query = mysql_query($sql_prazo);
    $sql_prazo_num_rows = mysql_num_rows($sql_prazo_query);

    while($users = mysql_fetch_assoc($sql_prazo_query)){
        $arrayUsersPrazos[$users['id_user']][$users['id']] = [
            "proc_eletronico" => $users['proc_eletronico'],
            "proc_civil" => $users['proc_civil'],
            "data_prazo" => $users['data_prazo'],
            "prazo" => $users['prazo'],
            "status_prazo" => $users['status_prazo'],
            "data_despacho" => $users['data_despacho'],
            "despacho" => $users['despacho'],
            "oficio" => $users['oficio'],
            "secretaria" => $users['secretaria'],
            "procurador" => $users['procurador'],
            "obs_prazo" => $users['obs_prazo']
        ];
    }

?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio.php"><i class="fas fa-home"></i> Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file-alt"></i> Relatórios</li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-balance-scale"></i> Relatório de Prazos</li>
            </ol>
        </nav>
    </div>

    <div class="container"> 
        <div class="table_prazo">
            <?php if(!empty($sql_prazo_num_rows)) { ?>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Prazo Inicial</th>
                            <th scope="col">Proc. Eletrônico</th>
                            <th scope="col">Reclamante</th>
                            <th scope="col">Reclamada</th>
                            <th scope="col">Prazo Final</th>
                            <th scope="col">Prazo</th>
                            <th scope="col">Ações:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($arrayUsersPrazos as $id_user => $id) { ?>
                            <?php foreach($id as $lol => $values) { ?>
                                <tr>
                                    <td scope="row"><?php echo $values['data_prazo']?></td>
                                    <td><?php echo $values['proc_eletronico']?></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><?php echo $values['data_despacho']?></td>
                                    <td><?php echo $values['prazo']?></td>
                                    <td>
                                        <a href="detalhes_pauta_prazo.php?id=<?php echo $values['id'];?>">
                                            <button type="button" class="btn btn-outline-success btn-sm"><i class="fas fa-info-circle"></i></button>
                                        </a>
                                        <a href="editar_pauta_prazo.php?id=<?php echo $values['id'];?>">
                                            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i></button>
                                        </a>
                                        <a href="excluir_pauta_prazo.php?id=<?php echo $values['id'];?>">
                                            <button type="button" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></button>                            
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>

                <nav aria-label="Page navigation example" style="">
                    <ul class="pagination">
                        <?php
                            $sql_query_prazo = "SELECT * FROM pauta_prazo WHERE id_user = " .$_SESSION['id'];
                            $sql = mysql_query($sql_query_prazo);

                            $total_records = mysql_num_rows($sql);
                            $total_pages = ceil($total_records/$num_for_pages);                        
                        ?>

                        <?php if($page > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="relatorio_prazo.php?page=<?php echo $page-1?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if($total_records > $num_for_pages) { ?>
                            <?php for($i = 1; $i <= $total_pages; $i++) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="relatorio_prazo.php?page=<?php echo $i; ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php } else { ?>

                        <?php } ?>
                        
                        <?php if($page == $total_pages) { ?>
                        <?php } else { ?>
                            <li class="page-item">
                                <a class="page-link" href="relatorio_prazo.php?page=<?php echo $page+1?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
            <?php } else { ?>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Prazo Inicial</th>
                            <th scope="col">Proc. Eletrônico</th>
                            <th scope="col">Reclamante</th>
                            <th scope="col">Reclamada</th>
                            <th scope="col">Prazo Final</th>
                            <th scope="col">Prazo</th>
                            <th scope="col">Ações:</th>
                        </tr>
                    </thead>
                </table>
                <div class="alert alert-danger" role="alert">
                    Nenhum prazo cadastrada. <a href="cadastrar_data_prazo.php" class="alert-link">Clique aqui</a> para cadastrar.
                </div>
            <?php } ?>
        </div>
    </div>
    
    <?php include_once ('footer.php'); ?>
