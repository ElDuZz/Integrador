
  <body class="login">
    
    <!-- Navbar Start -->
    <?php
    include 'navbar.php';
    ?>
    <!-- Navbar End -->
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login</span></div>
        <form action="procesos/login.php" method="post">
          <div class="row">
            <div class="login-img">
              <img src="img/cuenta.png" alt="">
            </div>
            <input type="email" name="mail" id="mail" placeholder="Email" required="true" >
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/bloquear.png" alt="">
            </div>
            <input type="password" name="password" id="password" placeholder="Contraseña" required="true">
          </div>
          <!-- <div class="pass"><a href="#">Olvidaste la contraseña?</a></div> -->
          <?php if (isset($_GET['error'])) { ?>
                <div class="alert  text-center text-danger" style="border-radius: 30px;" role="alert">
                    <?=$_GET['error']?>
                </div>
            <?php }?>
          <div class="row button" style="margin-top: 10px;">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">¿No eres usuario? <a href="sign.php">Registrate</a></div>
        </form>
      </div>
    </div>

    
  </body>
</html>
