<!-- Ventana modal para eliminar -->
<div class="modal fade" id="citaChildresn<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white text-center"">
        <h6 class=" modal-title">
                Asistencia
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="sets/recib_Cita.php">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                <div class="modal-body" id="cont_modal">

                    <div class="form-group text-center">
                        <span>Editar información del paciente: </span><br>
                        <span><?php echo $data['nombre'] . ' ' . $data['Apaterno'] . ' ' . $data['Amaterno']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name input-group-text" class="col-form-label">¿Asistió a la cita?</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon3">Estatus:</span>
                            <select class="form-select" name="Estatus" required>
                                <option selected value="<?php echo $data['Riesgo']; ?>">Pendiente</option>
                                <option value="1">Si, asistió</option>
                                <option value="2">No, asistió</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!---fin ventana eliminar--->