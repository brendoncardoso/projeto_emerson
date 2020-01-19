<?php
require 'connection.php';
session_start();

?>

<!-- Modal -->
<form id="modalIdDeleteAudiencia" action="" method="post">
    <div class="modal fade" id="deleteAudiencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalLongTitle"><i class="fas fa-trash"></i> Excluir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <i class="fas fa-trash-alt fa-5x text-danger mt-3"></i>
                    <p class="mt-3">Tem certeza que deseja excluir o  #<strong><?php echo $_POST['delete_id']?></strong> de Audiência?</p>
                </div>
                <div class="modal-footer">
                    <button id="<?php echo $_POST['delete_id']?>" type="button" class="btn btn-success deleteThis"><i class="fas fa-check-circle"></i> Sim</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Não</button>
                </div>
            </div>
        </div>
    </div>
</form>