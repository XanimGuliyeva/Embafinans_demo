@extends('admin.index')
@section('admin')
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h4 class="card-title"> Haqqımızda</h4>
          </div>
          <div class="card-body">
              @if(isset($about))
                  <textarea name="text" id="myTextarea" class="tinymce">{!! $about->content !!}</textarea>
                  <br>
                  <input name=image type=file id="upload" hidden onchange=""><br>
                  <input class="form-control" name=employee type=number placeholder="Əməkdaş sayı" value="{{$about->employee}}"><br>
                  <input class="form-control" name=credit type=number placeholder="Kredit ərizəsi sayı" value="{{$about->credit}}"><br>
                  <input class="form-control" name=portfolio type=number placeholder="İllik kredit portfeli" value="{{$about->portfolio}}"><br>
                  <input class="form-control" name=partner type=number placeholder="Partnyor sayı" value="{{$about->partner}}"><br>
                  <button id="{{$about->id}}" type="button" class="about btn btn-lg btn-dark offset-5">Yerləşdir</button>
              @else
                  <textarea name="text" id="myTextarea" class="tinymce"></textarea>
                  <br>
                  <input name=image type=file id="upload" hidden onchange=""><br>
                  <input class="form-control" name=employee type=number placeholder="Əməkdaş sayı"><br>
                  <input class="form-control" name=credit type=number placeholder="Kredit ərizəsi sayı"><br>
                  <input class="form-control" name=portfolio type=number placeholder="İllik kredit portfeli"><br>
                  <input class="form-control" name=partner type=number placeholder="Partnyor sayı"><br>
                  <button id="" type="button" class="about btn btn-lg btn-dark offset-5">Yerləşdir</button>
              @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
