<?php
    include_once '../lib/helpers.php';
    include_once '../view/partials/head.php';
    if (isset($_SESSION['auth'])) {
        if ($_SESSION['auth']!="ok") {
            redirect("login.php");
        }
    }
    echo "<body>";
        echo "<div class='container'>";
        require_once '../view/partials/navbar.php';
    if (isset($_GET['modulo'])) {
        resolve();
    }else{
        //echo "Hola ".$_SESSION['nombre']." ".$_SESSION['apellido'];
    }
   /*  if (isset($_POST['btncerrar'])) {
        session_destroy();
        redirect("login.php");
    } */
?>
<!-- <link rel="stylesheet" href="bootstrap.css">
<div class="col-md-4 mt-3">
    <form action="" method="post">
        <input type="submit" value="Cerrar Sesion" name="btncerrar" class="btn btn-danger">
    </form>
</div> -->
<?php
    include_once '../view/partials/footer.php';
    echo "</body>";
    echo "</html>";
?>