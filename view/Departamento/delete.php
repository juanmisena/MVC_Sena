<div class="bg-light p-5 rounded-lg m-3 mt-3">
    <h3>Eliminar Departamento</h3>
</div>
<?php 
    while($dep=mysqli_fetch_assoc($departamento)){
?>
<form action="<?php echo getUrl("Departamento","Departamento","postDelete");?>" method="post">
    <div class="row">
        <div class="col-md-4">
            <label for="">Departamento</label>
            <input type="hidden" name="dep_id" value="<?php echo $dep['dep_id']; ?>">
            <input type="text" name="dep_nombre" readonly value="<?php echo $dep['dep_nombre']; ?>" class="form-control">
        </div>
    </div>
    <div class="row mt-4">
        <p>¿Estas Seguro De Eliminar El Departamento?</p>
        <div class="col-md-4">
            <input type="submit" value="Confirmar" class="btn btn-danger">
            <a href="<?php echo getUrl("Departamento","Departamento","consult") ?>"><button type="button" class="btn btn-primary">Cancelar</button></a>
        </div>
    </div>
</form>
<?php
} 
?>