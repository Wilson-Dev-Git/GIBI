$(document).ready(function() {
    // Obtén la referencia al botón que abrirá la ventana modal de modificar
    var btnModificarinmueb = $(".btnModificarinmueb");

    // Escucha el evento clic de los botones de modificar
    btnModificarinmueb.click(function() {
        // Obtén el id del inmueble a modificar desde el atributo data-id del botón
        var idInmueble = $(this).data("id_inmueble");

        // Realiza una petición AJAX para obtener el contenido del formulario de modificar
        $.ajax({
            url: "inmueb/edit_inmueb.php",
            type: "GET",
            data: { id_inmueble: idInmueble },
            success: function(response) {
                // En este punto, se ha cargado exitosamente el contenido del formulario de modificar

                // Actualiza el contenido de la ventana modal de modificar con el contenido recibido
                $("#formularioContainer").html(response);

                // Asigna el ID del inmueble al campo oculto en el formulario
                $("#id_inmueble").val(idInmueble);

                // Abre la ventana modal de modificar
                $("#agregarinmuebModal").modal("show");
            },
            error: function() {
                // Maneja el caso de error si la carga del formulario de modificar falla
                alert("Error al cargar el formulario de modificar inmueble.");
            }
        });
    });
});

function closeForm() {
    // Cierra la ventana modal de modificar
    $("#agregarinmuebModal").modal("hide");
}