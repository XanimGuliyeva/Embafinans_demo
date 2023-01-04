$('.contact_info').on('click', function(){
    var id = $(this).attr('id');
    var address = $(this).parents('.card-body').find('input[name=address]').val().trim();
    var phone = $(this).parents('.card-body').find('input[name=phone]').val().trim();
    var fax = $(this).parents('.card-body').find('input[name=fax]').val().trim();
    var hotline = $(this).parents('.card-body').find('input[name=hotline]').val().trim();
    var email = $(this).parents('.card-body').find('input[name=email]').val().trim();
    $.ajax({
        type: "POST",
        url: "/contact_info",
        data: {'email' :email, 'id' :id,'address' :address, 'phone' :phone, 'fax' :fax, 'hotline' :hotline, "_token": csrf_token},
        success: function (response) {
            toastr.success('Məlumatlar yeniləndi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});
