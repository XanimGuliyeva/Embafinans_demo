@extends('admin.index')
@section('admin')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vakansiya əlavə et</h4>
                    </div>
                    <div class="card-body">
                        <input class="form-control" name=header type=text placeholder="Başlıq" value=""><br>
                        <select style="color: #525f7f;" name="city" class="form-control">
                            <option value="cty" hidden selected>Şəhər</option>
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
                        </select><br>
                        <input type="date" name="deadline" class="form-control"><br>
                        <textarea name="text" id="myTextarea" class="tinymce"></textarea>
                        <br>
                        <input name=image type=file id="upload" hidden onchange=""><br>
                        <button type="button" class="add_career btn btn-lg btn-dark offset-5" >Yerləşdir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
