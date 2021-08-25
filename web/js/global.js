$(document).ready(function(){
    $(document).on("keyup","#filtro",function(){
        var buscar=$(this).val();
        var url=$(this).attr('data-url');
        $.ajax({
            url:url,
            data:"buscar="+buscar,
            type:"POST",
            success:function(datos){
                $("tbody").html(datos);
            }
        });
    });
    $(document).on("click","#cambioImagen",function(){
        var ruta_imagen_vieja=$("#imagen").attr('src');
        $("#contenedorImagen").html("<input type='file' name='ciu_imagen'>");
        $("#contenedorImagen").append("<input type='hidden' name='ruta_imagen_vieja' value='"+ruta_imagen_vieja+"'>");
    });
});