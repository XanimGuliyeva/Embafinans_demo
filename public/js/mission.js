$('.mission').on('click', function(){
    var id = $(this).attr('id');
    var mycontent = tinymce.get("myTextarea").getContent();
    $.ajax({
        type: "POST",
        url: "/mission",
        data: {'mycontent' :mycontent, 'id' :id, "_token": csrf_token},
        success: function (response) {
            toastr.success('Məlumatlar yeniləndi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
