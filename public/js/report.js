function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}
$('.add_report').on('click', function(){
    var formData = new FormData($('#add_report')[0]);
    var year = $("select[name=year] option:selected").val().trim();
    var name = $('input[name=name]').val().trim();
    $.ajax({
        type: "POST",
        url: "add_report",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Hesabat Əlavə olundu');
                $('.table_body').append('' +
                    '<tr id="'+response.id+'">\n' +
                    '    <td></td>\n' +
                    '    <td>\n' +
                    '        '+name+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        '+year+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <a href="../reports/'+response.report+'" class="btn btn-primary btn-lg" download><i class="fa fa-file"></i></a>\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <button name="'+response.id+'" class="btn btn-info edit_report" data-toggle="modal" data-target="#edit_reports"><i class="fa fa-pencil-alt"></i></button>\n' +
                    '        <button name="'+response.id+'" class="btn btn-danger delete_reports" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>\n' +
                    '    </td>\n' +
                    '</tr>');
                $('input[name=name]').val('');
                $('input[name=report]').val('');
                $('select[name=year]').val('hdn');
                $('#report').modal('hide');
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.edit_report', function(){
    var id = $(this).attr('name');
    $('#edit_reports').attr('name',id);
    var name = $('#'+id+'').find('td:eq(1)').text().trim();
    var year = $('#'+id+'').find('td:eq(2)').text().trim();
    $('#edit_reports').find('input[name=new_name]').val(name);
    $('#edit_reports').find('select[name=new_year] option').each(function (){
        if ($(this).val() == year){
            $(this).prop('selected', true);
        }
    });
});
$('.edit_reports').on('click', function (){
    var id = $(this).parents('#edit_reports').attr('name');
    var new_formData = new FormData($('#edit_report')[0]);
    new_formData.append('id', id);
    var new_name = $('input[name=new_name]').val().trim();
    var new_year = $('select[name=new_year] option:selected').val().trim();
    $.ajax({
        type: "POST",
        url: "edit_report",
        data: new_formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Hesabat yeniləndi');
                $('#'+id+'').find('td:eq(1)').text(''+new_name+'');
                $('#'+id+'').find('td:eq(2)').text(''+new_year+'');
                if (response.report != 1){
                    $('#'+id+'').find('td:eq(3)').find('a').attr('href','../reports/'+response.report+'')
                }
                $('input[name=new_name]').val('');
                $('input[name=new_report]').val('');
                $('select[name=new_year]').val('hdn');
                $('#edit_reports').modal('hide');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_reports', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_report').attr('name',id);
});

$('.delete_report').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_report",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Hesabat silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
