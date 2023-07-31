// modalUtils.js

function closeModalAndRefresh() {
    // Cerrar la ventana modal
    $("#agregarinmuebModal").modal("hide");

    // Actualizar el contenido de "tabla-container"
    $("#tabla-container").load("ruta/al/archivo.php");
}

$.AdminLTE.notify('Mensaje de notificación', 'success', { autoHide: true, delay: 3000 });