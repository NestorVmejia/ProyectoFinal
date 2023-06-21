<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white text-center"" >
        <p class="modal-title">Eliminar registro</p>
        
      </div>

      <div class="modal-body">
        <strong style="text-align: center !important">
          ¿Esta seguro de eliminar a <?php echo $data['nombre'] . ' ' . $data['Apaterno'] . ' ' . $data['Amaterno']; ?> ?

        </strong>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No estoy seguro</button>
        <button type="submit" class="btn btn-danger btnBorra" data-dismiss="modal" id="<?php echo $data['id']; ?>">Si, estoy seguro</button>
      </div>

    </div>
  </div>
</div>
<!---fin ventana eliminar--->