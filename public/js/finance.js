function paginate() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}
$('.add_finance').on('click', function(){
    var header = $('input[name=header]').val().trim();
    var mycontent = tinymce.get("myTextarea").getContent();
    $.ajax({
        type: "POST",
        url: "/add_finance",
        data: {'mycontent' :mycontent,'header':header , "_token": csrf_token},
        success: function (response) {
            $('input[name=header]').val('');
            tinymce.get("myTextarea").setContent('');
            toastr.success('Maliyyə əlavə edildi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
$('.edit_finance').on('click', function(){
    var id =$('input[name=id]').val();
    var header = $('input[name=header]').val().trim();
    var mycontent = tinymce.get("myTextarea").getContent();
    $.ajax({
        type: "POST",
        url: "/edit_finance",
        data: {'mycontent' :mycontent,'header':header , 'id':id, "_token": csrf_token},
        success: function (response) {
            toastr.success('Maliyyə məlumatları yeniləndi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$('.delete_finances').on('click', function (){
    var id = $(this).attr('id');
    $('#delete_finances').find('.delete_finance').attr('name',id);
});

$('.delete_finance').on('click', function(){
    var id =$(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "/delete_finance",
        data: { 'id':id, "_token": csrf_token},
        success: function (response) {
            tr.remove();
            paginate();
            $('#delete_finances').modal('hide');
            toastr.success('Maliyyə silindi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
