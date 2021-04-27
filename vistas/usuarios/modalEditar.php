<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="frmEditarUsuario">
            <input type="text" name="id" id="id" hidden="">
            <strong><label for="nombre">Nombre:</label></strong>
            <input type="text" id="nombre" name="nombre" class="form-control">
            <br>
            <strong><label for="user">Usuario:</label></strong>
            <input type="text" id="user" name="user" class="form-control">
            <br>
            <strong><label for="password">Contraseña:</label></strong>
            <input type="password" id="password" name="password" class="form-control">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
</div>