function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}

$(document).ready(function (){
    $('#edit_partner select').each(function (){
        $(this).find('option').each(function (){
            if ($(this).parents('select').attr('id') == $(this).val()){
                $(this).parents('select').val($(this).val());
            }
        })
    });
})

$('.add_partner').on('click', function(){
    var formData = new FormData($('.partner_add')[0]);
    $.ajax({
        type: "POST",
        url: "/add_partner",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Partnyorluq müraciətiniz göndərildi');
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

$('.edit_partner').on('click', function (){
    var id = $(this).attr('name');
    var formData = new FormData($('#edit_partner')[0]);
    var mycontent = tinymce.get("myTextarea").getContent();
    formData.append('id', id);
    formData.append('mycontent', mycontent);
    $.ajax({
        type: "POST",
        url: "/edit_partner",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Partnyor yeniləndi');
                if (response.image != 1){
                    $('#partner_image').attr('src', '../images/'+response.image);
                }
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});


$(document).on('click','.active_partner', function (){
    var id = $(this).attr('name');
    var tr = $(this).parents('tr');
    $.ajax({
        type: "POST",
        url: "/partner_active",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                tr.find('#status').html('<button name="'+id+'" class="btn btn-warning deactive_partner"><i class="fa fa-ban"></i></button>');
                toastr.success('Partnyor aktiv edildi');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});

$(document).on('click','.deactive_partner', function (){
    var id = $(this).attr('name');
    var tr = $(this).parents('tr');
    $.ajax({
        type: "POST",
        url: "/partner_deactive",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                tr.find('#status').html('<button name="'+id+'" class="btn btn-success active_partner"><i class="fa fa-check"></i></button>');
                toastr.success('Partnyor deaktive edildi');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});

$(document).on('click','.delete_partners', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_partner').attr('name',id);
});

$('.delete_partner').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "/delete_partner",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Partnyor silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
