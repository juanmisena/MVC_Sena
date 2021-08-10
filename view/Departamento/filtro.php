<?php 
        while($dep=mysqli_fetch_assoc($departamentos)){
            echo "<tr>";
                echo "<td>".$dep['dep_id']."</td>";
                echo "<td>".$dep['dep_nombre']."</td>";
                echo "<td><a href='".getUrl("Departamento","Departamento","getUpdate",array("dep_id"=>$dep["dep_id"]))."'<button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td><a href='".getUrl("Departamento","Departamento","getDelete",array("dep_id"=>$dep["dep_id"]))."'<button class='btn btn-danger'>Eliminar</button></a></td>";
            echo "</tr>";
        }
    ?>