<?php include_once ('header.php'); ?>
<?php if(isset($_POST['enviar_data_prazo'])) { ?>
    <?php
        $data_prazo = $_POST['data_prazo'];
        $prazo = $_POST['prazo'];
        $data_despacho = $_POST['data_despacho'];
        $despacho = $_POST['despacho'];
        $oficio = $_POST['oficio'];
        $secretaria = $_POST['secretaria'];
        $procurador = $_POST['procurador'];
        $obs = $_POST['obs'];
        $status_prazo = $_POST['status_prazo'];
        $proc_eletronico = $_POST['processo_eletronico'];
        $procCNJ1 = $_POST['procCNJ1'];
        $procCNJ2 = $_POST['procCNJ2'];

        $sql_query = mysql_query("INSERT INTO pauta_prazo (id_user, proc_eletronico, proc_civil, data_prazo, prazo, data_despacho, despacho, oficio, secretaria, procurador, obs_prazo, status_prazo) VALUES ('{$_SESSION['id']}','$proc_eletronico', '$procCNJ1.8.19.$procCNJ2','$data_prazo', '$prazo', '$data_despacho', '$despacho', '$oficio', '$secretaria', '$procurador', '$obs', '$status_prazo')");
    ?>

    <?php if($sql_query == true) { ?>
        <div class="container">
            <div class="alert alert-success audiencia_enviada" role="alert">
                <h4 class="alert-heading">Sucesso! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h4>
                <i>
                    O <strong>Processo Eletrônico</strong> de <strong>Nº <?php echo $proc_eletronico; ?></strong> e <strong>data de Prazo</strong> de <strong><?php echo $data_prazo; ?></strong> foram cadastrados com Sucesso.
                </i>
            </div>
        </div>
    <?php } ?>
<?php } ?>

    <!--p class="text-center py-5">Preencha os formulários vazios para a tabela de registros cadastrados.</p>-->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio.php"><i class="fas fa-home"></i> Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-plus"></i> Cadastrar</li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-balance-scale"></i> Prazo</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST" autocomplete="off">
                    <div class="card bg-default mb-5">
                        <h5 class="card-header">
                            <i class="fas fa-balance-scale"></i> Cadastrar Prazo
                        </h5>
                        <div class="card-body">
                            <div class="container">
                                <div class="container">
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label for="">Processo Eletrônico: </label>
                                            <input type="text" class="form-control" id="processo_eletronico" name="processo_eletronico" value="" placeholder="_______-__.____._.__.____" >
                                        </div>
                                        <div class="form-group col-sm-6">
                                        <label for="">Processo Cívil: </label>
                                            <div class="form-row">
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="procCNJ1" name="procCNJ1" value="" placeholder="_______-__.____" >
                                                </div>
                                                <label style="margin-top: auto;">.8.19.</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="procCNJ2" name="procCNJ2" value="" placeholder="____" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-4">
                                            <label for="">Data de Prazo: </label>
                                            <input type="text" class="form-control" id="data_prazo" name="data_prazo" value="" placeholder="dd/mm/aaaa" >
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="">Prazo: </label>
                                            <select class="form-control" name="prazo" id="prazo" placeholder="" >
                                                <option value=""selected></option>
                                                <option value="Aguardando 180 dias">Aguardando 180 dias</option>
                                                <option value="Embargos Declaratórios">Embargos Declaratórios</option>
                                                <option value="Recurso Ordinário">Recurso Ordinário</option>
                                                <option value="Recurso de Revista">Recurso de Revista</option>
                                                <option value="Agravo de Instrumento">Agravo de Instrumento</option>
                                                <option value="Impugnar Cáculos">Impugnar Cáculos</option>
                                                <option value="Embargos à Execução">Embargos à Execução</option>
                                                <option value="Não Informado">Não Informado</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="">Status: </label>
                                            <select class="form-control" name="status_prazo" id="status" placeholder="" required>
                                                <option value=""selected></option>
                                                <option value="Aguardando 180 dias">Aguardando 180 dias</option>                        
                                                <option value="Sine Die para Sentença">Sine Die para Sentença</option>
                                                <option value="Autos Conclusos para Decisão do Acórdão">Autos Conclusos para Decisão do Acórdão</option>
                                                <option value="Processo Arquivado">Processo Arquivado</option>
                                                <option value="Município Excluído do Polo Passivo">Município Excluído do Polo Passivo</option>
                                                <option value="Acordo Homologado entre o 1 Rcdo. E Reclamante">Acordo Homologado entre o 1 Rcdo. E Reclamante</option>
                                                <option value="Processo em Fase de Execução">Processo em Fase de Execução</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-3">
                                            <label for="">Data de Despacho: </label>
                                            <input type="text" class="form-control" id="data_despacho" name="data_despacho" value="" placeholder="dd/mm/aaaa" >
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="">Despacho: </label>
                                            <input type="text" class="form-control" id="" name="despacho" value="" placeholder="" >
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="">Ofício: </label>
                                            <input type="text" class="form-control" id="" name="oficio" value="" placeholder="" >
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="">Secretária: </label>
                                            <input type="text" class="form-control" id="" name="secretaria" value="" placeholder="" >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label for="">Procurador: </label>
                                            <input type="text" class="form-control" id="procurador" name="procurador" value="" placeholder="" required>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Observação: </label>
                                            <input type="text" class="form-control" id="" name="obs" value="" placeholder="">
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="container">
                                <div class="container">
                                    <button type="submit" name="enviar_data_prazo" class="btn btn-success" style="float: right"><i class="fas fa-save"></i> Salvar</button>
                                    <a href="inicio.php">
                                        <button type="button" class="btn btn-primary mr-3" style="float: right"><i class="fas fa-undo-alt"></i> Voltar</button>
                                    </a>

                                    <a href="logout.php">
                                        <button type="button" class="btn btn-danger" style="float: left">Sair <i class="fas fa-sign-out-alt"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <?php include_once ('footer.php'); ?>
