$(document).ready(function() {

    $('select[name="categoria"]').on('change', function(){
        var categoriaId = $(this).val();
        if(categoriaId) {
            $.ajax({
                url: '/categorias/get/'+categoriaId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="subcategoria"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="subcategoria"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="subcategoria"]').empty();
        }

    });

});