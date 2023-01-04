@extends('admin.index')
@section('admin')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Düzəliş et</h4>
                    </div>
                    <div class="card-body">
                        <input class="form-control" name='header'  type='text' placeholder="Başlıq" value="{{$news->header}}"><br>
                        <textarea name="text" id="myTextarea" class="tinymce">{!! $news->content !!}</textarea>
                        <br>
                        <input name=image type=file id="upload" hidden onchange=""><br>
                        <input name="id" value="{{$news->id}}" type="hidden">
                        <button type="button" class="edit_news btn btn-lg btn-dark offset-5">Dəyiş</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
