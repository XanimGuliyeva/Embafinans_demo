function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}
$('.add_main_category').on('click', function(){
    var formData = new FormData($('#add_category')[0]);
    var category = $('input[name=category]').val().trim();
    var about = $('textarea[name=about]').val().trim();
    var percent = $('input[name=percent]').val().trim();
    $.ajax({
        type: "POST",
        url: "add_main_category",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Kateqoriya Əlavə olundu');
                $('.table_body').append('' +
                    '<tr id="'+response.id+'">\n' +
                    '    <td></td>\n' +
                    '    <td>\n' +
                    '        '+category+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        '+about+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        '+percent+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <button name="'+response.id+'" class="btn btn-info edit_main_category" data-toggle="modal" data-target="#edit_categories"><i class="fa fa-pencil-alt"></i></button>\n' +
                    '        <button name="'+response.id+'" class="btn btn-danger delete_main_categories" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>\n' +
                    '    </td>\n' +
                    '</tr>');
                $('input[name=percent]').val('');
                $('input[name=category]').val('');
                $('textarea[name=about]').val('');
                $('#category').modal('hide');
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.edit_main_category', function(){
    var id = $(this).attr('name');
    $('#edit_categories').attr('name',id);
    var category = $('#'+id+'').find('td:eq(1)').text().trim();
    var about = $('#'+id+'').find('td:eq(2)').text().trim();
    var percent = $('#'+id+'').find('td:eq(3)').text().trim();
    $('#edit_categories').find('input[name=new_category]').val(category);
    $('#edit_categories').find('textarea[name=new_about]').val(about);
    $('#edit_categories').find('input[name=new_percent]').val(percent);
});
$('.edit_main_categories').on('click', function (){
    var id = $(this).parents('#edit_categories').attr('name');
    var new_formData = new FormData($('#edit_category')[0]);
    new_formData.append('id', id);
    var new_category = $('input[name=new_category]').val().trim();
    var new_about = $('textarea[name=new_about]').val().trim();
    var new_percent = $('input[name=new_percent]').val().trim();
    $.ajax({
        type: "POST",
        url: "edit_main_category",
        data: new_formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Kateqoriya yeniləndi');
                $('#'+id+'').find('td:eq(1)').text(''+new_category+'');
                $('#'+id+'').find('td:eq(2)').text(''+new_about+'');
                $('#'+id+'').find('td:eq(3)').text(''+new_percent+'');
                $('input[name=new_category]').val('');
                $('textarea[name=new_about]').val('');
                $('input[name=new_percent]').val('');
                $('#edit_categories').modal('hide');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_main_categories', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_main_category').attr('name',id);
});

$('.delete_main_category').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_main_category",
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
