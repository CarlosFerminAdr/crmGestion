<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="frmEditarServicio">
        <strong><label for="id_cliente">Cliente:</label></strong>
            <input type="text" id="id_cliente" name="id_cliente" class="form-control">
            <br>
            <strong><label for="fecha_inicio">Fecha de Inicio:</label></strong>
            <input type="text" id="fecha_inicio" name="fecha_inicio" class="form-control">
            <br>
            <strong><label for="fecha_fin">Fecha Final:</label></strong>
            <input type="text" id="fecha_fin" name="fecha_fin" class="form-control">
            <br>
            <strong><label for="id_tipo">Tipo de Servicio:</label></strong>
            <input type="text" id="id_tipo" name="id_tipo" class="form-control">
            <br>
            <strong><label for="costo_servico">Costo del Servicio:</label></strong>
            <input type="text" id="costo_servico" name="costo_servico" class="form-control">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
</div>