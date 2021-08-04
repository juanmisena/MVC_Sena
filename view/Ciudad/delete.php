<div class="bg-light p-5 rounded-lg m-3 mt-3">
    <h3>Eliminar Ciudad</h3>
</div>
<?php 
    while($ciu=mysqli_fetch_assoc($ciudad)){
?>
<form action="<?php echo getUrl("Ciudad","Ciudad","postDelete");?>" method="post">
    <div class="row">
        <div class="col-md-4">
            <label for="">Ciudad</label>
            <input type="hidden" name="ciu_id" value="<?php echo $ciu['ciu_id']; ?>">
            <input type="text" name="ciu_nombre" readonly value="<?php echo $ciu['ciu_nombre']; ?>" class="form-control">
        </div>
    </div>
    <div class="row mt-4">
        <p>¿Estas Seguro De Eliminar La Ciudad?</p>
        <div class="col-md-4">
            <input type="submit" value="Confirmar" class="btn btn-danger">
            <a href="<?php echo getUrl("Ciudad","Ciudad","consult") ?>"><button type="button" class="btn btn-primary">Cancelar</button></a>
        </div>
    </div>
</form>
<?php
} 
?>