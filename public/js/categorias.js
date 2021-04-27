$(document).ready(function(){
    $('#tablaCategorias').load('vistas/categorias/tablaCategorias.php')
});

function eliminarCategoria(){
    swal({
        title: "Advertencia!",
        text: "¿Desea eliminar esta categoria?",
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