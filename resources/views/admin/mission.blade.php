@extends('admin.index')
@section('admin')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Missiya</h4>
                    </div>
                    <div class="card-body">
                        @if(isset($mission))
                            <textarea name="text" id="myTextarea" class="tinymce">{!! $mission->content !!}</textarea>
                            <br>
                            <input name=image type=file id="upload" hidden onchange=""><br>
                            <button id="{{$mission->id}}" type="button" class="mission btn btn-lg btn-dark offset-5">Yerləşdir</button>
                        @else
                            <textarea name="text" id="myTextarea" class="tinymce"></textarea>
                            <br>
                            <input name=image type=file id="upload" hidden onchange=""><br>
                            <button id="" type="button" class="mission btn btn-lg btn-dark offset-5">Yerləşdir</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
