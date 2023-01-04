function page() {
    var i = 0;
    $('tbody tr').each(function () {
        $(this).find('td:eq(0)').text(++i);
    })
}
$(document).ready(function(){
    var city = $('#city').attr('name');
    var deadline = $('#deadline').attr('name').split('.').join('-');
    $('select[name=city]').val(city);
    $('input[name=deadline]').val(deadline);
});
$('.add_career').on('click', function(){
    var header = $('input[name=header]').val().trim();
    var city = $('select[name=city] option:selected').val().trim();
    var deadline = $('input[name=deadline]').val().split('-').join('.');
    var mycontent = tinymce.get("myTextarea").getContent();
    console.log(mycontent)
    $.ajax({
        type: "POST",
        url: "/add_career",
        data: {'mycontent' :mycontent, 'header':header, 'city':city, 'deadline':deadline, "_token": csrf_token},
        success:function (response){
            if (response.message == 'success') {
                toastr.success('Vakansiya Əlavə olundu');
                $('input[name=header]').val('');
                $('select[name=city]').val('cty');
                $('input[name=deadline]').val('');
                tinymce.get("myTextarea").setContent('');
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$('.edit_career').on('click', function(){
    var id =$(this).attr('id');
    var header = $('input[name=header]').val().trim();
    var city = $('select[name=city] option:selected').val().trim();
    var deadline = $('input[name=deadline]').val().split('-').join('.');
    var mycontent = tinymce.get("myTextarea").getContent();
    $.ajax({
        type: "POST",
        url: "/edit_career",
        data: {'mycontent' :mycontent,'header':header , 'city':city, 'deadline':deadline, 'id':id, "_token": csrf_token},
        success: function (response) {
            toastr.success('Vakansiya məlumatları yeniləndi');
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    });
});

$(document).on('click','.delete_careers', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_career').attr('name',id);
});

$('.delete_career').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_career",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Vakansiya silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
