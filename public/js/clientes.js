$(document).ready(function(){
    $('#tablaClientes').load('vistas/clientes/tablaClientes.php')
});

function eliminarCliente(){
    swal({
        title: "Advertencia!",
        text: "¿Desea eliminar el cliente?",
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