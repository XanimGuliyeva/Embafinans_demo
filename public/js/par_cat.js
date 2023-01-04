function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}
$('.add_par_category').on('click', function(){
    var par_category = $('input[name=par_category]').val().trim();
    $.ajax({
        type: "POST",
        url: "add_par_category",
        data: {
            'par_category':par_category, "_token": csrf_token
        },
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Kateqoriya Əlavə olundu');
                $('.table_body').append('' +
                    '<tr id="'+response.id+'">\n' +
                    '    <td></td>\n' +
                    '    <td>\n' +
                    '        '+par_category+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <button name="'+response.id+'" class="btn btn-info edit_par_category" data-toggle="modal" data-target="#edit_par_categories"><i class="fa fa-pencil-alt"></i></button>\n' +
                    '        <button name="'+response.id+'" class="btn btn-danger delete_par_categories" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>\n' +
                    '    </td>\n' +
                    '</tr>');
                $('input[name=par_category]').val('');
                $('#par_category').modal('hide');
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.edit_par_category', function(){
    var id = $(this).attr('name');
    $('#edit_par_categories').attr('name',id);
    var par_category = $('#'+id+'').find('td:eq(1)').text().trim();
    $('#edit_par_categories').find('input[name=new_par_category]').val(par_category);
});
$('.edit_par_categories').on('click', function (){
    var id = $(this).parents('#edit_par_categories').attr('name');
    var new_par_category = $('input[name=new_par_category]').val().trim();
    $.ajax({
        type: "POST",
        url: "edit_par_category",
        data: {
            'id':id, 'category':new_par_category, "_token": csrf_token
        },
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Hesabat yeniləndi');
                $('#'+id+'').find('td:eq(1)').text(''+new_par_category+'');
                $('input[name=new_par_category]').val('');
                $('#edit_par_categories').modal('hide');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_par_categories', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_par_category').attr('name',id);
});

$('.delete_par_category').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_par_category",
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
