@extends('main/index')
@section('main')
    <span class="span-back" name="finance"></span>
    <div class="content-center">
        <div class="main-content">
            <div class="finance-caption row">
                <span class="main-caption-dif ">Maliyyə tərəfdaşlığı</span>
            </div>
            <div class="finance row ">
                @foreach($finances as $finance)
                    <div class="col-lg-5 finance-box">
                        <div class="finance-caption-text">{{$finance->header}}</div>
                        <hr>
                        <p class="about-finance">{!! $finance->content !!}</p>
                        <div class="div"><a class="send " href="/support" >Online müraciət</a></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
