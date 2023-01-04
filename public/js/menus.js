$(document).on('click','.active_menu', function (){
    var id = $(this).attr('name');
    $.ajax({
        type: "POST",
        url: "menu_active",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#status').html('<button name="'+id+'" class="btn btn-warning deactive_menu"><i class="fa fa-ban"></i></button>');
                toastr.success('Menyu aktiv edildi');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});

$(document).on('click','.deactive_menu', function (){
    var id = $(this).attr('name');
    $.ajax({
        type: "POST",
        url: "menu_deactive",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#status').html('<button name="'+id+'" class="btn btn-success active_menu"><i class="fa fa-check"></i></button>');
                toastr.success('Menyu deaktiv edildi');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
