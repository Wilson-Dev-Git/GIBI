<div class="container p-4">
    <?php if(isset($_SESSION['message'])){ ?>
        <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php session_unset(); } ?>

    <section class="content">
        <div class="container-fluid">
            <!-- card -->
            <div class="card card-primary">
                <!-- card-header -->
                <div class="card-header">
                    <h3 class="card-title">Registro de Bien Inmueble</h3>
                </div>

                <!-- form -->
                <form>
                    <!-- card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Código de Bienes Inmuebles:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="4H4-07-000">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Denominación del Bien Inmueble:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Uso Original: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Uso Original">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Uso Actual: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Uso Actual">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Calle(s): </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Calle 1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Número de Casa: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="00-00">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Régimen de propiedad: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Propietario">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre del propietario: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Person Natural o Juridica">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fecha de construcción: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="1999-02-28">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tipología: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="estilo de la edificación">
                        </div>
                    </div>
                    
                    <div class="card-footer">
                        <input type="submit" class="btn btn-success btn-block" name="Save" value="Guardar">
                    </div>
                </form>
                <!-- /.card -->
            </div>
        </div>
    </section>

    <!--
    <div class="card card-body">
        
        <form action="save_task.php" method="POST">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
            </div>
            <div class="form-group">
                <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
            </div>
            <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
        </form>
    </div>
    -->
</div>