@extends('main/index')
@section('main')
<span class="span-back" name="vacancy"></span>
<div class="content-center">
    <div class="main-content">
        <div class="vacancy-caption-text row">
            <span class="main-caption-dif  col-lg-7">Vakansiyalar</span>
            <a class="send col-lg-4" href="/apply" style="margin-left: 90px;">işə müraciət formu</a>
        </div>
        <div class="vacancies row ">
            @foreach($vacancies as $vacancy)
                <a href="invacancy/{{$vacancy->id}}" title="">
                <div class="col-lg-6 vacancy-box">

                    <div class="vacancy-caption">{{$vacancy->header}}</div>
                    <hr>
                    <span class="vacancy-text">Şəhər:</span><span class="vacancy-text">{{$vacancy->city}}</span> <br>
                    <span class="vacancy-text">Son müraciət tarixi:</span><span class="vacancy-text">{{$vacancy->deadline}}</span> <br>
                    <div class="card-item-button">
                        <i class="emba-right-arrow"></i>
                    </div>

                </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
