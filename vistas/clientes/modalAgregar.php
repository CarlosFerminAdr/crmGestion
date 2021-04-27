<!-- Modal -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="frmAgregarCliente">
            <strong><label for="nombre">Nombre:</label></strong>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="nombre completo..">
            <br>
            <strong><label for="a_paterno">Apellido paterno:</label></strong>
            <input type="text" id="a_paterno" name="a_paterno" class="form-control" placeholder="apellido paterno..">
            <br>
            <strong><label for="a_materno">Apellido materno:</label></strong>
            <input type="text" id="a_materno" name="a_materno" class="form-control" placeholder="apellido materno..">
            <br>
            <strong><label for="sexo">Sexo:</label></strong>
            <input type="text" id="sexo" name="sexo" class="form-control" placeholder="sexo..">
            <br>
            <strong><label for="telefono">Teléfono:</label></strong>
            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="número de teléfono..">
            <br>
            <strong><label for="direccion">Dirección:</label></strong>
            <input type="text" id="direccion" name="direccion" class="form-control" placeholder="dirección..">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>