@extends('main/index')
@section('main')
<div class="content-center">
    <div class="main-content">
        <div class="main-slide-slogan">15,5% başlayan faizlərlə</div> <br>
        <div class=" py-5">
            <div class="output"  id="output">
                <h1 class="cursor" style="font-family: Gotham-Black;
   font-size:60px;
  font-weight: 900;
   font-stretch: normal;
   font-style: normal;
   linle-height: 0.89
   51;
   letter-spacing: -2.56px;
   color: #0091c6;"></h1>
                <p style="font-family: Gotham-Black;
   font-size:60px;
  font-weight: 900;
   font-stretch: normal;
   font-style: normal;
   line-height: 0.89;
   letter-spacing: -2.56px;
   color: #0091c6;"></p>
            </div>
        </div>
        <div class="button-block">
            <a href="" title="" class="std-button apply-btn blue">Müraciət et</a>
        </div>
    </div>
    <span id="mainpage-span" hidden>1</span>
    <div class="main-bottom-carousel">
        <div class="cards">
            <div class="card">
                <svg class="yy yy-v3" xmlns="http://www.w3.org/2000/svg" width="130" height="108" viewBox="0 0 86 63">
                    <g fill="none" fill-opacity="1" fill-rule="evenodd">
                        <g fill="rgba(255, 255, 255, 0.19)">
                            <g>
                                <path d="M1228.772 62.66c40.491 0 75.042-26.352 86.95-62.66l-.018 62.652-86.932.009z" transform="translate(-1801 -537) translate(572.638 537)"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <div class="card-header">
                    <div class="card-title pull-left"><span>Məhsullar</span></div>
                    <div class="pull-right"><a href="/allproducts" class="std-button transparency" title="">Bütün məhsullar</a></div>
                    <div class="clearfix"></div>
                </div>
                <ul class="row">
                    @foreach($categories as $category)

                        <li class="col-lg-4">
                            <a href="/business/{{$category->id}}">
                                <div class="percent"><span>%</span>{{$category->percent}}</div>
                                <div class="card-item">
                                    <div class="card-item-category-title">Məhsullar</div>
                                    <div class="card-item-title" style="width: 100px">{{$category->name}}</div>
                                    <div class="card-item-desc">{{$category->about}}</div>
                                    <div class="card-item-button">
                                        <a href="/business/{{$category->id}}"><i class="emba-right-arrow"></i></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="card">
                <svg class="yy yy-v3" xmlns="http://www.w3.org/2000/svg" width="130" height="108" viewBox="0 0 86 63">
                    <g fill="none" fill-opacity="1" fill-rule="evenodd">
                        <g fill="rgba(255, 255, 255, 0.19)">
                            <g>
                                <path d="M1228.772 62.66c40.491 0 75.042-26.352 86.95-62.66l-.018 62.652-86.932.009z" transform="translate(-1801 -537) translate(572.638 537)"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <div class="card-header">
                    <div class="card-title pull-left"><span>Kampaniyalar</span></div>
                    <div class="pull-right"><a href="/campaigns" class="std-button transparency" title="">Bütün kampaniyalar</a></div>
                    <div class="clearfix"></div>
                </div>
                <ul class="row">
                    @foreach($offer_cats as $offer_cat)
                        <li class="col-lg-4">
                            <a href="/allcampaigns/{{$offer_cat->id}}">
                                <div class="percent"><span>%</span>{{$offer_cat->percent}}</div>
                                <div class="card-item">
                                    <div class="card-item-category-title">Məhsullar</div>
                                    <div class="card-item-title" style="width: 100px">{{$offer_cat->name}}</div>
                                    <div class="card-item-desc">{{$offer_cat->about}}</div>
                                    <div class="card-item-button">
                                        <a href="/allcampaigns/{{$offer_cat->id}}" title=""><i class="emba-right-arrow"></i></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
