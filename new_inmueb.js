$(document).ready(function() {
    
    // Obtén la referencia al botón que abrirá la ventana modal
    var btnAbrirModal = $("#btnAgregarinmueb");

    // Escucha el evento clic del botón
    btnAbrirModal.click(function() {
        // Realiza una petición AJAX para obtener el contenido del archivo PHP
        $.ajax({
            url: "inmueb/new_inmueb.php",
            type: "GET",
            success: function(response) {
                // En este punto, se ha cargado exitosamente el contenido del archivo PHP

                // Actualiza el contenido de la ventana modal con el contenido recibido
                $("#formularioContainer").html(response);

                // Abre la ventana modal
                $("#agregarinmuebModal").modal("show");
            },
            error: function() {
                // Maneja el caso de error si la carga del archivo PHP falla
                alert("Error al cargar el formulario de nuevo inmueble.");
            }
        });
    });
});

function closeForm() {
    // Cierra la ventana modal
    $("#agregarinmuebModal").modal("hide");
}