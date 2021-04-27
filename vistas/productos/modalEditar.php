<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="frmEditarProducto">
            <input type="text" name="id" id="id" hidden="">
            <strong><label for="nombre">Producto:</label></strong>
            <input type="text" id="nombre" name="nombre" class="form-control">
            <br>
            <strong><label for="marca">Marca:</label></strong>
            <input type="text" id="marca" name="marca" class="form-control">
            <br>
            <strong><label for="cantidad_stock">Cantidad:</label></strong>
            <input type="text" id="cantidad_stock" name="cantidad_stock" class="form-control">
            <br>
            <strong><label for="precio">Precio:</label></strong>
            <input type="text" id="precio" name="precio" class="form-control">
            <br>
            <strong><label for="id_categoria">Categoria:</label></strong>
            <input type="text" id="id_categoria" name="id_categoria" class="form-control">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
</div>