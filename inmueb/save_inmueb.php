<?php
    include("db.php");

    if (isset($_POST['Save_inmueb'])) {
        
        $codigo = $_POST['codigo'];
        $denominacion = $_POST['denominacion'];
        $usoOriginal = $_POST['uso-original'];
        $usoActual = $_POST['uso-actual'];
        $calle = $_POST['calle'];
        $numeroCasa = $_POST['numero-casa'];
        $regimenPropiedad = $_POST['regimen-propiedad'];
        $nombrePropietario = $_POST['nombre-propietario'];
        $fechaConstruccion = $_POST['fecha-construccion'];
        $tipologia = $_POST['tipologia'];

        if (isset($_POST['id_inmueble'])) {
            // Actualizar el inmueble existente
            $id_inmueble = $_POST['id_inmueble'];
            $query = "UPDATE inmueble SET codigo = '$codigo', denominacion = '$denominacion', uso_original = '$usoOriginal', uso_actual = '$usoActual', calle = '$calle', numero_inm = '$numeroCasa', propiedad = '$regimenPropiedad', propietario = '$nombrePropietario', fecha_creacion = '$fechaConstruccion', tipo = '$tipologia' WHERE id_inmueble = $id_inmueble";
        } else {
            // Insertar un nuevo inmueble
            $query = "INSERT INTO inmueble (codigo, denominacion, uso_original, uso_actual, calle, numero_inm, propiedad, propietario, fecha_creacion, tipo) VALUES ('$codigo', '$denominacion', '$usoOriginal', '$usoActual', '$calle', '$numeroCasa', '$regimenPropiedad', '$nombrePropietario', '$fechaConstruccion', '$tipologia')";
        }

        $result = mysqli_query($conn, $query);

        if (!$result) {
            $_SESSION['message'] = 'Error al guardar los datos del inmueble.';
            $_SESSION['message_type'] = 'danger';
        } else {
            $_SESSION['message'] = 'Inmueble guardado o actualizado con éxito.';
            $_SESSION['message_type'] = 'success';
        }

        header("Location: ../index.html");
    }
?>