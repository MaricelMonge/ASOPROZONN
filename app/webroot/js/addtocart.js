$(document).ready(function(){
    $('.addtocart').on('click', function(event) {
        $.ajax({
            type: "POST",
            
            url: basePath + "pedidos/add",
            data: {
                id: $(this).attr("id"),
                cantidad: 1
            },
            dataType: "html",
            success: function(data) {
                $('#msg').html('<div class="alert alert-success flash-msg">Producto agregado.</div>');
                $('.flash-msg').delay(2000).fadeOut('slow');
            },
            error: function(){
                alert('No se pudo agregar el producto');
            }
        });
        return false;
    });
});