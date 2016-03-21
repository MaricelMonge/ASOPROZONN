
$(document).ready(function(){
    $('.addtocart').on('click', function(event) {
        $.ajax({
            type: "POST",
            url: basePath + "facturas/add",
            data: {
                id: $(this).attr("id"),
                cantidad: 1
            },
            dataType: "html",
            success: function(data) {
                $('#msg').html('<div class="alert alert-success flash-msg">Producto agregado a factura.</div>');
                $('.flash-msg').delay(2000).fadeOut('slow');
            },
            error: function(){
                alert('No se agrego el producto');
            }
        });
        return false;
    });
});