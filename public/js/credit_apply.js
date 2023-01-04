function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}

$('.add_credit_apply').on('click', function(){
    if ($('input[name=agree_terms]').is(':checked')){
        $('input[name=agree_terms]').parents('.checkmark').css('color','#fff');
        var id = $(this).attr('id');
        var formData = new FormData($('#add_credit_apply')[0]);
        formData.append('id',id);
        $.ajax({
            type: "POST",
            url: "/add_credit_apply",
            data: formData,
            cache:false,
            processData:false,
            contentType:false,
            success:function (response){
                if (response.message == 'success') {
                    toastr.success('Kredit müraciətiniz göndərildi');
                    $('input[name=purpose]').val('');
                    $('input[name=amount]').val('');
                    $('input[name=term]').val('');
                    $('input[name=monthly_payment]').val('');
                    $('input[name=organization]').val('');
                    $('input[name=position]').val('');
                    $('input[name=work_term]').val('');
                    $('input[name=monthly_salary]').val('');
                    $('input[name=long_name]').val('');
                    $('input[name=address]').val('');
                    $('input[name=register_address]').val('');
                    $('input[name=birthday]').val('');
                    $('input[name=home_phone]').val('');
                    $('input[name=mobile_phone]').val('');
                    $('input[name=work_phone]').val('');
                    $('input[name=email]').val('');
                    $('.scss').html('' +
                        '<div style="display:flex;align-items:center;margin-top:50px;">\n' +
                        '    <svg class="true" xmlns="http://www.w3.org/2000/svg" width="70" height="71" viewBox="0 0 70 71">\n' +
                        '        <g fill="none" fill-rule="evenodd">\n' +
                        '            <g fill-rule="nonzero">\n' +
                        '                <g>\n' +
                        '                    <g transform="translate(-646 -428) translate(646 428.905)">\n' +
                        '                        <circle cx="34.945" cy="34.945" r="34.945" fill="#934E8E"/>\n' +
                        '                        <path fill="#844280" d="M26.016 50.709l17.968 17.968C58.866 64.71 69.89 51.15 69.89 34.945v-.992L55.78 20.945 26.016 50.709z"/>\n' +
                        '                        <path fill="#FFF" d="M35.827 42.772c1.543 1.543 1.543 4.189 0 5.732L32.63 51.7c-1.543 1.543-4.19 1.543-5.732 0l-14-14.11c-1.544-1.544-1.544-4.19 0-5.733l3.196-3.197c1.544-1.543 4.19-1.543 5.733 0l14 14.11z"/>\n' +
                        '                        <path fill="#FFF" d="M48.063 18.41c1.543-1.544 4.189-1.544 5.732 0l3.197 3.196c1.543 1.544 1.543 4.19 0 5.733L32.74 51.48c-1.543 1.544-4.189 1.544-5.732 0l-3.197-3.197c-1.543-1.543-1.543-4.189 0-5.732L48.063 18.41z"/>\n' +
                        '                    </g>\n' +
                        '                </g>\n' +
                        '            </g>\n' +
                        '        </g>\n' +
                        '    </svg>\n' +
                        '    <span class="true-span">Müraciətiniz qəbul olundu. <br> Qısa zamanda sizinlə əlaqə saxlanəlacaq</span>\n' +
                        '</div>')
                    setTimeout(function(){
                        location.reload();
                    }, 3000)
                }
            },
            error: function (request, error, response) {
                toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
            }
        });
    }
    else{
        $('input[name=agree_terms]').parents('.checkmark').css('color','#f89406');
        toastr.warning('Məlumatlarınızın emalına razılıq verməlisiniz!');
    }
});

$(document).on('click','.delete_credit_applys', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_credit_apply').attr('name',id);
});

$('.delete_credit_apply').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "/delete_credit_apply",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Kredit müraciəti silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
