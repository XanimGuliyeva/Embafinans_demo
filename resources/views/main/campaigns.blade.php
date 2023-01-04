@extends('main/index')
@section('main')
    <div class="content-center">
        <div class="main-content">
            <div class="vacavcy-caption-text">
                <span class="main-caption ">Kompaniyalar</span>
            </div>
            <div class="card allproducts card--current" >
                <ul class="row ">
                    @foreach($categories as $category)
                        <li class="col-lg-4" >
                            <a href="/allcampaigns/{{$category->id}}" title="">
                            <div class="percent"><span>%</span>{{$category->percent}}</div>
                            <div class="card-item">

                                <div class="card-item-category-title">Məhsullar</div>
                                <div class="card-item-title" style="width: 100px">{{$category->name}}</div>
                                <div class="card-item-desc">{{$category->about}}</div>
                                <div class="card-item-button">
                                    <a href="/allcampaigns/{{$category->id}}" title=""><i class="emba-right-arrow"></i></a>
                                </div>
                            </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
@endsection
