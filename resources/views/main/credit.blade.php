@extends('main/index')
@section('main')
<span class="span-back" name="credit"></span>
<div class="content-center">
    <div class="main-content">
        <span class="main-caption ">Təşkilatı struktur</span> <br>
        <div class="credit-form row col-lg-8">
            <form id="add_credit_apply">
                @csrf
                <div class="col-lg-6">
                    <span class="form-span">Kredit məlumatları</span>
                    <input type="text" name="purpose" placeholder="Kreditin məqsədi (qısa) *">
                    <input type="text" name="amount" class="small-input" placeholder="Məbləği *">
                    <input type="text" name="term" class="small-input" placeholder="Müddət *">
                    <input type="text" name="monthly_payment" placeholder="Ödəyə biləcəyiniz aylıq məbləq *">
                </div>
                <div class="col-lg-6">
                    <span class="form-span">İş yeri məlumatları</span>
                    <input type="text" name="organization" placeholder="İşlədiyiniz təşkilat">
                    <input type="text" name="position" placeholder="Vəzifəniz">
                    <input type="text" name="work_term" class="small-input" placeholder="İşlədiyiniz müddət">
                    <input type="text" name="monthly_salary" class="small-input" placeholder="Aylıq əmək haqqı">
                </div>
                <div class="col-lg-6 box2" >
                    <span class="form-span">Müraciətçi məlumatları</span>
                    <input type="text" name="long_name" placeholder="Ad, Soyad, Ata adı">
                    <input type="text" name="address" placeholder="Faktiki yaşadığınız ünvan">
                    <input type="text" name="register_address" placeholder="Qeydiyyat ünvanınız">
                    <input type="text" name="birthday" placeholder="Doğum tarixi">
                </div>
                <div class="col-lg-6 box2" >
                    <span class="form-span">Əlaqə məlumatları</span>
                    <input type="text" name="home_phone" placeholder="Ev telefonunuz">
                    <input type="text" name="mobile_phone" placeholder="Mobil telefonunuz">
                    <input type="text" name="work_phone" placeholder="İş telefonunuz">
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <label class="col-lg-6 checkmark"><input  type="checkbox" name="agree_terms" value="checkbox">Məlumatlarımın emalına razılıq verirəm</label>
                <a class="send col-lg-6 add_credit_apply" id="general">Göndər</a>
            </form>
        </div>
    </div>
</div>
@endsection
