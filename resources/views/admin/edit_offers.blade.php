@extends('admin.index')
@section('admin')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kompaniya düzəliş et</h4>
                    </div>
                    <div class="card-body">
                        <form id="edit_offer">
                            @csrf
                            <input class="form-control" name=name type=text placeholder="Ad" value="{{$offer->name}}"><br>
                            <textarea class="form-control" name=about type=text placeholder="Qısa məzmun">{{$offer->about}}</textarea><br>
                            <select style="color: #525f7f;" name="choice" class="form-control" id="{{$offer->choice}}">
                                <option value="choice" hidden selected>Məhsul başlıq forması</option>
                                <option value="percent">Faizlə</option>
                                <option value="manat">Manatla</option>
                                <option value="image">Şəkillə</option>
                            </select><br>
                            <span class="v_t">
                                <select style="color: #525f7f;" name="term" class="form-control" id="{{$offer->term}}">
                                    <option value="term" hidden selected>Müddət</option>
                                    <option value="günlük">günlük</option>
                                    <option value="aylıq">aylıq</option>
                                    <option value="illik">illik</option>
                                    <option value="günlük divident">günlük divident</option>
                                    <option value="aylıq divident">aylıq divident</option>
                                    <option value="illik divident">illik divident</option>
                                </select><br>
                                <input class="form-control" name=value type=number placeholder="Başlıqda yazılacaq dəyər" value="{{$offer->value}}"><br>
                            </span>
                            <select style="color: #525f7f;" name="category" class="form-control" id="{{$offer->category}}">
                                <option value="category" hidden selected>Kateqoriya</option>
                                @foreach($offer_cats as $offer_cat)
                                    <option value="{{$offer_cat->id}}">{{$offer_cat->name}}</option>
                                @endforeach
                            </select><br>
                            <label>Şəkil</label>
                            <input class="form-control" name=main_image type=file value=""><br>
                            <span class="wth_vls">
                                <textarea name="text" id="myTextarea" class="tinymce">{!! $offer->content !!}</textarea>
                                <input name=image type=file id="upload" hidden onchange=""><br>
                            </span>
                        </form>
                        <button type="button" class="edit_offer btn btn-lg btn-dark offset-5" name="{{$offer->id}}">Yerləşdir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
