$(document).ready(function(){
    $('#tablaServicios').load('vistas/servicios/tablaServicios.php')
});

function eliminarServicio(){
    swal({
        title: "Advertencia!",
        text: "¿Desea eliminar este servicio?",
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