<?php 
    include_once '../model/Ciudad/CiudadModel.php';
    class CiudadController{
        public function getInsert(){
            $obj=new CiudadModel();
            $sql="SELECT * FROM departamento";
            $ciudades=$obj->consult($sql);
            include_once '../view/Ciudad/insert.php';
        }
        public function postInsert(){
            $obj=new CiudadModel();
            $dep_id=$_POST['dep_id'];
            $ciu_nombre=$_POST['ciu_nombre'];
            $ciu_id=$obj->autoincrement("Ciudad","ciu_id");
            $ciu_imagen=$_FILES['ciu_imagen']['name'];
            $ruta="img/$ciu_imagen";
            move_uploaded_file($_FILES['ciu_imagen']['tmp_name'],$ruta);
            $sql="INSERT INTO ciudad VALUES($ciu_id,'$ciu_nombre',$dep_id,'$ruta')";
            $ejecutar=$obj->insert($sql);
            if($ejecutar){
                redirect(getUrl("Ciudad","Ciudad","getInsert"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
        }
        public function consult(){
            $obj=new CiudadModel();
            $sql="SELECT ciudad.ciu_id, ciudad.ciu_nombre, departamento.dep_nombre, ciudad.ciu_imagen FROM ciudad, departamento WHERE ciudad.dep_id=departamento.dep_id";
            $ciudades=$obj->consult($sql);
            include_once '../view/Ciudad/consult.php';
        }
        public function getUpdate(){
            $obj=new CiudadModel();
            $ciu_id=$_GET['ciu_id'];
            $sql="SELECT * FROM ciudad WHERE ciu_id=$ciu_id";
            $ciudad=$obj->consult($sql);
            $sql="SELECT * FROM departamento";
            $departamentos=$obj->consult($sql);
            include_once '../view/Ciudad/update.php';
        }
        public function postUpdate(){
            $obj=new CiudadModel();
            $ciu_id=$_POST["ciu_id"];
            $ciu_nombre=$_POST["ciu_nombre"];
            $dep_id=$_POST['dep_id'];
            $sql="UPDATE ciudad SET ciu_nombre='$ciu_nombre', dep_id=$dep_id WHERE ciu_id=$ciu_id";
            $ejecutar=$obj->update($sql);
            if ($ejecutar) {
                redirect(getUrl("Ciudad","Ciudad","consult"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
        }
        public function getDelete(){
            $obj=new CiudadModel();
            $ciu_id=$_GET['ciu_id'];
            $sql="SELECT * FROM ciudad WHERE ciu_id=$ciu_id";
            $ciudad=$obj->consult($sql);
            include_once '../view/Ciudad/delete.php';
        }
        public function postDelete(){
            $obj=new CiudadModel();
            $ciu_id=$_POST["ciu_id"];
            $ciu_nombre=$_POST["ciu_nombre"];
            $sql="DELETE FROM ciudad WHERE ciu_id=$ciu_id";
            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                redirect(getUrl("Ciudad","Ciudad","consult"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
        }
    }
?>