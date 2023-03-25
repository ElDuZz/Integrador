<?php session_start();
include "./header.php";
if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
    ?>
<div class="container">
    <h2>Kiubo <?=$_SESSION['username']?></h2>
    <a href="procesos/logout.php"><button>logout</button></a>
</div>

<?php   } else { ?>
<div class="container">
    <p>Parece que no esta logeado</p>
    <a href="login.php"><button>LOGIN</button></a>
</div>
<?php } ?>
<?php  include "./scripts.php"; ?>