$(document).ready(function (){
    $('#edit_product select').each(function (){
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
        $('.wth_img').html('<label class="form-control" style="color: darkred;">Şəkli daxil etməyi unutmayın!!!</label><br><input type="file" class="form-control" name="choice_img"><br>');
    }
    else{
        $('.v_t').css('display','block');
        $('.wth_img').html('');
    }
})

function word(){
    tinymce.init({
        selector: '.tinymce',
        height: 800,
        width: 1190,
        verify_html: false,
        theme: 'silver',
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen table',
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help | tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
        image_advtab: true,
        file_picker_callback: function(callback, value, meta) {
            if (meta.filetype == 'image') {
                $('#upload').trigger('click');
                $('#upload').on('change', function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        callback(e.target.result, {
                            alt: ''
                        });
                    };
                    reader.readAsDataURL(file);
                });
            }
        },
        templates: [{
            title: 'Test template 1',
            content: 'Test 1'
        },
            {
                title: 'Test template 2',
                content: 'Test 2'
            }
        ],
        content_css: []
    });
}
$('.type').on('click', function (){
    if ($(this).find('input[name=type]').val() == 'vl'){
        $('.wth_vls').html('' +
            '<input class="form-control" name=min_amount type=text placeholder="Minimum məbləğ, AZN" value=""><br>\n' +
            '<input class="form-control" name=max_amount type=text placeholder="Maksimum məbləğ, AZN" value=""><br>\n' +
            '<input class="form-control" name=monthly_payment type=text placeholder="Aylıq ödəniş" value=""><br>\n' +
            '<input class="form-control" name=min_term type=text placeholder="Minimum müddət, ayla" value=""><br>\n' +
            '<input class="form-control" name=max_term type=text placeholder="Maksimum müddət, ayla" value=""><br>\n' +
            '<input class="form-control" name=annual_rate type=text placeholder="İllik faiz dərəcəsi" value=""><br>\n' +
            '<input class="form-control" name=FIFD type=text placeholder="FİFD, %-lə" value=""><br>\n' +
            '<select style="color: #525f7f;" name="commission" class="form-control">\n' +
            '    <option value="comission" hidden selected>Kreditə görə komissiya</option>\n' +
            '    <option value="Vardır">Var</option>\n' +
            '    <option value="Yoxdur">Yoxdur</option>\n' +
            '</select><br>\n' +
            '<select style="color: #525f7f;" name="payment_form" class="form-control">\n' +
            '    <option value="payment_form" hidden selected>Ödəniş forması</option>\n' +
            '    <option value="Annuitet">Annuitet</option>\n' +
            '    <option value="Sərbəst">Sərbəst</option>\n' +
            '</select><br>\n' +
            '<input class="form-control" name=financing type=text placeholder="Eyni növ malın maliyyələşməsi" value=""><br>\n' +
            '<input class="form-control" name=age type=text placeholder="Yaş həddinə tələb (il)" value=""><br>\n' +
            '<textarea class="form-control" name=bail type=text placeholder="Zaminlik tələb edilən hallar" value=""></textarea><br>\n' +
            '<textarea class="form-control" name=documents type=text placeholder="Tələb olunan sənədlər" value=""></textarea><br>\n' +
            '<textarea class="form-control" name=informations type=text placeholder="Tələb olunan məlumatlar" value=""></textarea><br>');
    }
    else{
        $('.wth_vls').html('' +
            '<textarea name="text" id="myTextarea" class="tinymce"></textarea>\n' +
            '<input name=image type=file id="upload" hidden onchange=""><br>');
        word();
    }
});
$('.add_product').on('click', function(){
    var formData = new FormData($('#add_product')[0]);
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
            if ($('.wth_vls').find('textarea[name=text]').length){
                $.ajax({
                    type: "POST",
                    url: "add_product2",
                    data: formData,
                    cache:false,
                    processData:false,
                    contentType:false,
                    success:function (response){
                        if (response.message == 'success') {
                            toastr.success('Məhsul Əlavə olundu');
                            if ($('textarea[name=text]').length) {
                                tinymce.get("myTextarea").setContent('');
                            }
                            $('input[name=name]').val('');
                            $('input[name=value]').val('');
                            $('textarea[name=about]').val('');
                            $('select[name=choice]').val('typ');
                            $('select[name=term]').val('trm');
                            $('select[name=category]').val('ctg');
                            $('input[name=image]').val('');
                            $('input[name=choice_img]').val('');
                        }
                    },
                    error: function (request, error, response) {
                        toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                    }
                });
            }
            else{
                $.ajax({
                    type: "POST",
                    url: "add_product",
                    data: formData,
                    cache:false,
                    processData:false,
                    contentType:false,
                    success:function (response){
                        if (response.message == 'success') {
                            toastr.success('Məhsul Əlavə olundu');
                            $('input[name=name]').val('');
                            $('input[name=value]').val('');
                            $('textarea[name=about]').val('');
                            $('select[name=choice]').val('choice');
                            $('select[name=term]').val('term');
                            $('select[name=category]').val('category');
                            $('input[name=image]').val('');
                            $('input[name=min_amount]').val('');
                            $('input[name=max_amount]').val('');
                            $('input[name=monthly_payment]').val('');
                            $('input[name=min_term]').val('');
                            $('input[name=max_term]').val('');
                            $('input[name=annual_rate]').val('');
                            $('input[name=FIFD]').val('');
                            $('select[name=comission]').val('comission');
                            $('select[name=payment_form]').val('payment_form');
                            $('input[name=financing]').val('');
                            $('input[name=age]').val('');
                            $('textarea[name=bail]').val('');
                            $('textarea[name=documents]').val('');
                            $('textarea[name=informations]').val('');
                            $('input[name=choice_img]').val('');
                        }
                    },
                    error: function (request, error, response) {
                        toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                    }
                });
            }
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
            if ($('.wth_vls').find('textarea[name=text]').length){
                $.ajax({
                    type: "POST",
                    url: "add_product2",
                    data: formData,
                    cache:false,
                    processData:false,
                    contentType:false,
                    success:function (response){
                        if (response.message == 'success') {
                            toastr.success('Məhsul Əlavə olundu');
                            if ($('textarea[name=text]').length) {
                                tinymce.get("myTextarea").setContent('');
                            }
                            $('input[name=name]').val('');
                            $('input[name=value]').val('');
                            $('textarea[name=about]').val('');
                            $('select[name=choice]').val('choice');
                            $('select[name=term]').val('term');
                            $('select[name=category]').val('category');
                            $('input[name=image]').val('');
                            $('input[name=choice_img]').val('');
                        }
                    },
                    error: function (request, error, response) {
                        toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                    }
                });
            }
            else{
                $.ajax({
                    type: "POST",
                    url: "add_product",
                    data: formData,
                    cache:false,
                    processData:false,
                    contentType:false,
                    success:function (response){
                        if (response.message == 'success') {
                            toastr.success('Məhsul Əlavə olundu');
                            $('input[name=name]').val('');
                            $('input[name=value]').val('');
                            $('textarea[name=about]').val('');
                            $('select[name=choice]').val('choice');
                            $('select[name=term]').val('term');
                            $('select[name=category]').val('category');
                            $('input[name=image]').val('');
                            $('input[name=min_amount]').val('');
                            $('input[name=max_amount]').val('');
                            $('input[name=monthly_payment]').val('');
                            $('input[name=min_term]').val('');
                            $('input[name=max_term]').val('');
                            $('input[name=annual_rate]').val('');
                            $('input[name=FIFD]').val('');
                            $('select[name=comission]').val('comission');
                            $('select[name=payment_form]').val('payment_form');
                            $('input[name=financing]').val('');
                            $('input[name=age]').val('');
                            $('textarea[name=bail]').val('');
                            $('textarea[name=documents]').val('');
                            $('textarea[name=informations]').val('');
                            $('input[name=choice_img]').val('');
                        }
                    },
                    error: function (request, error, response) {
                        toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                    }
                });
            }
        }
    }
});

$('.edit_product').on('click', function (){
    var id = $(this).attr('name');
    var formData = new FormData($('#edit_product')[0]);
    formData.append('id', id);
    if ($('textarea[name=text]').length){
        var mycontent = tinymce.get("myTextarea").getContent();
        formData.append('mycontent',mycontent);
    }
    if ($('input[name=choice_img]').length){
        if ($('.wth_vls').find('textarea[name=text]').length){
            $.ajax({
                type: "POST",
                url: "/edit_product2",
                data: formData,
                cache:false,
                processData:false,
                contentType:false,
                success:function (response){
                    if (response.message == 'success') {
                        toastr.success('Məhsul yeniləndi');
                    }
                },
                error: function (request, error, response) {
                    toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                }
            });
        }
        else{
            $.ajax({
                type: "POST",
                url: "/edit_product",
                data: formData,
                cache:false,
                processData:false,
                contentType:false,
                success:function (response){
                    if (response.message == 'success') {
                        toastr.success('Məhsul yeniləndi');
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
            if ($('.wth_vls').find('textarea[name=text]').length){
                $.ajax({
                    type: "POST",
                    url: "/edit_product2",
                    data: formData,
                    cache:false,
                    processData:false,
                    contentType:false,
                    success:function (response){
                        if (response.message == 'success') {
                            toastr.success('Məhsul yeniləndi');
                        }
                    },
                    error: function (request, error, response) {
                        toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                    }
                });
            }
            else{
                $.ajax({
                    type: "POST",
                    url: "/edit_product",
                    data: formData,
                    cache:false,
                    processData:false,
                    contentType:false,
                    success:function (response){
                        if (response.message == 'success') {
                            toastr.success('Məhsul yeniləndi');
                        }
                    },
                    error: function (request, error, response) {
                        toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
                    }
                });
            }
        }
    }
});

$(document).on('click','.delete_products', function (){
    var id = $(this).attr('name');
    $('#myModal').find('.delete_product').attr('name',id);
});

$('.delete_product').on('click', function (){
    var id = $(this).attr('name');
    var tr = $('#'+id+'');
    $.ajax({
        type: "POST",
        url: "delete_product",
        data: {
            'id':id, "_token": csrf_token
        },
        success:function(response)
        {
            if(response.message == 'success')
            {
                $('#myModal').modal('hide');
                toastr.success('Məhsul silindi');
                tr.remove();
                page();
            }
        },
        error: function (request, error, response) {
            toastr.error(request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]);
        }
    })
});
