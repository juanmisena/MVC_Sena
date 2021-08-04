<div class="bg-light p-5 rounded-lg m-3 mt-3">
    <h3>Registrar Departamento</h3>
</div>
<form action="<?php echo getUrl("Departamento","Departamento","postInsert");?>" method="post">
    <div class="row">
        <div class="col-md-4">
            <label for="">Departamento</label>
            <input type="text" name="dep_nombre" class="form-control">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    </div>
</form>