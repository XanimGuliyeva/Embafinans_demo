@extends('main/index')
@section('main')
<span class="span-back" name="news"></span>
<div class="content-center">
    @if(isset($news))
    <div class="main-content">
        <div class="vacavcy-caption-text row p-0" >
            <span class="main-caption-dif  col-lg-9" style="padding-left:0px;">Xəbərlər</span>
            <a class="all-news col-lg-2" href="" >Bütün xəbərlər</a>
        </div>
        <div class="innews row">
            <span class="innews-text">{{date("d-m-Y", strtotime($news->created_at))}}</span> <br>
            {!! $news->content !!}
        </div>
    </div>
    @endif
</div>
@endsection
