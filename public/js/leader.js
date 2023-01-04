function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}
$('.add_leader').on('click', function(){
    var formData = new FormData($('#add_leader')[0]);
    var full_name = $('input[name=full_name]').val().trim();
    var position = $('input[name=position]').val().trim();
    var email_link = $('input[name=email_link]').val().trim();
    var linkedin_link = $('input[name=linkedin_link]').val().trim();
    var category = $('select[name=category]').val().trim();
    $.ajax({
        type: "POST",
        url: "add_leader",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Rəhbər Əlavə olundu');
                $('.table_body').append('' +
                    '<tr id="'+response.id+'">\n' +
                    '    <td></td>\n' +
                    '    <td>\n' +
                    '        '+full_name+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        '+position+'\n' +
                    '    </td>\n' +
                        '<td style="display: none">\n' +
                        '    '+email_link+'\n' +
                        '</td>\n' +
                        '<td style="display: none">\n' +
                        '    '+linkedin_link+'\n' +
                        '</td>\n' +
                        '<td style="display: none">\n' +
                        '    '+category+'\n' +
                        '</td>\n' +
                    '    <td>\n' +
                    '        <img src="../profile_pics/'+response.profile+'" style="width: 125px;height: 125px;">\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <button name="'+response.id+'" class="btn btn-info edit_leader" data-toggle="modal" data-target="#edit_leaders"><i class="fa fa-pencil-alt"></i></button>\n' +
                    '        <button name="'+response.id+'" class="btn btn-danger delete_leaders" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>\n' +
                    '    </td>\n' +
                    '</tr>');
                $('input[name=full_name]').val('');
                $('input[name=position]').val('');
                $('input[name=email_link]').val('');
                $('input[name=linkedin_link]').val('');
                $('input[name=profile]').val('');
                $('select[name=category]').val('catg');
                $('#leader').modal('hide');
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.edit_leader', function(){
    var id = $(this).attr('name');
    $('#edit_leaders').attr('name',id);
    var full_name = $('#'+id+'').find('td:eq(1)').text().trim();
    var position = $('#'+id+'').find('td:eq(2)').text().trim();
    var email_link = $('#'+id+'').find('td:eq(3)').text().trim();
    var linkedin_link = $('#'+id+'').find('td:eq(4)').text().trim();
    var category = $('#'+id+'').find('td:eq(5)').text().trim();
    $('#edit_leaders').find('input[name=new_full_name]').val(full_name);
    $('#edit_leaders').find('input[name=new_position]').val(position);
    $('#edit_leaders').find('input[name=new_email_link]').val(email_link);
    $('#edit_leaders').find('input[name=new_linkedin_link]').val(linkedin_link);
    $('#edit_leaders').find('select[name=new_category] option').each(function (){
        if ($(this).val() == category){
            $(this).prop('selected', true);
        }
    });
});

$('.edit_leaders').on('click', function (){
    var id = $(this).parents('#edit_leaders').attr('name');
    var new_formData = new FormData($('#edit_leader')[0]);
    new_formData.append('id', id);
    var new_full_name = $('input[name=new_full_name]').val().trim();
    var new_position = $('input[name=new_position]').val().trim();
    var new_email_link = $('input[name=new_email_link]').val().trim();
    var new_linkedin_link = $('input[name=new_linkedin_link]').val().trim();
    var new_category = $('select[name=new_category]').val().trim();
    $.ajax({
        type: "POST",
        url: "edit_leader",
        data: new_formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Rəhbər məlumatları yeniləndi');
                $('#'+id+'').find('td:eq(1)').text(''+new_full_name+'');
                $('#'+id+'').find('td:eq(2)').text(''+new_position+'');
                $('#'+id+'').find('td:eq(3)').text(''+new_email_link+'');
                $('#'+id+'').find('td:eq(4)').text(''+new_linkedin_link+'');
                $('#'+id+'').find('td:eq(5)').text(''+new_category+'');
                if (response.profile != 1){
                    $('#'+id+'').find('td:eq(6)').find('img').attr('src','../profile_pics/'+response.profile+'')
                }
                $('input[name=new_full_name]').val('');
                $('input[name=new_position]').val('');
                $('select[name=new_category]').val('catg');
                $('#edit_leaders').modal('hide');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_leaders', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_leader').attr('name',id);
});

$('.delete_leader').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_leader",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Rəhbər silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
