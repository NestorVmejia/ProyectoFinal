<!--ventana para Update--->
<div class="modal fade" id="editRegistro<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white text-center"">
        <h6 class=" modal-title">
                Actualizar Información
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 

 
            <form method="POST" action="sets/recib_Update_Asist.php">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                <div class="modal-body" id="cont_modal">

                    <div class="form-group text-center">
                        <span>Editar información del paciente: </span><br>
                        <span><?php echo $data['nombre'] . ' ' . $data['Apaterno'] . ' ' . $data['Amaterno']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name input-group-text" class="col-form-label">Reasignar cita:</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon3">Fecha:</span>
                            <input class="form-control" type="datetime-local" value="<?php echo $data['fecha']; ?>" name="fecha" id="fecha" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name input-group-text" class="col-form-label">Actualizar Enfermedad:</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon3">Enfermedad:</span>
                            <select class="form-select" value="<?php echo $data['Enfermedad']; ?>" name="Enfermedad" required>
                                <option selected value="<?php echo $data['Enfermedad']; ?>"><?php echo $data['Enfermedad']; ?></option>
                                <option value="Diabetes">Diabetes</option>
                                <option value="Embarazo">Embarazo</option>
                                <option value="NUTRIMSS">NUTRIMSS</option>
                                <option value="Salud Mental">Salud Mental</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name input-group-text" class="col-form-label">Actualizar telefono:</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon3">TEL:</span>
                            <input class="form-control" type="text" value="<?php echo $data['telefono']; ?>" name="tel" id="tel" required>
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
<!---fin ventana Update --->