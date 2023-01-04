@extends('main/index')
@section('main')
<span class="span-back" name="partnership"></span>
<div class="content-center">
    <div class="main-content">
        <span class="main-caption">Partnyorluq müraciəti</span>
        <div class="applies">
            <form id="add_apply" class="partner-back col-lg-10 partner_add">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <input class="partnership-register" name="name" placeholder="Şirkətin adı *" type="text">
                       <div class="partner-select1">
                       <select class="partnership-register" name="city">
                            <option value="cty" style="display:none;visibility:hidden"  selected >Şəhər *</option>
                            <option value="Ağcabədi">Ağcabədi</option>
                            <option value="Ağdam">Ağdam</option>
                            <option value="Ağdaş">Ağdaş</option>
                            <option value="Ağstafa">Ağstafa</option>
                            <option value="Ağsu">Ağsu</option>
                            <option value="Astara">Astara</option>
                            <option value="Bakı">Bakı</option>
                            <option value="Balakən">Balakən</option>
                            <option value="Beyləqan">Beyləqan</option>
                            <option value="Bərdə">Bərdə</option>
                            <option value="Biləsuvar">Biləsuvar</option>
                            <option value="Cəbrayıl">Cəbrayıl</option>
                            <option value="Cəlilabad">Cəlilabad</option>
                            <option value="Culfa">Culfa</option>
                            <option value="Daşkəsən">Daşkəsən</option>
                            <option value="Dəliməmmədli">Dəliməmmədli</option>
                            <option value="Füzuli">Füzuli</option>
                            <option value="Gədəbəy">Gədəbəy</option>
                            <option value="Gəncə">Gəncə</option>
                            <option value="Goranboy">Goranboy</option>
                            <option value="Göyçay">Göyçay</option>
                            <option value="Göygöl">Göygöl</option>
                            <option value="Göytəpə">Göytəpə</option>
                            <option value="Hacıqabul">Hacıqabul</option>
                            <option value="Horadiz">Horadiz</option>
                            <option value="İmişli">İmişli</option>
                            <option value="İsmayıllı">İsmayıllı</option>
                            <option value="Kürdəmir">Kürdəmir</option>
                            <option value="Lerik">Lerik</option>
                            <option value="Lənkəran">Lənkəran</option>
                            <option value="Masallı">Masallı</option>
                            <option value="Mingəçevir">Mingəçevir</option>
                            <option value="Naftalan">Naftalan</option>
                            <option value="Naxçıvan">Naxçıvan</option>
                            <option value="Neftçala">Neftçala</option>
                            <option value="Oğuz">Oğuz</option>
                            <option value="Ordubad">Ordubad</option>
                            <option value="Qax">Qax</option>
                            <option value="Qazax">Qazax</option>
                            <option value="Qəbələ">Qəbələ</option>
                            <option value="Qobustan">Qobustan</option>
                            <option value="Quba">Quba</option>
                            <option value="Qubadlı">Qubadlı</option>
                            <option value="Qusar">Qusar</option>
                            <option value="Saatlı">Saatlı</option>
                            <option value="Sabirabad">Sabirabad</option>
                            <option value="Şabran">Şabran</option>
                            <option value="Salyan">Salyan</option>
                            <option value="Şamaxı">Şamaxı</option>
                            <option value="Samux">Samux</option>
                            <option value="Şəki">Şəki</option>
                            <option value="Şəmkir">Şəmkir</option>
                            <option value="Şərur">Şərur</option>
                            <option value="Şirvan">Şirvan</option>
                            <option value="Siyəzən">Siyəzən</option>
                            <option value="Sumqayıt">Sumqayıt</option>
                            <option value="Tərtər">Tərtər</option>
                            <option value="Tovuz">Tovuz</option>
                            <option value="Ucar">Ucar</option>
                            <option value="Xaçmaz">Xaçmaz</option>
                            <option value="Xırdalan">Xırdalan</option>
                            <option value="Xızı">Xızı</option>
                            <option value="Xudat">Xudat</option>
                            <option value="Yardımlı">Yardımlı</option>
                            <option value="Yevlax">Yevlax</option>
                            <option value="Zaqatala">Zaqatala</option>
                            <option value="Zərdab">Zərdab</option>
                        </select>
                       </div>
                        <input class="partnership-register" name="address" placeholder="Ünvan *" type="text">
                        <div class="partner-select2">
                        <select name="category" class="">
                            <option value="category" style="display:none" selected hidden>Kateqoriya *</option>
                            @foreach($partner_cats as $partner_cat)
                                <option value="{{$partner_cat->id}}">{{$partner_cat->category}}</option>
                            @endforeach
                        </select>
                        </div>
                        <input class="partnership-register" name="phone" placeholder="Telefon nömrəsi *" type="text">
                        <textarea name="about" cols="60" style="resize: none;" rows="10" placeholder="Qısa məlumat"></textarea>
                    </div>
                    <div class="col-lg-6">
                        <input class="partnership-register" name="contact_person" placeholder="Əlaqə saxlamaq üçün şəxs *" type="text">
                        <input class="partnership-register" name="email" placeholder="E-poçt ünvanı *" type="text">
                        <input class="partnership-register" name="website" placeholder="Veb-sayt" type="text">
                        <input class="partnership-register" name="director" placeholder="Direktorun adı, soyadı, ata adı*" type="text">
                        <input class="partnership-register" name="contact_phone" placeholder="Telefon nömrəsi *" type="text">  <br>
                        <label>Şirkət logosu</label>
                        <input class="partnership-register" name="image" type="file"><br>
                        <div style="text-align:center;width:75%;margin-top:30px">
                            <a href="#" class="send partner-send add_partner">Partnyor ol</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
