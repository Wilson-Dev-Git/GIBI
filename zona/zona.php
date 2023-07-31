<?php include("db.php") ?>

<div class="card card-secondary">
    <div class="card-header">
                    
        <h1 class="card-title">
            <i class="ion ion-clipboard"></i>
                Zonas Registradas
        </h1>

        <button type="button" class="btn btn-light float-right" id="btnAgregarinmueb" data-bs-toggle="modal" data-bs-target="#agregarinmuebModal">
            <i class="fas fa-plus"></i> Agregar Zona
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
    <!-- /.card-header -->
    
    <div class="card-body">
        <table  class="table table-striped projects">
            <thead>
                <tr>
                    <th>Provincia</th>
                    <th>Cantón</th>
                    <th>Parroquia</th>
                    <th>Manzana</th>
                    <th>Estado</th>
                    <th class="text-center">ver</th>
                    <th class="text-center">modificar</th>
                    <th class="text-center">eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM zona";
                    $result_tasks = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result_tasks)) { ?>
                        <tr>
                            <td><?php echo $row['provincia'] ?></td>
                            <td><?php echo $row['canton'] ?></td>
                            <td><?php echo $row['parroquia'] ?></td>
                            <td><?php echo $row['manzana'] ?></td>
                            <td><?php echo $row['manzana'] ?></td>

                            <td class="text-center">
                                <a href="view_fitch.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="edit_fitch.php?id=<?php echo $row['id']?>" class="btn btn-success">
                                    <i class="fas fa-marker"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="delete_fich.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>

                    <?php } ?>
            </tbody>
        </table>
    </div>
</div>

