<div class="bg-light p-5 rounded-lg m-3 mt-3">
    <h3>Editar Ciudad</h3>
</div>
<?php
    while($ciu=mysqli_fetch_assoc($ciudad)){
?>
<form action="<?php echo getUrl("Ciudad","Ciudad","postUpdate");?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-4">
            <label for="">Ciudad</label>
            <input type="hidden" name="ciu_id" value="<?php echo $ciu['ciu_id']; ?>">
            <input type="text" name="ciu_nombre" value="<?php echo $ciu['ciu_nombre']; ?>" class="form-control">
        </div>
        <div class="col-md-4">
            <label for="">Departamento</label>
            <select name="dep_id" id="" class="form-control">
                <?php
                    while($dep=mysqli_fetch_assoc($departamentos)){
                        if ($dep['dep_id']==$ciu['dep_id']) {
                            echo "<option value='".$dep['dep_id']."' selected>".$dep['dep_nombre']."</option>";
                        }else{
                            echo "<option value='".$dep['dep_id']."'>".$dep['dep_nombre']."</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="col-md-4">
            <label>Imagen</label>
            <div id="contenedorImagen">
                <img class="d-block" id="imagen" src="<?php echo $ciu['ciu_imagen'];?>" width="100px">
                <button class="btn btn-primary" id="cambioImagen">Cambiar Imagen</button>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <input type="submit" value="Editar" class="btn btn-success">
            </div>
    </div>
</form>
<?php
} 
?>