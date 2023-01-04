function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}

$('.add_apply').on('click', function(){
    var formData = new FormData($('#add_apply')[0]);
    $.ajax({
        type: "POST",
        url: "add_apply",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Müraciətiniz göndərildi');
                $('input[name=name]').val('');
                $('input[name=surname]').val('');
                $('input[name=email]').val('');
                $('input[name=phone]').val('');
                $('input[name=cv]').val('');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_applies', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_apply').attr('name',id);
});

$('.delete_apply').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_apply",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Müraciət silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
