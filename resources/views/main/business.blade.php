@extends('main/index')
@section('main')
        <div class="content-center">
            <div class="main-content">
                <div class="vacavcy-caption-text row">
                @if(isset($category))
                    <span class="main-caption ">{{$category->category}}</span>
                @endif
                <a href="/allproducts" class="main-caption-add">Məhsullar</a>
                </div>
                <div class="product-consumer row">
                    @foreach($products as $product)
                    <div class="col-lg-5 consumer-box box1">
                        <span class="consumer-product">Məhsullarımız</span>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6" >
                                <p class="consmer-box-caption">{{$product->name}}</p>
                                <span>{{$product->about}}</span>
                                <div class="card-item-button">
                                    <a href="/furniture/{{$product->id}}" title=""><i class="emba-right-arrow"></i></a>
                                </div>
                            </div>

                            @if($product->choice == 'manat')
                            <div class="col-lg-6 consumer-main-box">
                                <div class="percent"><span class="value">{{$product->value}}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="26" viewBox="0 0 36 26">
                                        <g fill="none" fill-rule="evenodd">
                                            <g fill="#BE98BB">
                                                <g>
                                                    <path d="M430.771 136.903v4.646c8.673.985 15.41 8.347 15.41 17.283 0 1.136-.109 2.246-.316 3.321h-4.89c.288-1.058.441-2.172.441-3.321 0-6.3-4.612-11.523-10.644-12.475v11.546l-4 2V146.36c-6.019.965-10.616 6.181-10.616 12.47 0 1.15.153 2.264.441 3.322h-4.89c-.207-1.075-.316-2.185-.316-3.321 0-8.926 6.722-16.281 15.38-17.28v-2.65l4-2z" transform="translate(-1057 -429) translate(646 292.847)"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <span class="monthly">{{$product->term}}</span>
                            </div>
                            @elseif($product->choice == 'percent')
                                <div class="col-lg-6 consumer-main-box">
                                    <div class="percent">
                                    <span class="as">%</span>
                                    <span class="value">{{$product->value}}</span>
                                    </div>
                                    <span class="monthly">{{$product->term}}</span>
                                </div>
                            @elseif($product->choice == 'image')
                                <div class="col-lg-5 card-image">
                                    <img src="{{asset('images/'.$product->choice_img)}}" alt="">
                                </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
@endsection
