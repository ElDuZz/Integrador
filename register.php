<?php include "./header.php";?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-arrow-left"></i> Regresar
                    </a>
                    <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$_GET['error']?>
                    </div>
                    <?php }else if(isset($_GET['registered'])){?>
                        <div class="alert alert-primary" role="alert">
                        <?=$_GET['registered']?>
                    </div>
                    <?php } ?>
                    <h2>AGREGAR USUARIO</h2>
                    <form action="procesos/register.php" method="post">
                        <label for="username">Nombre de usuario</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        <label for="mail">Correo electronico</label>
                        <input type="email" class="form-control" id="mail" name="mail" required>
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <label for="passwordConfirm">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" required>
                        <button class="btn btn-primary mt-3">
                            <i class="fa-solid fa-floppy-disk"></i> Agregar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php";?>