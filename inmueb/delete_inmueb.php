<?php

    include("db.php");

    if(isset($_GET['id_inmueble'])){
        $id_inmueble = $_GET['id_inmueble'];
        $query = "DELETE FROM inmueble WHERE id_inmueble = $id_inmueble";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Inmueble eliminado con exito';
        $_SESSION['message_type'] = 'danger';

        header("Location: ../index.html");
    }

?>