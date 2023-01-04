$('.about').on('click', function(){
    var id = $(this).attr('id');
    var employee = $(this).parents('.card-body').find('input[name=employee]').val().trim();
    var credit = $(this).parents('.card-body').find('input[name=credit]').val().trim();
    var portfolio = $(this).parents('.card-body').find('input[name=portfolio]').val().trim();
    var partner = $(this).parents('.card-body').find('input[name=partner]').val().trim();
    var mycontent = tinymce.get("myTextarea").getContent();
    $.ajax({
        type: "POST",
        url: "/about",
        data: {'mycontent' :mycontent, 'id' :id,'employee' :employee, 'credit' :credit, 'portfolio' :portfolio, 'partner' :partner, "_token": csrf_token},
        success: function (response) {
            toastr.success('Məlumatlar yeniləndi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});


