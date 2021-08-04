<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <?php    
        include_once '../lib/conf/conexion.php';
        class MasterModel extends Connexion{
            public function insert($sql){
                $respuesta=mysqli_query($this->getConnect(), $sql);
                if(!$respuesta){
                    echo mysqli_error($this->getConnect());
                }
                return $respuesta;
            }
            public function consult($sql){
                $respuesta=mysqli_query($this->getConnect(), $sql);
                return $respuesta;
            }
            public function update($sql){
                $respuesta=mysqli_query($this->getConnect(), $sql);
                return $respuesta;
            }
            public function delete($sql){
                $respuesta=mysqli_query($this->getConnect(), $sql);
                return $respuesta;
            }
            public function autoincrement($table,$field){
                $sql="SELECT MAX($field) FROM $table";
                $respuesta=$this->consult($sql);
                $id=mysqli_fetch_row($respuesta);
                return $id[0]+1;
            }
        }
    ?>
</body>
</html>