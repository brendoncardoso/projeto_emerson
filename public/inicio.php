<?php include_once ('header.php'); ?>
    <div class="container"> 
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item ">
                        <a class="nav-link btn-cadastrar active" href="#"><i class="fas fa-plus"></i> Cadastrar</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link btn-relatorio" href="#"><i class="fas fa-file-alt"></i> Relatórios</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <hr style="border-style: solid; border-width: 1px; border-color: #343A40;">
                <div class="col-sm-12">
                    <div class="relatorios" style="display: none">
                        <div class="row">
                            <div class="thumbnail">
                                <a href="relatorio_audiencia.php">
                                    <div class="buttonIcon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="buttonName">
                                        <div class="text-bold text-center valign-middle vcenter text-uppercase" style="height: 50px;">Audiências</div>
                                    </div>
                                </a>
                            </div>

                            <div class="thumbnail">
                                <a href="relatorio_prazo.php">
                                    <div class="buttonIcon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="buttonName">
                                        <div class="text-bold text-center valign-middle vcenter text-uppercase" style="height: 50px;">Prazos</div>
                                    </div>
                                </a>
                            </div>
                            <div class="thumbnail">
                                <a href="relatorio_pgm.php">
                                    <div class="buttonIcon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="buttonName">
                                        <div class="text-bold text-center valign-middle vcenter text-uppercase" style="height: 50px;">PGM</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="cadastrar" style="display: none;">
                        <div class="row">
                            <div class="thumbnail">
                                <a href="cadastrar_audiencia.php">
                                    <div class="buttonIcon">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="buttonName">
                                        <div class="text-bold text-center valign-middle vcenter text-uppercase" style="height: 50px;">Audiências</div>
                                    </div>
                                </a>
                            </div>

                            <div class="thumbnail">
                                <a href="cadastrar_data_prazo.php">
                                    <div class="buttonIcon">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="buttonName">
                                        <div class="text-bold text-center valign-middle vcenter text-uppercase" style="height: 50px;">Prazos</div>
                                    </div>
                                </a>
                            </div>
                            <div class="thumbnail">
                                <a href="cadastrar_pgm.php">
                                    <div class="buttonIcon">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="buttonName">
                                        <div class="text-bold text-center valign-middle vcenter text-uppercase" style="height: 50px;">PGM</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="row">
            <div class="col-md-12">
                <div class="tabbable" id="tabs-317711">
                    <ul class="nav nav-tabs" style="border-radius: 5px; background-color: #343A40">
                        <li class="nav-item">
                            <a class="nav-link active tabs_audiencia" href="#tab1" data-toggle="tab"><i class="fas fa-file-alt"></i> Relatórios</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panel-477099">
                            <p></p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>-->

    </div>

    
    <?php include_once ('footer.php'); ?>
