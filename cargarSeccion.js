function cargarSeccion(url, contenedor) {
    $.ajax({
    url: url,
    type: 'GET',
    dataType: 'html',
    success: function(response) {
        $('#' + contenedor).html(response);
    },
    error: function(xhr, status, error) {
        console.log(xhr.responseText);
    }
});
}
