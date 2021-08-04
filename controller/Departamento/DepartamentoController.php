<?php
    include_once '../model/Departamento/DepartamentoModel.php';
    class DepartamentoController{
        public function getInsert(){
            include_once '../view/Departamento/insert.php';
        }
        public function postInsert(){
            $obj=new DepartamentoModel();
            $dep_nombre=$_POST['dep_nombre'];
            $dep_id=$obj->autoincrement("departamento","dep_id");
            $sql="INSERT INTO departamento VALUES($dep_id,'$dep_nombre')";
            $ejecutar=$obj->insert($sql);
            if ($ejecutar) {
                redirect(getUrl("Departamento","Departamento","getInsert"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
        }
        public function consult(){
            $obj=new DepartamentoModel();
            $sql="SELECT * FROM departamento";
            $departamentos=$obj->consult($sql);
            include_once '../view/Departamento/consult.php';
        }
        public function getUpdate(){
            $obj=new DepartamentoModel();
            $dep_id=$_GET['dep_id'];
            $sql="SELECT * FROM departamento WHERE dep_id=$dep_id";
            $departamento=$obj->consult($sql);
            include_once '../view/Departamento/update.php';
        }
        public function postUpdate(){
            $obj=new DepartamentoModel();
            $dep_id=$_POST['dep_id'];
            $dep_nombre=$_POST['dep_nombre'];
            //alter table y update
            $sql="UPDATE departamento SET dep_nombre='$dep_nombre' WHERE dep_id=$dep_id";
            $ejecutar=$obj->update($sql);
            if ($ejecutar) {
                redirect(getUrl("Departamento","Departamento","consult"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
        }
        public function getDelete(){
            $obj=new DepartamentoModel();
            $dep_id=$_GET['dep_id'];
            $sql="SELECT * FROM departamento WHERE dep_id=$dep_id";
            $departamento=$obj->consult($sql);
            include_once '../view/Departamento/delete.php';
        }
        public function postDelete(){
            $obj=new DepartamentoModel();
            $dep_id=$_POST['dep_id'];
            $sql="DELETE FROM departamento WHERE dep_id=$dep_id";
            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                redirect(getUrl("Ciudad","Ciudad","consult"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
        }
    }
?>