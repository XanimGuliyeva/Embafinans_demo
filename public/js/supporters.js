function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}

$(document).ready(function (){
    $('#edit_supporter select').each(function (){
        $(this).find('option').each(function (){
            if ($(this).parents('select').attr('id') == $(this).val()){
                $(this).parents('select').val($(this).val());
            }
        })
    });
})

$('.add_supporter').on('click', function(){
    var formData = new FormData($('.supporter_add')[0]);
    $.ajax({
        type: "POST",
        url: "/add_supporter",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Tərəfdaşlıq müraciətiniz göndərildi');
                $('input[name=name]').val('');
                $('select[name=city]').val('cty');
                $('input[name=address]').val('');
                $('select[name=category]').val('ctg');
                $('input[name=phone]').val('');
                $('textarea[name=about]').val('');
                $('input[name=contact_person]').val('');
                $('input[name=email]').val('');
                $('input[name=website]').val('');
                $('input[name=director]').val('');
                $('input[name=contact_phone]').val('');
                $('input[name=image]').val('');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$('.edit_supporter').on('click', function (){
    var id = $(this).attr('name');
    var formData = new FormData($('#edit_supporter')[0]);
    var mycontent = tinymce.get("myTextarea").getContent();
    formData.append('id', id);
    formData.append('mycontent', mycontent);
    $.ajax({
        type: "POST",
        url: "/edit_supporter",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Tərəfdaş yeniləndi');
                if (response.image != 1){
                    $('#supporter_image').attr('src', '../images/'+response.image);
                }
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.active_supporter', function (){
    var id = $(this).attr('name');
    var tr = $(this).parents('tr');
    $.ajax({
        type: "POST",
        url: "supporter_active",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                tr.find('#status').html('<button name="'+id+'" class="btn btn-warning deactive_supporter"><i class="fa fa-ban"></i></button>');
                toastr.success('Tərəfdaş aktiv edildi');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});

$(document).on('click','.deactive_supporter', function (){
    var id = $(this).attr('name');
    var tr = $(this).parents('tr');
    $.ajax({
        type: "POST",
        url: "supporter_deactive",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                tr.find('#status').html('<button name="'+id+'" class="btn btn-success active_supporter"><i class="fa fa-check"></i></button>');
                toastr.success('Tərəfdaş deaktive edildi');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});

$(document).on('click','.delete_supporters', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_supporter').attr('name',id);
});

$('.delete_supporter').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_supporter",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Tərəfdaş silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
