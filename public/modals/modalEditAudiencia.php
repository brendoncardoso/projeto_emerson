<?php
require 'connection.php';
session_start();

  if(isset($_POST['view_id'])){
    $query = "SELECT * FROM pauta_audiencia WHERE id=" .$_POST['view_id']. " AND id_user =" .$_SESSION['id'];
    $sql_query = mysql_query($query);

    while($rowAudieciaView = mysql_fetch_assoc($sql_query)){
      $arrayId[$rowAudieciaView['id_user']] = [
        "id" => $rowAudieciaView['id'],
        "data_audiencia" => $rowAudieciaView['data_audiencia'],
        "procurador" => $rowAudieciaView['procurador'],
        "status_audiencia" => $rowAudieciaView['status_audiencia'],
        "obs_audiencia" => $rowAudieciaView['obs_audiencia'],
        "vt" => $rowAudieciaView['vt'],
        "vc" => $rowAudieciaView['vc'],
        "comarca" => $rowAudieciaView['comarca'],
        "processo_administrativo" => $rowAudieciaView['processo_administrativo'],
        "processo_eletronico" => $rowAudieciaView['processo_eletronico'],
        "processo_civil" => $rowAudieciaView['processo_civil'],
        "horario" => $rowAudieciaView['horario'],
        "reclamante" => $rowAudieciaView['reclamante'],
        "reclamada" => $rowAudieciaView['reclamada']
      ];
    }
  }
?>

<div id="editAudiencia" class="modal fade bd-example-modal-lg editAudiencia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title text-white" id="exampleModalLongTitle"><i class="fas fa-edit"></i> Editar</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
        <div class="modal-body">
          <?php foreach($arrayId as $view) { ?>
            <div class="form-row">
              <div class="form-group col-sm-6">
                  <label for="">Data de Audiência: </label>
                  <input type="date" class="form-control data_audiencia" id="" name="data_audiencia" value="<?php echo $view['data_audiencia']; ?>" placeholder="dd/mm/aaaa">
              </div>
              <div class="form-group col-sm-6">
                  <label for="">Horário: </label>
                  <input type="text" class="form-control horario" id="" name="horario" value="<?php echo $view['horario']; ?>" placeholder="00:00:00">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                  <label for="">Processo Administrativo: </label>
                  <input type="text" class="form-control processo_administrativo" id="" name="processo_administrativo" value="<?php echo $view['processo_administrativo']; ?>" placeholder="__/_______/__">
              </div>
              <div class="form-group col-md-6">
                  <label for="">Processo Eletrônico: </label>
                  <input typbe="text" class="form-control processo_eletronico" id="" name="processo_eletronico" value="<?php echo $view['processo_eletronico']; ?>" placeholder="_______-__.____._.__.____">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                  <label for="">VT: </label>
                  <input type="text" class="form-control vt" id="vt" name="vt" value="<?php echo $view['vt']; ?>" placeholder="00ª">
              </div>
              <div class="form-group col-sm-6">
                  <label for="">VC: </label>
                  <input type="text" class="form-control vc" id="vc" name="vc" value="<?php echo $view['vc']; ?>" placeholder="00ª">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                    <label for="">Processo Civil: </label>
                    <input type="text" class="form-control processo_civil" id="" name="processo_civil" value="<?php echo $view['processo_civil']; ?>" placeholder="0000000-00.0000.0.00.0000">
                </div>
                <div class="form-group col-sm-6">
                    <div class="form-row">
                        <label for="">Comarca: </label>
                        <input type="text" class="form-control comarca" id="" name="comarca" value="<?php echo $view['comarca']; ?>" placeholder="" required="">
                    </div>
                </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-sm-6">
                      <label for="">Reclamante: </label>
                      <input type="text" class="form-control reclamante" id="" name="reclamante" value="<?php echo $view['reclamante']; ?>" placeholder="">
                  </div>
                  <div class="form-group col-sm-6">
                      <label for="">Reclamada: </label>
                      <input type="text" class="form-control reclamada " id="" name="reclamada" value="<?php echo $view['reclamada']; ?>" placeholder="">
                  </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="">Procurador: </label>
                    <input type="text" class="form-control procurador" id="" name="procurador" value="<?php echo $view['procurador']; ?>" placeholder="">
                </div>
                <div class="form-group col-sm-6">
                    <label for="">Observação: </label>
                    <input type="text" class="form-control" id="" name="obs_audiencia" value="<?php echo $view['obs_audiencia']; ?>" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="">Status: </label>
                    <input type="text" class="form-control" id="" name="status_audiencia" value="<?php echo $view['status_audiencia']; ?>" placeholder="">
                </div>
            </div>
          <?php } ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success text-white saveThis" data-dismiss="modal"><i class="fas fa-save"></i> Salvar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Fechar</button>
        </div>  
      </div>
  </div>
</div>
