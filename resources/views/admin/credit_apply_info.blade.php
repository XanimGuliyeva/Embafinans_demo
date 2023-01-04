@extends('admin.index')
@section('admin')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Kredit müraciəti haqqında ətraflı məlumat</h4>
                    </div>
                    <div class="card-body">
                        <div style="font-size: 16px;">
                            Kreditin məqsədi
                            <p>{{$credit_apply->purpose}}</p><br>
                            Kreditin məbləği
                            <p>{{$credit_apply->amount}}</p><br>
                            Kreditin müddəti
                            <p>{{$credit_apply->term}}</p><br>
                            Ödəniləcək aylıq məbləğ
                            <p>{{$credit_apply->monthly_payment}}</p><br>
                        </div>
                        <div style="font-size: 16px;">
                            Sifarişçinin adı, soyadı, atasının adı
                            <p>{{$credit_apply->long_name}}</p><br>
                            Sifarişçinin faktiki ünvanı
                            <p>{{$credit_apply->address}}</p><br>
                            Sifarişçinin qeydiyyat ünvanı
                            <p>{{$credit_apply->register_address}}</p><br>
                            Sifarişçinin doğum tarixi
                            <p>{{$credit_apply->birthday}}</p><br>
                        </div>
                        <div style="font-size: 16px;">
                            Sifarişçinin işlədiyi təşkilat
                            <p>{{$credit_apply->organization}}</p><br>
                            Sifarişçinin vəzifəsi
                            <p>{{$credit_apply->position}}</p><br>
                            Sifarişçinin işlədiyi müddət
                            <p>{{$credit_apply->work_term}}</p><br>
                            Sifarişçinin aylıq əmək haqqı
                            <p>{{$credit_apply->monthly_salary}}</p><br>
                        </div>
                        <div style="font-size: 16px;">
                            Sifarişçinin ev telefonu
                            <p>{{$credit_apply->home_phone}}</p><br>
                            Sifarişçinin mobil telefonu
                            <p>{{$credit_apply->mobile_phone}}</p><br>
                            Sifarişçinin iş telefonu
                            <p>{{$credit_apply->work_phone}}</p><br>
                            Sifarişçinin e-poçt ünvanı
                            <p>{{$credit_apply->email}}</p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
