function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}

$('.add_contact').on('click', function(){
    var formData = new FormData($('#add_contact')[0]);
    $.ajax({
        type: "POST",
        url: "add_contact",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Müraciətiniz göndərildi');
                $('input[name=name_surname]').val('');
                $('input[name=email]').val('');
                $('textarea[name=message]').val('');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_contacts', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_contact').attr('name',id);
});

$('.delete_contact').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_contact",
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
