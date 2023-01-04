@extends('admin.index')
@section('admin')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Xəbər əlavə et</h4>
                    </div>
                    <div class="card-body">
                        <input class="form-control" name=header type=text placeholder="Başlıq" value=""><br>
                        <textarea name="text" id="myTextarea" class="tinymce"></textarea>
                        <br>
                        <input name=image type=file id="upload" hidden onchange=""><br>
                        <button type="button" class="add_news btn btn-lg btn-dark offset-5">Yerləşdir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
