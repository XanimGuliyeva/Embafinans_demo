@extends('main/index')
@section('main')
    <span class="span-back" name="furniture"></span>

    <div class="content-center">
        @foreach($offers as $offer)
            <div class="main-content">
                <div class="furniture-caption-text" >
                    <span class="main-caption-dif " >{{$offer->name}}</span>
                    <a href="/allcampaigns/{{$offer->category_id}}" class="main-caption-add">{{$offer->category}}</a>
                    <a href="/campaigns" class="main-caption-add">Kompaniyalar</a>
                </div>
                <div class="span furniture-table" data-category="sertler">
                    <pre style="width: 40%; max-height: 58vh;">
                        {!! $offer->content !!}
                    </pre>
                </div>

                <div class="span" id="kalkulyator" data-category="kalkulyator" >
                    <p class="furniture-caption">Kalkulyator</p>
                    <input type="number" id="amount" class="input" placeholder="Məbləğ (AZN)"> <br>
                    <input type="number" id="term" class="input" placeholder="Müddət (AY)"> <br>
                    <input type="number" id="rate" class="input input3" placeholder="Faiz (%)"> <br>
                    <a href="#" class="send overcraftsend" id="calculate">Hesabla</a>
                    <span id="results"></span>
                </div>

                <div class="span" id="online" data-category="online" >
                    <div class="credit-form row col-lg-8 scss">
                        <form id="add_credit_apply">
                            @csrf
                            <div class="col-lg-5">
                                <span class="form-span">Kredit məlumatları</span>
                                <input type="text" name="purpose" placeholder="Kreditin məqsədi (qısa) *">
                                <input type="text" name="amount" class="small-input" placeholder="Məbləği *">
                                <input type="text" name="term" class="small-input" placeholder="Müddət *">
                                <input type="text" name="monthly_payment" placeholder="Ödəyə biləcəyiniz aylıq məbləq *">
                            </div>
                            <div class="col-lg-5">
                                <span class="form-span">İş yeri məlumatları</span>
                                <input type="text" name="organization" placeholder="İşlədiyiniz təşkilat">
                                <input type="text" name="position" placeholder="Vəzifəniz">
                                <input type="text" name="work_term" class="small-input" placeholder="İşlədiyiniz müddət">
                                <input type="text" name="monthly_salary" class="small-input" placeholder="Aylıq əmək haqqı">
                            </div>
                            <div class="col-lg-5 box2" >
                                <span class="form-span">Müraciətçi məlumatları</span>
                                <input type="text" name="long_name" placeholder="Ad, Soyad, Ata adı">
                                <input type="text" name="address" placeholder="Faktiki yaşadığınız ünvan">
                                <input type="text" name="register_address" placeholder="Qeydiyyat ünvanınız">
                                <input type="text" name="birthday" placeholder="Doğum tarixi">
                            </div>
                            <div class="col-lg-5 box2" >
                                <span class="form-span">Əlaqə məlumatları</span>
                                <input type="text" name="home_phone" placeholder="Ev telefonunuz">
                                <input type="text" name="mobile_phone" placeholder="Mobil telefonunuz">
                                <input type="text" name="work_phone" placeholder="İş telefonunuz">
                                <input type="text" name="email" placeholder="E-mail">
                            </div>
                            <label class="col-lg-6 checkmark"><input  type="checkbox" name="agree_terms" value="checkbox">Məlumatlarımın emalına razılıq verirəm</label>
                        </form>
                        <a href="#" class="send col-lg-6 add_credit_apply" id="{{$offer->id}}">Göndər</a>
                    </div>
                </div>
                <div class="furniture-image" style="z-index: 0;">

                    <div class="image" style="width:600px;height:355px;">
                        <img src="{{asset('images/'.$offer->image)}}" alt="">
                    </div>
                    <div class="svg">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="859" height="305" viewBox="0 0 859 305">
                            <g fill="none" fill-rule="evenodd" opacity=".136">
                                <g fill="#FFF">
                                    <g>
                                        <path d="M857.947 0v272.477c-.629 16.526-11.532 29.682-25.27 30.397H380.454v.184H.055V76.301c.61-16.609 11.497-29.5 25.304-30.235H323.12v-.163h481.873c24.66 0 45.701-19.305 52.953-45.903" transform="translate(-1020 -106) matrix(-1 0 0 1 1878.612 106.894)"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="send-message">
                        <a data-category="kalkulyator"  class="send send2 send_message">Kalkulyator</a>
                        <a data-category="online"  class="send send send_message">Online sifariş</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
