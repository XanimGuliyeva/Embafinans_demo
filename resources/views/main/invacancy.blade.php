@extends('main/index')
@section('main')
<span class="span-back" name="vacancy"></span>
        <div class="content-center">
            @if(isset($vacancy))
            <div class="main-content">
                <div class="vacavcy-caption-text row">
                <span class="main-caption-dif ">Vakansiyalar</span>
                <a href="/vacancy" class="main-caption-add">Bütün  vakansiyalar</a>
                </div>
                <div class="apply-vacancy row">
                    <div class="col-lg-5">
                        <div class="invacancy-caption">{{$vacancy->header}}</div>
                    </div>
                <div class="col-lg-4"  style="margin-top: 25px;">
                    <span>Şəhər:</span>
                    <span>{{$vacancy->city}}</span> <br>
                    <span>Son müraciət tarixi:</span>
                    <span>{{$vacancy->deadline}}</span>
                </div>
                    <div class="col-lg-3" style="margin-top: 25px;">
                        <a href="" class="send">Online müraciət</a>
                    </div>
                </div>
                <hr>
                <div class="about-vacancies row ">
                    {!! $vacancy->content !!}
                </div>
            </div>
            @endif
        </div>
@endsection
