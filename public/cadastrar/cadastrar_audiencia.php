<?php include 'header.php'; ?>
<?php if(isset($_POST['enviar_audiencia'])) { ?>
    <?php
        $data_audiencia = addslashes($_POST['data_audiencia']);
        $horario = addslashes($_POST['horario']);
        $processo_administrativo = addslashes($_POST['processo_administrativo']);
        $processo_eletronico = addslashes($_POST['processo_eletronico']);
        $vt = addslashes($_POST['vt']);
        $vc = addslashes($_POST['vc']);
        $procurador = addslashes($_POST['procurador']);
        $obs = addslashes($_POST['obs']);
        $status_audiencia = addslashes($_POST['status_audiencia']);
        $comarca = addslashes($_POST['comarca']);
        $reclamante = addslashes($_POST['reclamante']);
        $reclamada = addslashes($_POST['reclamada']);
        $procCNJ1 = addslashes($_POST['procCNJ1']);
        $procCNJ2 = addslashes($_POST['procCNJ2']);

        $sql_query = mysql_query("INSERT INTO pauta_audiencia (id_user, data_audiencia, procurador, obs_audiencia, status_audiencia, processo_administrativo, vt, vc, processo_civil, comarca, processo_eletronico, horario, reclamante, reclamada) VALUES ('{$_SESSION['id']}','$data_audiencia', '$procurador', '$obs', '$status_audiencia', '$processo_administrativo', '$vt', '$vc', '$procCNJ1.8.19.$procCNJ2', '$comarca', '$processo_eletronico', '$horario', '$reclamante', '$reclamada')");
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
                    O <strong>Processo Administrativo</strong> de <strong>Nº <?php echo $processo_administrativo; ?></strong> e <strong>Processo Eletrônico</strong> de <strong>Nº <?php echo $processo_eletronico; ?></strong> foram cadastrados com Sucesso.
                </i>
            </div>
        </div>
    <?php } ?>
<?php } ?>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio.php"><i class="fas fa-home"></i> Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-plus"></i> Cadastrar</li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-balance-scale"></i> Audiência</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST" autocomplete="off">
                    <div class="card bg-default mb-5">
                        <h5 class="card-header">
                            <i class="fas fa-balance-scale"></i> Cadastrar Audiência
                        </h5>
                        <div class="card-body">
                            <div class="container">
                                <div class="container">
                                        <div class="form-row">
                                            <div class="form-group col-sm-6">
                                                <label for="">Data de Audiência: </label>
                                                <input type="text" class="form-control" id="data" name="data_audiencia" value="" placeholder="dd/mm/aaaa" required>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="">Horário: </label>
                                                <input type="text" class="form-control time" id="" name="horario" value="" placeholder="00:00:00" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-6">
                                                <label for="">Processo Administrativo: </label>
                                                <input type="text" class="form-control" id="processo_administrativo" name="processo_administrativo" value="" placeholder="__/_______/__" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Processo Eletrônico: </label>
                                                <input type="text" class="form-control" id="processo_eletronico" name="processo_eletronico" value="" placeholder="_______-__.____._.__.____" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-6">
                                                <label for="">VT: </label>
                                                <input type="text" class="form-control" id="vt" name="vt" value="" placeholder="00ª" required>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="">VC: </label>
                                                <input type="text" class="form-control" id="vc" name="vc" value="" placeholder="00ª" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">
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
                                            <div class="form-group col-sm-6">
                                                <div class="form-row">
                                                    <label for="">Comarca: </label>
                                                    <input type="text" class="form-control" id="comarca" name="comarca" value="" placeholder="" required="">
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="form-row">
                                            <div class="form-group col-sm-6">
                                                <label for="">Reclamante: </label>
                                                <input type="text" class="form-control" id="reclamante" name="reclamante" value="" placeholder="" required>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="">Reclamada: </label>
                                                <input type="text" class="form-control" id="reclamada" name="reclamada" value="" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-6">
                                                <label for="">Procurador: </label>
                                                <input type="text" class="form-control" id="procurador" name="procurador" value="" placeholder="" required>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="">Observação: </label>
                                                <input type="text" class="form-control" id="" name="obs_audiencia" value="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-6">
                                                <label for="">Status: </label>
                                                <input type="text" class="form-control" id="" name="status_audiencia" value="" placeholder="">
                                            </div>
                                        </div>                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="container">
                                <div class="container">
                                    <!--<input type="submit" name="enviar_audiencia" class="btn btn-primary" style="float: right" value="Enviar"></i>-->
                                    <button type="submit" name="enviar_audiencia" class="btn btn-success" style="float: right"><i class="fas fa-save"></i> Salvar</button>
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