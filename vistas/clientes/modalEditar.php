<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="frmEditarCliente">
            <input type="text" name="id" id="id" hidden="">
            <strong><label for="nombre">Nombre:</label></strong>
            <input type="text" id="nombre" name="nombre" class="form-control">
            <br>
            <strong><label for="a_paterno">Apellido paterno:</label></strong>
            <input type="text" id="a_paterno" name="a_paterno" class="form-control">
            <br>
            <strong><label for="a_materno">Apellido materno:</label></strong>
            <input type="text" id="a_materno" name="a_materno" class="form-control">
            <br>
            <strong><label for="sexo">Sexo:</label></strong>
            <input type="text" id="sexo" name="sexo" class="form-control">
            <br>
            <strong><label for="telefono">Teléfono:</label></strong>
            <input type="text" id="telefono" name="telefono" class="form-control">
            <br>
            <strong><label for="direccion">Dirección:</label></strong>
            <input type="text" id="direccion" name="direccion" class="form-control">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
</div>