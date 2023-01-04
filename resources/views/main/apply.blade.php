@extends('main/index')
@section('main')
<div class="content-center">
    <div class="main-content">
        <span class="main-caption">İşə müraciət formasi</span>
        <a href="/vacancy" class="main-caption-add">Bütün  vakansiyalar</a>
        <div class="apply-caption">İş  üçün müraciət etmək üçün CV-nizi aşağıdakı formaya doldurub bizə göndərin</div>
        <div class="applies">
            <form id="add_apply">
                @csrf
                <input type="text" name="name" placeholder="Adınız">
                <input type="text" name="surname" placeholder="Soyadınız"> <br>
                <input type="text" name="phone" placeholder="Telefon">
                <input type="text" name="email" placeholder="E-mail">
                <input type="file" name="cv">
            </form>
        </div>
        <a class="send col-lg-6 add_apply">Göndər</a>
    </div>
</div>
@endsection
