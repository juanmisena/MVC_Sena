<div class="mt-5 col-md-3 row">
    <input type="text" name="filtro" id="filtro" data-url="<?php echo getUrl("Departamento","Departamento","filtro",false,"ajax");?>" class="form-control" placeholder="Buscar...">
</div>
<table class="mt-3 table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Departamento</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
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
    </tbody>
</table>