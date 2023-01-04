$('.add_user').on('click', function (){
    var formData = new FormData($('#add_users')[0]);
    if ($('input[name=password]').val() == $('input[name=confirm_password]').val()) {
        $('input[name=password]').css('border-color','#e5e7ec');
        $('input[name=password]').css('box-shadow','0 0 10px transparent');
        $('input[name=confirm_password]').css('border-color','#e5e7ec');
        $('input[name=confirm_password]').css('box-shadow','0 0 10px transparent');
        $.ajax({
            type: "POST",
            url: "/add_user",
            data: formData,
            cache:false,
            processData:false,
            contentType:false,
            success:function (response){
                if (response.message == 'success') {
                    toastr.success('Qeydiyyat uğurludur');
                    setTimeout(function (){
                        location.reload();
                    }, 2000);
                }
            },
            error: function (request, error, response) {
                toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
            }
        });
    }
    else{
        toastr.error('Xanalardakı şifrələr uyğun deyil!');
        $('input[name=password]').css('border-color','red');
        $('input[name=password]').css('box-shadow','0 0 10px red');
        $('input[name=confirm_password]').css('border-color','red');
        $('input[name=confirm_password]').css('box-shadow','0 0 10px red');
    }
});

$('.edit_user').on('click', function (){
    var formData = new FormData($('#edit_users')[0]);
    if ($('input[name=password]').val() == $('input[name=confirm_password]').val()){
        $('input[name=password]').css('border-color','#e5e7ec');
        $('input[name=password]').css('box-shadow','0 0 10px transparent');
        $('input[name=confirm_password]').css('border-color','#e5e7ec');
        $('input[name=confirm_password]').css('box-shadow','0 0 10px transparent');
        $.ajax({
            type: "POST",
            url: "/edit_user",
            data: formData,
            cache:false,
            processData:false,
            contentType:false,
            success:function (response){
                if (response.message == 'success') {
                    toastr.success('Məlumatlarınız yeniləndi');
                }
            },
            error: function (request, error, response) {
                toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
            }
        });
    }
    else{
        toastr.error('Xanalardakı şifrələr uyğun deyil!');
        $('input[name=password]').css('border-color','red');
        $('input[name=password]').css('box-shadow','0 0 10px red');
        $('input[name=confirm_password]').css('border-color','red');
        $('input[name=confirm_password]').css('box-shadow','0 0 10px red');
    }
});
