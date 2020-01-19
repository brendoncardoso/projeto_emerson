<?php include_once ('header.php'); ?>
<style>
.table td, .table th {
    vertical-align: none!important;

}
</style>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio.php#"><i class="fas fa-home"></i> Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file-alt"></i> Relatórios</li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-balance-scale"></i> Relatório de Audiências</li>
            </ol>
        </nav>
    </div>

    <div class="container"> 
        <div class="table_audiencia">
            <form id="" action="" method="post">
                <div class="card mb-3">
                    <h5 class="card-header">
                        Relatório de Audiências
                    </h5>
                    <div class="card-body">
                        <div class="container">
                            <div class="form-group row" style="margin-left: 85px;">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">Dia:</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="dia1" name="dia1" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">até</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="dia2" name="dia2" value="">
                                        </div>                                
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" style="margin-left: 70px;">
                                <label for="" class="col-form-label">Filtro: </label>
                                <div class="col-sm-10">
                                    <input type="text" name="filtrar" id="filtrar" class="form-control" placeholder="Processo Administrativo, processo eletrônico, procurador" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="search" type="submit" name="consultar_data" class="btn btn-primary btn-sm right"><i class="fas fa-search"></i> Consultar</button>
                    </div>
                </div>
            </form>
            <div id="resposta"></div>
        </div>
    </div>

    
    <!--<footer class="footer py-3"  style="background-color: #343A40">
      <div class="container">
        <span class="text-white">&copy; <small>Todos os direitos reservados.</small></span>
      </div>
    </footer>-->
    
    <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/jquery.mask.js"></script>
    <script type="text/javascript" src="js/myMask.js"></script>  
    <script type="text/javascript" src="js/myFunctions.js"></script>

    <script src="https://kit.fontawesome.com/656982b196.js" crossorigin="anonymous"></script>
</body>
</html>