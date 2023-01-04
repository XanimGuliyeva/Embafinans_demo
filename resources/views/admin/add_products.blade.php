@extends('admin.index')
@section('admin')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Məhsul düzəliş et</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-around align-items-center">
                            <label style="font-size: 16px;" class="type d-flex align-items-center justify-content-between">
                                <input type="radio" name="type" value="vl" checked> &nbsp;Dəyərlərlə
                            </label>
                            <label style="font-size: 16px;" class="type d-flex align-items-center justify-content-between">
                                <input type="radio" name="type" value="fr"> &nbsp;Sərbəst
                            </label>
                        </div>
                        <form id="add_product">
                            @csrf
                            <input class="form-control" name=name type=text placeholder="Ad"><br>
                            <textarea class="form-control" name=about type=text placeholder="Qısa məzmun"></textarea><br>
                            <select style="color: #525f7f;" name="choice" class="form-control">
                                <option value="choice" hidden selected>Məhsul başlıq forması</option>
                                <option value="percent">Faizlə</option>
                                <option value="manat">Manatla</option>
                                <option value="image">Şəkillə</option>
                            </select><br>
                            <span class="wth_img"></span>
                            <span class="v_t">
                                <select style="color: #525f7f;" name="term" class="form-control">
                                    <option value="term" hidden selected>Müddət</option>
                                    <option value="günlük">günlük</option>
                                    <option value="aylıq">aylıq</option>
                                    <option value="illik">illik</option>
                                    <option value="günlük divident">günlük divident</option>
                                    <option value="aylıq divident">aylıq divident</option>
                                    <option value="illik divident">illik divident</option>
                                </select><br>
                                <input class="form-control" name=value type=number placeholder="Başlıqda yazılacaq dəyər"><br>
                            </span>
                            <select style="color: #525f7f;" name="category" class="form-control">
                                <option value="category" hidden selected>Kateqoriya</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select><br>
                            <label>Şəkil</label>
                            <input class="form-control" name="main_image" type=file><br>
                            <span class="wth_vls">
                                <input class="form-control" name=min_amount type=text placeholder="Minimum məbləğ, AZN" value=""><br>
                                <input class="form-control" name=max_amount type=text placeholder="Maksimum məbləğ, AZN" value=""><br>
                                <input class="form-control" name=monthly_payment type=text placeholder="Aylıq ödəniş" value=""><br>
                                <input class="form-control" name=min_term type=text placeholder="Minimum müddət, ayla" value=""><br>
                                <input class="form-control" name=max_term type=text placeholder="Maksimum müddət, ayla" value=""><br>
                                <input class="form-control" name=annual_rate type=text placeholder="İllik faiz dərəcəsi" value=""><br>
                                <input class="form-control" name=FIFD type=text placeholder="FİFD, %-lə" value=""><br>
                                <select style="color: #525f7f;" name="commission" class="form-control">
                                    <option value="comission" hidden selected>Kreditə görə komissiya</option>
                                    <option value="Vardır">Var</option>
                                    <option value="Yoxdur">Yoxdur</option>
                                </select><br>
                                <select style="color: #525f7f;" name="payment_form" class="form-control">
                                    <option value="payment_form" hidden selected>Ödəniş forması</option>
                                    <option value="Annuitet">Annuitet</option>
                                    <option value="Sərbəst">Sərbəst</option>
                                </select><br>
                                <input class="form-control" name=financing type=text placeholder="Eyni növ malın maliyyələşməsi" value=""><br>
                                <input class="form-control" name=age type=text placeholder="Yaş həddinə tələb (il)" value=""><br>
                                <textarea class="form-control" name=bail type=text placeholder="Zaminlik tələb edilən hallar" value=""></textarea><br>
                                <textarea class="form-control" name=documents type=text placeholder="Tələb olunan sənədlər" value=""></textarea><br>
                                <textarea class="form-control" name=informations type=text placeholder="Tələb olunan məlumatlar" value=""></textarea><br>
                            </span>
                        </form>
                        <button type="button" class="add_product btn btn-lg btn-dark offset-5" >Yerləşdir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
