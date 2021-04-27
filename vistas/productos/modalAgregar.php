<!-- Modal -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="frmAgregarProducto">
            <strong><label for="nombre">Producto:</label></strong>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="nombre del producto..">
            <br>
            <strong><label for="marca">Marca:</label></strong>
            <input type="text" id="marca" name="marca" class="form-control" placeholder="marca del producto..">
            <br>
            <strong><label for="cantidad_stock">Cantidad:</label></strong>
            <input type="text" id="cantidad_stock" name="cantidad_stock" class="form-control" placeholder="cantidad del producto..">
            <br>
            <strong><label for="precio">Precio:</label></strong>
            <input type="text" id="precio" name="precio" class="form-control" placeholder="precio del producto..">
            <br>
            <strong><label for="id_categoria">Categoria:</label></strong>
            <input type="text" id="id_categoria" name="id_categoria" class="form-control" placeholder="categoria del producto..">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>