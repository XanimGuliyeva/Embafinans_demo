function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}
$('.add_offer_cat').on('click', function(){
    var formData = new FormData($('#add_offer_cat')[0]);
    var offer_cat = $('input[name=offer_cat]').val().trim();
    var about = $('textarea[name=about]').val().trim();
    var percent = $('input[name=percent]').val().trim();
    $.ajax({
        type: "POST",
        url: "add_offer_cat",
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
                    '        '+offer_cat+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        '+about+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        '+percent+'\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <button name="'+response.id+'" class="btn btn-info edit_offer_cat" data-toggle="modal" data-target="#edit_offer_cats"><i class="fa fa-pencil-alt"></i></button>\n' +
                    '        <button name="'+response.id+'" class="btn btn-danger delete_offer_cats" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>\n' +
                    '    </td>\n' +
                    '</tr>');
                $('input[name=percent]').val('');
                $('input[name=offer_cat]').val('');
                $('textarea[name=about]').val('');
                $('#offer_cat').modal('hide');
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.edit_offer_cat', function(){
    var id = $(this).attr('name');
    $('#edit_offer_cats').attr('name',id);
    var offer_cat = $('#'+id+'').find('td:eq(1)').text().trim();
    var about = $('#'+id+'').find('td:eq(2)').text().trim();
    var percent = $('#'+id+'').find('td:eq(3)').text().trim();
    $('#edit_offer_cats').find('input[name=new_offer_cat]').val(offer_cat);
    $('#edit_offer_cats').find('textarea[name=new_about]').val(about);
    $('#edit_offer_cats').find('input[name=new_percent]').val(percent);
});
$('.edit_offer_cats').on('click', function (){
    var id = $(this).parents('#edit_offer_cats').attr('name');
    var new_formData = new FormData($('#edit_offer_cat')[0]);
    new_formData.append('id', id);
    var new_offer_cat = $('input[name=new_offer_cat]').val().trim();
    var new_about = $('textarea[name=new_about]').val().trim();
    var new_percent = $('input[name=new_percent]').val().trim();
    $.ajax({
        type: "POST",
        url: "edit_offer_cat",
        data: new_formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Kateqoriya yeniləndi');
                $('#'+id+'').find('td:eq(1)').text(''+new_offer_cat+'');
                $('#'+id+'').find('td:eq(2)').text(''+new_about+'');
                $('#'+id+'').find('td:eq(3)').text(''+new_percent+'');
                $('input[name=new_offer_cat]').val('');
                $('textarea[name=new_about]').val('');
                $('input[name=new_percent]').val('');
                $('#edit_offer_cats').modal('hide');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_offer_cats', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_offer_cat').attr('name',id);
});

$('.delete_offer_cat').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_offer_cat",
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
