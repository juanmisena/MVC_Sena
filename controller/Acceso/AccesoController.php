<?php
    include_once '../model/Acceso/AccesoModel.php';
    class AccesoController{
        public function login(){
            $obj=new AccesoModel();
            $user=$_POST['user'];
            $clave=$_POST['clave'];
            $sql="SELECT usu_nombre, usu_apellido, usu_id FROM usuario WHERE usu_clave='$clave' AND (usu_correo='$user' OR usu_nickname='$user')";
            $usuario=$obj->consult($sql);
            if(mysqli_num_rows($usuario)>0){
                while($usu=mysqli_fetch_assoc($usuario)){
                    $_SESSION['nombre']=$usu['usu_nombre'];
                    $_SESSION['apellido']=$usu['usu_apellido'];
                    $_SESSION['id']=$usu['usu_id'];
                }
                redirect("index.php");
            }else{
                redirect("login.php");
            }
        }
        public function logout(){
            session_destroy();
            redirect("login.php");
        }
    }
?>