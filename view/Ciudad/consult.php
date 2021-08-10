<div class="mt-5 col-md-3 row">
    <input type="text" name="filtro" id="filtro" data-url="<?php echo getUrl("Ciudad","Ciudad","filtro",false,"ajax");?>" class="form-control" placeholder="Buscar...">
</div>
<table class="mt-3 table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th>Departamento</th>
            <th>Imagen</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while($ciu=mysqli_fetch_assoc($ciudades)){
                echo "<tr>";
                    echo "<td>".$ciu['ciu_id']."</td>";
                    echo "<td>".$ciu['ciu_nombre']."</td>";
                    echo "<td>".$ciu['dep_nombre']."</td>";
                    echo "<td><img src='".$ciu['ciu_imagen']."' width='100px'></td>";
                    echo "<td><a href='".getUrl("Ciudad","Ciudad","getUpdate",array("ciu_id"=>$ciu["ciu_id"]))."'<button class='btn btn-primary'>Editar</button></a></td>";
                    echo "<td><a href='".getUrl("Ciudad","Ciudad","getDelete",array("ciu_id"=>$ciu["ciu_id"]))."'<button class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>