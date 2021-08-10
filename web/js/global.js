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
});