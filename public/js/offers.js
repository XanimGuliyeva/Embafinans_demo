$(document).ready(function (){
    $('#edit_offer select').each(function (){
        $(this).find('option').each(function (){
            if ($(this).parents('select').attr('id') == $(this).val()){
                $(this).parents('select').val($(this).val());
            }
        })
    });
})

$(document).ready(function (){
    if ($('select[name=choice] option:selected').val() == 'image'){
        $('.v_t').css('display','none');
        $('.wth_img').html('<label class="form-control">Başlıq şəkli (Dəyişmək istəyirsinizsə)</label><br><input type="file" class="form-control" name="choice_img"><br>');
    }
    else{
        $('.v_t').css('display','block');
        $('.wth_img').html('');
    }
})


$('select[name=choice]').on('change',function (){
    if ($('select[name=choice] option:selected').val() == 'image'){
        $('.v_t').css('display','none');
        $('.wth_img').html('<label class="form-control" style="color: red;">Şəkli daxil etməyi unutmayın!!!</label><br><input type="file" class="form-control" name="choice_img"><br>');
    }
    else{
        $('.v_t').css('display','block');
        $('.wth_img').html('');
    }
})

$('.add_offer').on('click', function(){
    var formData = new FormData($('#add_offer')[0]);
    if ($('textarea[name=text]').length){
        var mycontent = tinymce.get("myTextarea").getContent();
        formData.append('mycontent',mycontent);
    }
    if ($('input[name=choice_img]').length){
        if ($('input[name=choice_img]').val() == ''){
            toastr.error('Şəkil daxil edilməyib');
            $('input[name=choice_img]').css('background-color','darkred');
        }
        else{
            $('input[name=choice_img]').css('background-color','transparent');
            $.ajax({
                type: "POST",
                url: "add_offer",
                data: formData,
                cache:false,
                processData:false,
                contentType:false,
                success:function (response){
                    if (response.message == 'success') {
                        toastr.success('Kompaniya Əlavə olundu');
                        if ($('textarea[name=text]').length) {
                            tinymce.get("myTextarea").setContent('');
                        }
                        $('input[name=name]').val('');
                        $('input[name=value]').val('');
                        $('textarea[name=about]').val('');
                        $('select[name=choice]').val('choice');
                        $('select[name=term]').val('term');
                        $('select[name=category]').val('category');
                        $('input[name=main_image]').val('');
                        $('input[name=choice_img]').val('');
                    }
                },
                error: function (request, error, response) {
                    toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                }
            });
        }
    }
    else{
        if ($('input[name=value]').val() == ''){
            toastr.error('Başlıqda yazılacaq dəyərr daxil edilməyib');
        }
        else if($('select[name=term]').val() == 'term'){
            toastr.error('Müddət daxil edilməyib');
        }
        else{
            $('input[name=choice_img]').css('background-color','transparent');
            $.ajax({
                type: "POST",
                url: "add_offer",
                data: formData,
                cache:false,
                processData:false,
                contentType:false,
                success:function (response){
                    if (response.message == 'success') {
                        toastr.success('Kompaniya Əlavə olundu');
                        if ($('textarea[name=text]').length) {
                            tinymce.get("myTextarea").setContent('');
                        }
                        $('input[name=name]').val('');
                        $('input[name=value]').val('');
                        $('textarea[name=about]').val('');
                        $('select[name=choice]').val('choice');
                        $('select[name=term]').val('term');
                        $('select[name=category]').val('category');
                        $('input[name=main_image]').val('');
                        $('input[name=choice_img]').val('');
                    }
                },
                error: function (request, error, response) {
                    toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                }
            });
        }
    }
});

$('.edit_offer').on('click', function (){
    var id = $(this).attr('name');
    var formData = new FormData($('#edit_offer')[0]);
    formData.append('id', id);
    if ($('textarea[name=text]').length){
        var mycontent = tinymce.get("myTextarea").getContent();
        formData.append('mycontent',mycontent);
    }
    if ($('input[name=choice_img]').length){
        $.ajax({
            type: "POST",
            url: "/edit_offer",
            data: formData,
            cache:false,
            processData:false,
            contentType:false,
            success:function (response){
                if (response.message == 'success') {
                    toastr.success('Kompaniya yeniləndi');
                }
            },
            error: function (request, error, response) {
                toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
            }
        });
    }
    else{
        if ($('input[name=value]').val() == ''){
            toastr.error('Başlıqda yazılacaq dəyərr daxil edilməyib');
        }
        else if($('select[name=term]').val() == 'term'){
            toastr.error('Müddət daxil edilməyib');
        }
        else{
            $.ajax({
                type: "POST",
                url: "/edit_offer",
                data: formData,
                cache:false,
                processData:false,
                contentType:false,
                success:function (response){
                    if (response.message == 'success') {
                        toastr.success('Kompaniya yeniləndi');
                    }
                },
                error: function (request, error, response) {
                    toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                }
            });
        }
    }
});

$(document).on('click','.delete_offers', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_offer').attr('name',id);
});

$('.delete_offer').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_offer",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Kompaniya silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
