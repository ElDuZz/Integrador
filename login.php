
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
              <img src="img/user.png" alt="">
            </div>
            <input type="email" placeholder="Email" required="true" >
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/lock.png" alt="">
            </div>
            <input type="password" name="password" placeholder="Contraseña" required="true">
          </div>
          <!-- <div class="pass"><a href="#">Olvidaste la contraseña?</a></div> -->
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">¿No eres usuario? <a href="sign.php">Registrate</a></div>
        </form>
      </div>
    </div>

    
  </body>
</html>
