function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}
$('.add_sup_category').on('click', function(){
    var sup_category = $('input[name=sup_category]').val().trim();
    $.ajax({
        type: "POST",
        url: "add_sup_category",
        data: {
            'sup_category':sup_category, "_token": csrf_token
        },
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Kateqoriya Əlavə olundu');
                $('.table_body').append('' +
                    '<tr id="'+response.id+'">\n' +
                    '    <td></td>\n' +
                    '    <td>\n' +
                    '        '+sup_category+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <button name="'+response.id+'" class="btn btn-info edit_sup_category" data-toggle="modal" data-target="#edit_sup_categories"><i class="fa fa-pencil-alt"></i></button>\n' +
                    '        <button name="'+response.id+'" class="btn btn-danger delete_sup_categories" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>\n' +
                    '    </td>\n' +
                    '</tr>');
                $('input[name=sup_category]').val('');
                $('#sup_category').modal('hide');
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.edit_sup_category', function(){
    var id = $(this).attr('name');
    $('#edit_sup_categories').attr('name',id);
    var sup_category = $('#'+id+'').find('td:eq(1)').text().trim();
    $('#edit_sup_categories').find('input[name=new_sup_category]').val(sup_category);
});
$('.edit_sup_categories').on('click', function (){
    var id = $(this).parents('#edit_sup_categories').attr('name');
    var new_sup_category = $('input[name=new_sup_category]').val().trim();
    $.ajax({
        type: "POST",
        url: "edit_sup_category",
        data: {
            'id':id, 'sup_category':new_sup_category, "_token": csrf_token
        },
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Hesabat yeniləndi');
                $('#'+id+'').find('td:eq(1)').text(''+new_sup_category+'');
                $('input[name=new_sup_category]').val('');
                $('#edit_sup_categories').modal('hide');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_sup_categories', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_sup_category').attr('name',id);
});

$('.delete_sup_category').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_sup_category",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Kateqoriya silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
