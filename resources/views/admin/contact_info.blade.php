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
                        @if(isset($contact_info))
                            <input class="form-control" name=address type=text placeholder="Ünvan" value="{{$contact_info->address}}"><br>
                            <input class="form-control" name=phone type=text placeholder="Telefon" value="{{$contact_info->phone}}"><br>
                            <input class="form-control" name=fax type=text placeholder="Fax" value="{{$contact_info->fax}}"><br>
                            <input class="form-control" name=hotline type=text placeholder="Qaynar-xətt" value="{{$contact_info->hotline}}"><br>
                            <input class="form-control" name=email type=text placeholder="Email" value="{{$contact_info->email}}"><br>
                            <button id="{{$contact_info->id}}" type="button" class="contact_info btn btn-lg btn-dark offset-5">Yerləşdir</button>
                        @else
                            <input class="form-control" name=address type=text placeholder="Ünvan"><br>
                            <input class="form-control" name=phone type=text placeholder="Telefon"><br>
                            <input class="form-control" name=fax type=text placeholder="Fax"><br>
                            <input class="form-control" name=hotline type=text placeholder="Qaynar-xətt"><br>
                            <input class="form-control" name=email type=text placeholder="Email"><br>
                            <button id="" type="button" class="contact_info btn btn-lg btn-dark offset-5">Yerləşdir</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
