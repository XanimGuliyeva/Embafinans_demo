@extends('main/index')
@section('main')
    <span class="span-back" name="branch"></span>
    <span id="mainpage-span" hidden>1</span>
    <div class="content-center">
        <div class="main-content">

            <span class="main-caption-dif" style="margin-left:23px">Filiallar və əlaqə</span>
            <a href="/about" class="main-caption-add">Haqqımızda</a>
            <div class="row" style="margin-top:30px;margin-bottom:0px">
                <div class="col-lg-5">
                    <p class="map-caption" style="margin-left:23px">Baş ofis</p>
                </div>
                <div class="col-lg-6">
                    <p class="map-caption" style="margin-left:30px">Xəritə</p>
                </div>
            </div>
            <div class="main-map">
                <div class="row">
                    <div class="col-lg-4 branch-left">
                        @if(isset($contact_info))
                            <p class="branch-left-cap"> <span>Ünvan:</span> {{$contact_info->address}}</p>
                            <p class="branch-left-cap"><span>Telefon:</span> {{$contact_info->phone}}	</p>
                            <p class="branch-left-cap"><span>Fax:</span> {{$contact_info->fax}}</p>
                            <p class="branch-left-cap"><span>Qaynar xətt:</span> {{$contact_info->hotline}}</p>
                            <p class="branch-left-cap"><span>E-mail:</span>  {{$contact_info->email}}</p>
                        @endif
                        <p class="map-caption"style="margin-top:30px;margin-bottom:15px" >Əks-əlaqə formu</p>
                        <form id="add_contact">
                            @csrf
                            <input type="text" class="branch-input" name="name_surname" placeholder="Adınız və Soyadınız">
                            <input type="text" class="branch-input" name="email" placeholder="Email ünvanınız">
                            <textarea name="message" class="textarea" placeholder="Müraciətiniz" id="" cols="30" rows="10"></textarea>
                        </form>
{{--                        <div class="captcha col-lg-6">--}}
{{--                            <div class="spinner">--}}
{{--                                <label class="label">--}}
{{--                                    <input type="checkbox" onclick="$(this).attr('disabled','disabled');">--}}
{{--                                    <span class="checkmark"><span>&nbsp;</span></span>--}}
{{--                                    <span style="color:black;margin-left:5px">I am not robot</span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="logo">--}}
{{--                                <img src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/"/>--}}
{{--                                <p>reCAPTCHA</p>--}}
{{--                                <small>Privacy - Terms</small>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-lg-6" style="padding-top:15px">
                            <a style="margin-left:0px;" href="#" class="send add_contact">Göndər</a>
                        </div>
                    </div>

                    <div class="col-lg-7 branch-right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.1060445192957!2d49.823248815648235!3d40.38434226553217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9a413bdc01%3A0x14f8de92921212c3!2sEMBAfinans!5e0!3m2!1sen!2s!4v1611218321848!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border-radius:7px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                </div>
            </div>
            <div id="connection" class="connection">
                <div class="col-lg-4 connection-left">
                    <div id="span-x" class="span-x"><i class="fas fa-times"></i></div>
                    <span  class="main-caption-add connection-cap">Filiallar</span> <br>
                    <select class="connect-select" >
                        <option value="cty">Şəhər</option>
                        <option value="Ağcabədi" selected>Ağcabədi</option>
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
                    <p class="map-caption" style="margin:20px 0px 20px 35px;">Ünvan</p>
                    <div class="connections-left">
                    <i class="fas fa-chevron-down down-icon"></i>
                    <div class="connections">
                        <div class="address row">
                            <div class="col-lg-1 address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="col-lg-10 address-padding">
                                <p class="address-caption">Atatürk Embawood</p>
                                <p class="address-info">Nərimanov ray., Atatürk pros. 37</p>
                                <p class="address-info">Tel: 012-563-58-38</p>
                            </div>
                        </div>
                        <div class="address row">
                            <div class="col-lg-1 address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="col-lg-10 address-padding">
                                <p class="address-caption">Atatürk Embawood</p>
                                <p class="address-info">Nərimanov ray., Atatürk pros. 37</p>
                                <p class="address-info">Tel: 012-563-58-38</p>
                            </div>
                        </div>
                        <div class="address row">
                            <div class="col-lg-1 address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="col-lg-10 address-padding">
                                <p class="address-caption">Atatürk Embawood</p>
                                <p class="address-info">Nərimanov ray., Atatürk pros. 37</p>
                                <p class="address-info">Tel: 012-563-58-38</p>
                            </div>
                        </div>
                        <div class="address row">
                            <div class="col-lg-1 address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="col-lg-10 address-padding">
                                <p class="address-caption">Atatürk Embawood</p>
                                <p class="address-info">Nərimanov ray., Atatürk pros. 37</p>
                                <p class="address-info">Tel: 012-563-58-38</p>
                            </div>
                        </div>
                        <div class="address row">
                            <div class="col-lg-1 address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="col-lg-10 address-padding">
                                <p class="address-caption">Atatürk Embawood</p>
                                <p class="address-info">Nərimanov ray., Atatürk pros. 37</p>
                                <p class="address-info">Tel: 012-563-58-38</p>
                            </div>
                        </div>
                        <div class="address row">
                            <div class="col-lg-1 address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="col-lg-10 address-padding">
                                <p class="address-caption">Atatürk Embawood</p>
                                <p class="address-info">Nərimanov ray., Atatürk pros. 37</p>
                                <p class="address-info">Tel: 012-563-58-38</p>
                            </div>
                        </div>
                        <div class="address row">
                            <div class="col-lg-1 address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="col-lg-10 address-padding">
                                <p class="address-caption">Atatürk Embawood</p>
                                <p class="address-info">Nərimanov ray., Atatürk pros. 37</p>
                                <p class="address-info">Tel: 012-563-58-38</p>
                            </div>
                        </div>
                        <div class="address row">
                            <div class="col-lg-1 address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="col-lg-10 address-padding">
                                <p class="address-caption">Atatürk Embawood</p>
                                <p class="address-info">Nərimanov ray., Atatürk pros. 37</p>
                                <p class="address-info">Tel: 012-563-58-38</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-8 connection-right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.1060445192957!2d49.823248815648235!3d40.38434226553217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9a413bdc01%3A0x14f8de92921212c3!2sEMBAfinans!5e0!3m2!1sen!2s!4v1611218321848!5m2!1sen!2s" width="100%" height="700px" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
