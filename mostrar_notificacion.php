<?php
session_start();

if (isset($_SESSION['message']) && isset($_SESSION['message_type'])) {
    $message = $_SESSION['message'];
    $messageType = $_SESSION['message_type'];

    // Limpia las variables de sesión
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);

    // Crea un script JavaScript para mostrar la notificación
    echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: "' . $messageType . '",
                text: "' . $message . '",
                confirmButtonText: "Aceptar"
            });
        });
    </script>';
} else {
    // Si no hay mensaje en las variables de sesión, redirige a otra página o realiza alguna otra acción
    header("Location: ../index.html");
    exit;
}
?>