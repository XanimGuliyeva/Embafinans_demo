@extends('admin.index')
@section('admin')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Məhsul əlavə et</h4>
                    </div>
                    <div class="card-body">
                        <form id="edit_product">
                            @csrf
                            <input class="form-control" name=name type=text placeholder="Ad" value="{{$product->name}}"><br>
                            <textarea class="form-control" name=about type=text placeholder="Qısa məzmun">{{$product->about}}</textarea><br>
                            <select style="color: #525f7f;" name="choice" class="form-control" id="{{$product->choice}}">
                                <option value="choice" hidden selected>Məhsul başlıq forması</option>
                                <option value="percent">Faizlə</option>
                                <option value="manat">Manatla</option>
                                <option value="image">Şəkillə</option>
                            </select><br>
                            <span class="wth_img"></span>
                            <span class="v_t">
                                <select style="color: #525f7f;" name="term" class="form-control" id="{{$product->term}}">
                                    <option value="term" hidden selected>Müddət</option>
                                    <option value="günlük">günlük</option>
                                    <option value="aylıq">aylıq</option>
                                    <option value="illik">illik</option>
                                    <option value="günlük divident">günlük divident</option>
                                    <option value="aylıq divident">aylıq divident</option>
                                    <option value="illik divident">illik divident</option>
                                </select><br>
                                <input class="form-control" name=value type=number placeholder="Başlıqda yazılacaq dəyər" value="{{$product->value}}"><br>
                            </span>
                            <select style="color: #525f7f;" name="category" class="form-control" id="{{$product->category}}">
                                <option value="category" hidden selected>Kateqoriya</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select><br>
                            <label>Şəkil</label>
                            <input class="form-control" name=main_image type=file value=""><br>
                            <span class="wth_vls">
                                @if($product->FIFD == '')
                                    <textarea name="text" id="myTextarea" class="tinymce">{!! $product->content !!}</textarea>
                                    <input name=image type=file id="upload" hidden onchange=""><br>
                                @else
                                    <input class="form-control" name=min_amount type=text placeholder="Minimum məbləğ, AZN" value="{{$product->min_amount}}"><br>
                                    <input class="form-control" name=max_amount type=text placeholder="Maksimum məbləğ, AZN" value="{{$product->max_amount}}"><br>
                                    <input class="form-control" name=monthly_payment type=text placeholder="Aylıq ödəniş" value="{{$product->monthly_payment}}"><br>
                                    <input class="form-control" name=min_term type=text placeholder="Minimum müddət, ayla" value="{{$product->min_term}}"><br>
                                    <input class="form-control" name=max_term type=text placeholder="Maksimum müddət, ayla" value="{{$product->max_term}}"><br>
                                    <input class="form-control" name=annual_rate type=text placeholder="İllik faiz dərəcəsi" value="{{$product->annual_rate}}"><br>
                                    <input class="form-control" name=FIFD type=text placeholder="FİFD, %-lə" value="{{$product->FIFD}}"><br>
                                    <select style="color: #525f7f;" name="commission" class="form-control" id="{{$product->commission}}">
                                        <option value="comission" hidden selected>Kreditə görə komissiya</option>
                                        <option value="Vardır">Var</option>
                                        <option value="Yoxdur">Yoxdur</option>
                                    </select><br>
                                    <select style="color: #525f7f;" name="payment_form" class="form-control" id="{{$product->payment_form}}">
                                        <option value="payment_form" hidden selected>Ödəniş forması</option>
                                        <option value="Annuitet">Annuitet</option>
                                        <option value="Sərbəst">Sərbəst</option>
                                    </select><br>
                                    <input class="form-control" name=financing type=text placeholder="Eyni növ malın maliyyələşməsi" value="{{$product->financing}}"><br>
                                    <input class="form-control" name=age type=text placeholder="Yaş həddinə tələb (il)" value="{{$product->age}}"><br>
                                    <textarea class="form-control" name=bail type=text placeholder="Zaminlik tələb edilən hallar">{{$product->bail}}</textarea><br>
                                    <textarea class="form-control" name=documents type=text placeholder="Tələb olunan sənədlər">{{$product->documents}}</textarea><br>
                                    <textarea class="form-control" name=informations type=text placeholder="Tələb olunan məlumatlar">{{$product->informations}}</textarea><br>
                                @endif
                            </span>
                        </form>
                        <button type="button" class="edit_product btn btn-lg btn-dark offset-5" name="{{$product->id}}">Yerləşdir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
