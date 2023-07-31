<?php
    include("db.php");

    if(isset($_GET['id_inmueble'])){
        $id_inmueble = $_GET['id_inmueble'];
        $query = "SELECT * FROM inmueble WHERE id_inmueble = $id_inmueble";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $codigo = $row['codigo'];
            $denominacion = $row['denominacion'];
            $usoOriginal = $row['uso_original'];
            $usoActual = $row['uso_actual'];
            $calle = $row['calle'];
            $numeroCasa = $row['numero_inm'];
            $regimenPropiedad = $row['propiedad'];
            $nombrePropietario = $row['propietario'];
            $fechaConstruccion = $row['fecha_creacion'];
            $tipologia = $row['tipo'];
        }
    }
?>

<div class="container p-4">
    <section class="content">
        <div class="container-fluid">
            <!-- card -->
            <div class="card card-primary">
                <!-- card-header -->
                <div class="card-header">
                    <h3 class="card-title">Actualización de Bien Inmueble</h3>
                    <a class="close" onclick="closeForm()">
                        <i class="fas fa-times"></i>
                    </a>
                </div>

                <!-- form -->
                <form action="inmueb/save_inmueb.php" method="POST" onsubmit="prepararEnvio()">
                    <!-- card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="codigo">Código de Bienes Inmuebles:</label>
                            <input type="text" name="codigo" value="<?php echo $codigo; ?>" class="form-control" id="codigo" placeholder="4H4-07-000">
                        </div>
                        <div class="form-group">
                            <label for="denominacion">Denominación del Bien Inmueble:</label>
                            <input type="text" name="denominacion" value="<?php echo $denominacion; ?>" class="form-control" id="denominacion" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="uso-original">Uso Original:</label>
                            <input type="text" name="uso-original" value="<?php echo $usoOriginal; ?>" class="form-control" id="uso-original" placeholder="Uso Original">
                        </div>
                        <div class="form-group">
                            <label for="uso-actual">Uso Actual:</label>
                            <input type="text" name="uso-actual" value="<?php echo $usoActual; ?>" class="form-control" id="uso-actual" placeholder="Uso Actual">
                        </div>
                        <div class="form-group">
                            <label for="calle">Calle(s):</label>
                            <input type="text" name="calle" value="<?php echo $calle; ?>" class="form-control" id="calle" placeholder="Calle 1">
                        </div>
                        <div class="form-group">
                            <label for="numero-casa">Número de Casa:</label>
                            <input type="text" name="numero-casa" value="<?php echo $numeroCasa; ?>" class="form-control" id="numero-casa" placeholder="00-00">
                        </div>
                        <div class="form-group">
                            <label for="regimen-propiedad">Régimen de propiedad:</label>
                            <input type="text" name="regimen-propiedad" value="<?php echo $regimenPropiedad; ?>" class="form-control" id="regimen-propiedad" placeholder="Propietario">
                        </div>
                        <div class="form-group">
                            <label for="nombre-propietario">Nombre del propietario:</label>
                            <input type="text" name="nombre-propietario" value="<?php echo $nombrePropietario; ?>" class="form-control" id="nombre-propietario" placeholder="Persona Natural o Jurídica">
                        </div>
                        <div class="form-group">
                            <label for="fecha-construccion">Fecha de construcción:</label>
                            <input type="text" name="fecha-construccion" value="<?php echo $fechaConstruccion; ?>" class="form-control" id="fecha-construccion" placeholder="1999-02-28">
                        </div>
                        <div class="form-group">
                            <label for="tipologia">Tipología:</label>
                            <input type="text" name="tipologia" value="<?php echo $tipologia; ?>" class="form-control" id="tipologia" placeholder="Estilo de la edificación">
                        </div>
                        <input type="hidden" name="id_inmueble" value="<?php echo $id_inmueble; ?>">
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <input type="submit" class="btn btn-success flex-grow-1 me-2" name="Save_inmueb" value="Guardar" onclick="closeForm()">
                        <button type="button" class="btn btn-danger flex-grow-1" onclick="closeForm()">Cancelar</button>
                    </div>
                </form>
                <!-- /.card -->
            </div>
        </div>
    </section>
</div>