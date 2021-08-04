<div class="bg-light p-5 rounded-lg m-3 mt-3">
    <h3>Registrar Ciudad</h3>
</div>
<form action="<?php echo getUrl("Ciudad","Ciudad","postInsert")?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-md-4">
            <label for="">Ciudad</label>
            <input type="text" name="ciu_nombre" id="" class="form-control" placeholder="Nombre Ciudad">
        </div>
        <div class="form-group col-md-4">
            <label for="">Departamento</label>
            <select name="dep_id" id="" class="form-control">
                <option value="">Seleccione...</option>
                <?php
                    while($dep=mysqli_fetch_assoc($ciudades)){
                        echo "<option value='".$dep['dep_id']."'>".$dep['dep_nombre']."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="">Imagen</label>
            <input type="file" name="ciu_imagen" id="">
        </div>
    </div>
    <div class="mt-4 row">
        <div class="form-group col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    </div>
</form>