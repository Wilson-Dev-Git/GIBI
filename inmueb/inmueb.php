<?php
    include("db.php");
    include("delete_inmueb.php");
?>
<script src="new_inmueb.js"></script>
<script src="edit_inmueb.js"></script>

<div class="card card-secondary">
    <div class="card-header">
        <h1 class="card-title">
            <i class="ion ion-clipboard"></i>
            Inmuebles Registrados
        </h1>

        <div class="card-tools">
            <button type="button" class="btn btn-light float-right" id="btnAgregarinmueb" data-bs-toggle="modal" data-bs-target="#agregarinmuebModal">
                <i class="fas fa-plus"></i> Agregar Inmueble
            </button>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Código</th>
                    <th>Denominación</th>
                    <th>Propietario</th>
                    <th>Estatus</th>
                    <th class="text-center">ver</th>
                    <th class="text-center">modificar</th>
                    <th class="text-center">eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM inmueble";
                $result_inmuebles = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result_inmuebles)) { ?>
                    <tr>
                        <td><?php echo $row['id_inmueble'] ?></td>
                        <td><?php echo $row['codigo'] ?></td>
                        <td><?php echo $row['denominacion'] ?></td>
                        <td><?php echo $row['propietario'] ?></td>
                        <td><?php echo $row['propietario'] ?></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btnModificarinmueb" data-id_inmueble="<?php echo $row['id_inmueble']; ?>">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-success btnModificarinmueb" data-id_inmueble="<?php echo $row['id_inmueble'] ?>">
                                <i class="fas fa-marker"></i>
                            </button>
                        </td>

                        <td class="text-center">
                            <a href="inmueb/delete_inmueb.php?id_inmueble=<?php echo $row['id_inmueble'] ?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="agregarinmuebModal" tabindex="-1" aria-labelledby="agregarinmuebModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="formularioContainer"></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modificarinmuebModal" tabindex="-1" aria-labelledby="modificarinmuebModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="formularioModificarContainer"></div>
            </div>
        </div>
    </div>
</div>