function paginate() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}
$('.add_news').on('click', function(){
    var header = $('input[name=header]').val().trim();
    var mycontent = tinymce.get("myTextarea").getContent();
    $.ajax({
        type: "POST",
        url: "/add_news",
        data: {'mycontent' :mycontent,'header':header , "_token": csrf_token},
        success: function (response) {
            $('input[name=header]').val('');
            tinymce.get("myTextarea").setContent('');
            toastr.success('Xəbər əlavə edildi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
$('.edit_news').on('click', function(){
    var id =$('input[name=id]').val();
    var header = $('input[name=header]').val().trim();
    var mycontent = tinymce.get("myTextarea").getContent();
    $.ajax({
        type: "POST",
        url: "/edit_news",
        data: {'mycontent' :mycontent,'header':header , 'id':id, "_token": csrf_token},
        success: function (response) {
            toastr.success('Xəbər məlumatları yeniləndi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
$('.delete_news').on('click', function (){
    var id = $(this).attr('id');
    $('#delete_news').find('.delete_new').attr('name',id);
});
$('.delete_new').on('click', function(){
    var id =$(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "/delete_news",
        data: { 'id':id, "_token": csrf_token},
        success: function (response) {
            tr.remove();
            paginate();
            $('#delete_news').modal('hide');
            toastr.success('Xəbər silindi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
