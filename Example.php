<div class="modal fade " id="CambiarContraseña" tabindex="-1" aria-labelledby="CambiarContraseñaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header card-header bg-success text-white text-center">
        <h4 class="card-title text-uppercase">Cambiar Contraseña</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="sets/AdpasswCh.php" method="POST" class="needs-validation"">
                                <div class=" row">
          <?php if (isset($_GET['error'])) { ?>
            <p style="background-color: red;"> <?php echo $_GET['error']; ?> </p>
          <?php } ?>
          <div class="col-sm-6 col-md-12 col-xs-12">
            <div class="form-group mb-2">
              <div class="input-group">
                <span class="input-group-text">Contraseña Actual:</span>
                <input type="text" id="old_password" name="old_password" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-12 col-xs-12">
            <div class="form-group mb-2">
              <div class="input-group">
                <span class="input-group-text">Nueva contraseña:</span>
                <input type="text" id="new_password" name="new_password" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-12 col-xs-12">
            <div class="form-group mb-2">
              <div class="input-group">
                <span class="input-group-text">Confirma la nueva contraseña:</span>
                <input type="text" id="c_np" name="c_np" class="form-control" required>
              </div>
            </div>
          </div>
      </div>

      <hr>
      <div class="modal-footer">
      <input type="button" value="Regresar" onClick="history.go(-1);" class="btn btn-dark">
      <input style="float: right;" type="submit" name="Insertar" value="Cambiar contraseña " class="btn btn-danger">
    </div>
      </form>
    </div>
  </div>
</div>
</div>