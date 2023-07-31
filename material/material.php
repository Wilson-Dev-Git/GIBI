<?php include("db.php") ?>

<div class="card card-secondary">
    <div class="card-header">
        <h1 class="card-title">
            <i class="ion ion-clipboard"></i>
                Materiales Registrados
        </h1>

        <button type="button" class="btn btn-light float-right" id="btnAgregarinmueb" data-bs-toggle="modal" data-bs-target="#agregarinmuebModal">
            <i class="fas fa-plus"></i> Agregar Material
        </button>

        <div class="card-tools">
            <div class="modal fade" id="agregarinmuebModal" tabindex="-1" aria-labelledby="agregarinmuebModalLabel" aria-hidden="true">
            <!--  <div class="modal-dialog modal-lg"> -->
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div id="formularioContainer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <table  class="table table-striped projects">
            <thead>
                    <th>Material</th>
                    <th>Estado</th>
                    
                    <th class="text-center">ver</th>
                    <th class="text-center">modificar</th>
                    <th class="text-center">eliminar</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $query = "SELECT * FROM materiales";
                        $result_inmuebles = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result_inmuebles)) { ?>
                            <tr>
                                <td><?php echo $row['nombre_material'] ?></td>
                                <td><?php echo $row['nombre_material'] ?></td>

                                <td class="text-center">
                                    <a href="view_fitch.php?id=<?php echo $row['id_inmueble']?>" class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="edit_fitch.php?id=<?php echo $row['id']?>" class="btn btn-success">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="inmueb/delete_inmueb.php?id=<?php echo $row['id_inmueble']?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</div>