@extends('main/index')
@section('main')
<span class="span-back" name="news"></span>
<div class="content-center">
    <div class="main-content">
        <div class="news-caption-text row">
            <span class="main-caption-dif  col-lg-7">Xəbərlər</span>
        </div>
        <div class="news row ">
            @foreach($news as $news)
                <div class="col-lg-6 news-box">
                    <span class="news-text">{{date("d-m-Y", strtotime($news->created_at))}}</span> <br>
                    <div class="news-caption-text">{{$news->header}}</div>
                    <div class="card-item-button">
                        <a href="/innews/{{$news->id}}" title=""><i class="emba-right-arrow"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
