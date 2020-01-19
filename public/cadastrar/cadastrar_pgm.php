<?php include_once ('header.php'); ?>
<?php if(isset($_POST['enviar_pgm'])) { ?>
    <?php
        $proc_judicial = $_POST['proc_judicial'];
        $reclamante = $_POST['reclamante'];
        $reclamado = $_POST['reclamado'];
        $tramitacao = $_POST['tramitacao'];
        $data_autuacao = $_POST['data_autuacao'];
        $procurador = $_POST['procurador'];

        $sql_query = mysql_query("INSERT INTO pauta_pgm (id_user, proc_judicial, reclamante, reclamada, tramitacao, data_autuacao, procurador) VALUES ('{$_SESSION['id']}', '$proc_judicial', '$reclamante', '$reclamado', '$tramitacao', '$data_autuacao', '$procurador')");
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
                    O <strong>Processo Judicial</strong> de <strong>Nº <?php echo $proc_judicial; ?></strong> e <strong>data de Autuação</strong> de <strong><?php echo $data_autuacao; ?></strong> foram cadastrados com Sucesso.
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
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-balance-scale"></i> PGM</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST" autocomplete="off">
                    <div class="card bg-default mb-5">
                        <h5 class="card-header">
                            <i class="fas fa-balance-scale"></i> Cadastrar PGM
                        </h5>
                        <div class="card-body">
                            <div class="container">
                                <div class="container">
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                        <label for="">Processo Judicial: </label>
                                            <input type="text" class="form-control" id="proc_judicial" name="proc_judicial" value="" placeholder="_______-__.____._.__.____" required>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Reclamante: </label>
                                            <input type="text" class="form-control" id="reclamante" name="reclamante" value="" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label for="">Reclamada: </label>
                                            <input type="text" class="form-control" id="reclamada" name="reclamada" value="" placeholder="" required>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Tramitação: </label>
                                            <input type="text" class="form-control" id="tramitacao" name="tramitacao" value="" placeholder="" required>
                                        </div>
                                    </div>
                                    <!--<div class="form-row">
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
                                    </div>-->
                                    <div class="form-row">
                                        <div class="form-group col-sm-3">
                                            <label for="">Data de Autuação: </label>
                                            <input type="text" class="form-control" id="data_autuacao" name="data_autuacao" value="" placeholder="dd/mm/aaaa" >
                                        </div>
                                        <div class="form-group col-sm-3"></div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Procurador: </label>
                                            <input type="text" class="form-control" id="procurador" name="procurador" value="" placeholder="" required>
                                        </div>
                                        <!--<div class="form-group col-sm-3">
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
                                        </div>-->
                                    </div>
                                    <!--<div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label for="">Observação: </label>
                                            <input type="text" class="form-control" id="" name="obs" value="" placeholder="">
                                        </div>
                                    </div>-->                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="container">
                                <div class="container">
                                    <button type="submit" name="enviar_pgm" class="btn btn-success" style="float: right"><i class="fas fa-save"></i> Salvar</button>
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
