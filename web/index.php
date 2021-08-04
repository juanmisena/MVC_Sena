<?php
    include_once '../lib/helpers.php';
    include_once '../view/partials/head.php';
    echo "<body>";
        echo "<div class='container'>";
        require_once '../view/partials/navbar.php';
    if (isset($_GET['modulo'])) {
        resolve();
    }else{
        echo "Hola ".$_SESSION['nombre']." ".$_SESSION['apellido'];
        //echo "<a href='".getUrl("Ciudad","Ciudad","prueba")."'><button class='btn btn-success'>Boton</a>";
    }
        echo "</div>";
    include_once '../view/partials/footer.php';
    echo "</body>";
    echo "</html>";
?>
