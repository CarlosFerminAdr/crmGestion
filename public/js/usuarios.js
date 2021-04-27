$(document).ready(function(){
    $('#tablaUsuarios').load('vistas/usuarios/tablaUsuarios.php')
});

function eliminarUsuario(){
    swal({
        title: "Advertencia!",
        text: "¿Desea eliminar este usuario?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            swal("se ha eliminado!");
          /*swal("Usuario eliminado, exitosamente!", {
            icon: "success",
          });
        } else {
          swal("Error!, este usuario exite en otra tabla!");*/
        }
    });
}