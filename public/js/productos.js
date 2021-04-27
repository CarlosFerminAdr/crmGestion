$(document).ready(function(){
    $('#tablaProductos').load('vistas/productos/tablaProductos.php')
});


function eliminarProducto(){
    swal({
        title: "Advertencia!",
        text: "¿Desea eliminar este producto?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            swal("se ha eliminado!");
        }
    });
}