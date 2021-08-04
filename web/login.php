<?php 
    include_once '../lib/helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="mt-5">
            <div class="col-md-4 m-auto">
                <form action="<?php echo getUrl("Acceso","Acceso","login");?>" method="post">
                    <h3>Inicio de Sesion</h3>
                    <div class="mt-4 form-group">
                        <label for="">Nombre de Usuario o Correo</label>
                        <input type="text" name="user" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" name="clave" id="" class="form-control">
                    </div>
                    <div class="mt-3">
                        <input type="submit" value="Ingresar" class="btn btn-success btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>