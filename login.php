<?php include "./header.php";?>

            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?=$_GET['error']?>
                </div>
            <?php }?>
    <form action="procesos/login.php" method="post">
        <label for="email">Correo</label>
        <input type="text" id="email" name="email">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password">
        <button type="submit">LOGIN</button>
    </form>
    <a href="register.php"><button>Registrate</button></a>
    

<?php include "./scripts.php";?>