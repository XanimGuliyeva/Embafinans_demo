<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, target-densitydpi=device-dpi, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="description" lang="az" content="Embafinans" />
    <meta name="keywords" lang="az" content="" />
    <meta name="author" content="Embafinans" />
    <meta name="reply-to" content="info@embafinans.az" />
    <meta name="distribution" content="Global" />
    <meta name="robots" content="index, follow" />
    <meta name="rating" content="General" />
    <meta http-equiv="pragma" content="No-Cache" />
    <meta name="Classification" content="General" />
    <meta name="resource-type" content="text/html" />
    <meta name="copyright" content="Embafinans" />
    <meta property="og:title" content="Ana səhifə - Embafinans" />
    <meta property="og:site_name" content="Embafinans" />
    <meta property="og:url" content=az" />
    <meta property="og:description" content="Embafinans" />
    <meta property="og:image" content=template/images/logo.png" />
    <base href="">
    <title>Ana səhifə - Embafinans</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('template/css/bootstrap-theme.min.css')}}" rel="stylesheet" />
    <link href="{{asset('template/css/site.css')}}" rel="stylesheet" />
    <link href="{{asset('template/css/media.css')}}" rel="stylesheet" />
    <link href="{{asset('template/css/fonts.css')}}" rel="stylesheet" />
    <link href="{{asset('template/css/icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/about.css')}}" rel="stylesheet" />
    <link href="{{asset('css/toast.css')}}" rel="stylesheet" />
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script src="{{asset('template/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('template/js/respond.min.js')}}"></script>

    <![endif]-->
</head>
<body>
<main>


    <script>
        var startTime = (new Date()).getTime();
        var preload = document.createElement("div");
        preload.className = "preloader";
        preload.innerHTML =
            '<div class="loader">\n' +
            '        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="77" viewBox="0 0 75 77">\n' +
            '            <g fill="none" fill-rule="evenodd">\n' +
            '                <g stroke="#FFF">\n' +
            '                    <path class=drawit recruiting-r d="M926.912 530.874V549H908.76v-15.995c.05-1.17.975-2.08 2.142-2.131h16.01zm54.643-3.313v19.217c-.053 1.17-.978 2.095-2.144 2.147h-43.235v-18.129h40.886c2.093 0 3.878-1.36 4.493-3.235zm-18.21-27.266v19.217c-.051 1.168-.975 2.094-2.144 2.141H908.76v-15.979c.05-1.166.975-2.092 2.144-2.144h47.947c2.097 0 3.88-1.362 4.494-3.235zM981.555 473v19.22c-.053 1.165-.978 2.093-2.144 2.144h-38.37v.013h-32.277v-15.995c.052-1.171.976-2.08 2.147-2.133h25.265v-.011h40.886c2.093 0 3.878-1.362 4.493-3.238z" transform="translate(-908 -473)"/>\n' +
            '                </g>\n' +
            '            </g>\n' +
            '        </svg>\n' +
            '    </div>';
        document.body.appendChild(preload);

        window.addEventListener("load", function() {
            var endTime = (new Date()).getTime();
            var loadtime = endTime - startTime;
            var total_time = 3000 - loadtime;
            setTimeout(function (){
                preload.className += " fade";
                setTimeout(function() {
                    preload.style.display = "none";
                }, 500);
                setTimeout(function (){
                    $('#nonable').animate({bottom: '-250px'});
                }, 1000)
            }, total_time)
        });
    </script>
    <style>
        .loader {
            width: 54px;
            height: 89px;
            position: absolute;
            margin: auto;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
        }
        .drawit {
            fill: transparent;
            stroke: white;
            stroke-width: 2px;
            stroke-dasharray: 300;
            stroke-dashoffset: -300;
            animation: dash 3s linear infinite alternate;
        }

        @keyframes dash {
            0% {
                stroke-dashoffset: -300;
            }
            30% {
                stroke-dashoffset: 0;
            }
            60% {
                stroke-dashoffset: 0;
            }
            100% {
                stroke-dashoffset: -300;
            }
        }
        .preloader {
            height: 100%;
            width: 100%;
            background: linear-gradient(244deg, #92278f, #0091c6);
            position: fixed;
            left: 0;
            top: 0;
            z-index: 10000;
            perspective: 1600px;
            perspective-origin: 20% 50%;
            transition: 0.5s all;
            opacity: 1;
        }
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .preloader.fade {
            opacity: 0;
        }
    </style>


    <header>
        <div class="container">
            <div class="header">
                <div class="header-left pull-left">
                    <h1 class="logo pull-left">
                        <a href="/" title="">
                            <img class="main_logo" src="{{asset('template/images/logo.svg')}}" alt=""/>
                        </a>
                    </h1>
                    <ul class="client-type pull-left">
                        <li class="active"><a href="#" title=""><span>Fərdi</span></a></li>
                        <li><a href="#" title=""><span>Korporativ</span></a></li>
                    </ul>
                </div>
                <div class="header-right pull-right">
                <div class="header-right pull-right">
                     <div class="fixed-top menu pull-right">
                        <a class="btn-lg text-light" id="openNav" onclick="openNav()">
                            <i class="emba-menu"></i>
                        </a>
                    </div>

                    <a href="#" onclick="openOwnNav()" class="pull-right std-button transparency own-cabinet border-opacity: 0.2" title="">Şəxsi kabinet</a>
                    <a href="tel:*1414" class="pull-right call-us" title=""><span>*1414</span></a>

                </div>
                <div class="dropdown pull-right languages">
                    <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        AZ
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">RU</a></li>
                        <li><a href="#">EN</a></li>
                    </ul>
                </div>





                    <div id="myOwnNav" class="menu1">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeOwnNav()">&times;</a>

                        <div class="signin" style="display: none">
                            <div class="div">
                                <span class="span1"><a href="#">Qeydiyyat</a></span> <br>
                            </div>

                            <div class="div">
                                <form id="add_users">
                                    @csrf
                                    <input type="text" placeholder="FIN">
                                    <input type="text" placeholder="Mobil nömrə">
                                    <input type="text" placeholder="E-mail">
                                    <div style="padding: 20px 0px"><a class="send add_user"  href="">Göndər</a></div>
                                    <input type="text" placeholder="Şifrə təyin edin">
                                    <input type="text" placeholder="Təkrar">
                                </form>
                            </div>
                        </div>

                        <div class="login">
                            <div class="div">
                                <span class="span1"><a href="#">Giriş</a></span> <br>
                            </div>
                            <div class="div">
                                <form id="add_users">
                                    @csrf
                                    <input type="text" placeholder="E-mail">
                                    <input type="text" placeholder="Şifrə">
                                    <div style="padding: 20px 0px"><a class="send add_user" style="white-space: nowrap" href="">Daxil ol</a></div>
                                    <br>
                                    <span>Hesab yaratmaq üçün <span id="qeydiyyat" style="text-decoration: underline;cursor: pointer" >qeydiyyatdan</span> keçin</span>
                                </form>
                            </div>
                        </div>

                        <div class="div" style="padding-bottom: 0px">
                            <p>Dəstək üçün</p>
                        </div>
                        <div class="div">
                            <span>Qaynar xətt: *1414</span>
                            <span>Telefon: +99412 4347862/ 63/ 64/ 65	</span>
                        </div>
                        <div class="div " style="border: none" id="end-div" >
                            <p>Filiallar şəbəkəsi</p>
                            <span class="span4">C 2021. EmbaFinans ASC. Bütün hüquqlar qorunur <br>
                            Sayt O! İdealand Agency-də hazırlanıb
                        </span>

                        </div>
                    </div>




                <div id="myNav" class="menu1">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="div">
                        <span class="span1"><a href="#">Naviqasiya</a></span> <br>
                    </div>
                    <div class="div">
                        <span class="span2"><a href="/allproducts">Məhsullar</a></span> <br> <br>
                        <span class="span2"><a href="/campaigns">Kampaniyalar</a></span>
                    </div>
                <div class="div">
                    <span class="span3"><a href="/about">Haqqımızda</a></span> <br>
                    <span class="span3"><a href="">Partnyorlar</a></span> <br>
                    <span class="span3"><a href="/finance">Tərəfdaşlıq</a></span> <br>
                    <span class="span3"><a href="/vacancy">Karyera</a></span> <br>
                    <span class="span3"><a href="/branch">Əlaqə</a></span>
                </div>
                <div class="div">
                    <button> <span>Kredit kalkulyatoru</span></button>
                    <button> <span>Onlayn ödəniş</span></button>
                </div>
                    <div class="div" id="end-div" style="border: none">
                        <p>Filiallar şəbəkəsi</p>
                        <span class="span4">C 2021. EmbaFinans ASC. Bütün hüquqlar qorunur <br>
                            Sayt O! İdealand Agency-də hazırlanıb
                        </span>

                    </div>
                </div>






                <div class="clearfix"></div>
            </div>
        </div>
        </div>
    </header>


    <section id="content">
        <div class="content-left pull-left">
            <div class="left-block">
                <div class="main-online-services">
                    <h4>Onlayn xidmətlər</h4>
                    <ul>
                        <li>
                            <a href="/allproducts" title="">Kredit üçün onlayn müraciət
                                <span><i class="emba-right-arrow"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">Kredit üzrə ödəniş etmək
                                <span><i class="emba-right-arrow"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">Onlayn kart sifariş etmək
                                <span><i class="emba-right-arrow"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="main-bottom-contacts">
                    <ul class="contacts">
                        <li>
                            <div class="contacts-header">Baş ofis:</div>
                            <div class="contacts-text">General Akim Abbasov, 73E, Bakı, AZ 1138</div>
                        </li>
                        <li>
                            <div class="contacts-header">Əlaqə nömrələrimiz:</div>
                            <div class="contacts-text">012 4347862/ 63/ 64/ 65</div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li><a href="#" target="_blank" title=""><i class="emba-youtube"></i></a></li>
                        <li><a href="#" target="_blank" title=""><i class="emba-instagram"></i></a></li>
                        <li><a href="#" target="_blank" title=""><i class="emba-twitter"></i></a></li>
                        <li><a href="#" target="_blank" title=""><i class="emba-facebook"></i></a></li>
                        <li><a href="#" target="_blank" title=""><i class="emba-google-plus"></i></a></li>
                        <li><a href="#" target="_blank" title=""><i class="emba-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
@yield('main')
{{--        <div id="nonable" data-name="2" class="main-bottom-carousel" style="z-index: 995;">--}}
{{--            <div class="cards" id="card_to_top">--}}
{{--                <div class="card">--}}
{{--                    <svg class="yy yy-v3" xmlns="http://www.w3.org/2000/svg" width="130" height="108" viewBox="0 0 86 63">--}}
{{--                        <g fill="none" fill-opacity="1" fill-rule="evenodd">--}}
{{--                            <g fill="rgba(255, 255, 255, 0.19)">--}}
{{--                                <g>--}}
{{--                                    <path d="M1228.772 62.66c40.491 0 75.042-26.352 86.95-62.66l-.018 62.652-86.932.009z" transform="translate(-1801 -537) translate(572.638 537)"></path>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <div class="card-header">--}}
{{--                        <div class="card-title pull-left"><span>Məhsullar</span></div>--}}
{{--                        <div class="pull-right"><a href="/allproducts" class="std-button transparency" title="">Bütün məhsullar</a></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <ul class="row">--}}
{{--                        @foreach($categories as $category)--}}

{{--                            <li class="col-lg-4">--}}
{{--                                <a href="/business/{{$category->id}}">--}}
{{--                                    <div class="percent"><span>%</span>{{$category->percent}}</div>--}}
{{--                                    <div class="card-item">--}}
{{--                                        <div class="card-item-category-title">Məhsullar</div>--}}
{{--                                        <div class="card-item-title" style="width: 100px">{{$category->name}}</div>--}}
{{--                                        <div class="card-item-desc">{{$category->about}}</div>--}}
{{--                                        <div class="card-item-button">--}}
{{--                                            <a href="/business/{{$category->id}}"><i class="emba-right-arrow"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <svg class="yy yy-v3" xmlns="http://www.w3.org/2000/svg" width="130" height="108" viewBox="0 0 86 63">--}}
{{--                        <g fill="none" fill-opacity="1" fill-rule="evenodd">--}}
{{--                            <g fill="rgba(255, 255, 255, 0.19)">--}}
{{--                                <g>--}}
{{--                                    <path d="M1228.772 62.66c40.491 0 75.042-26.352 86.95-62.66l-.018 62.652-86.932.009z" transform="translate(-1801 -537) translate(572.638 537)"></path>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <div class="card-header">--}}
{{--                        <div class="card-title pull-left"><span>Kampaniyalar</span></div>--}}
{{--                        <div class="pull-right"><a href="/campaigns" class="std-button transparency" title="">Bütün kampaniyalar</a></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <ul class="row">--}}
{{--                        @foreach($offer_cats as $offer_cat)--}}

{{--                                <li class="col-lg-4">--}}
{{--                                    <a href="/allcampaigns/{{$offer_cat->id}}">--}}
{{--                                    <div class="percent"><span>%</span>{{$offer_cat->percent}}</div>--}}
{{--                                    <div class="card-item">--}}
{{--                                        <div class="card-item-category-title">Məhsullar</div>--}}
{{--                                        <div class="card-item-title" style="width: 100px">{{$offer_cat->name}}</div>--}}
{{--                                        <div class="card-item-desc">{{$offer_cat->about}}</div>--}}
{{--                                        <div class="card-item-button">--}}
{{--                                            <a href="/allcampaigns/{{$offer_cat->id}}" title=""><i class="emba-right-arrow"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script>
    $('.supporter_cat').on('click', function (){
        var count = 0;
        $('.active_sup').removeClass('active_sup');
        $(this).find('a').addClass('active_sup');
        var active_cat = $(this).attr('id');
        if(active_cat == 'all'){
            $('.all-li .row #none-text').css('display','none');
            $('.supporter-block').each(function (){
                $(this).show();
            });
        }
        else{
            $('.supporter-block').each(function (){
                if ($(this).attr('id') != active_cat){
                    $(this).hide();
                }
                else{
                    $(this).show();
                    count++;
                }
            });
            if (count == 0){
                $('.all-li .row #none-text').css('display','block');
            }
            else{
                $('.all-li .row #none-text').css('display','none');
            }
        }
    });
</script>
<script src="{{asset('template/js/common.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/credit_apply.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
<script src="{{asset('js/applies.js')}}"></script>
<script src="{{asset('js/toast.js')}}"></script>
<script src="{{asset('js/calculator.js')}}"></script>
<script src="{{asset('js/partners.js')}}"></script>
<script src="{{asset('js/supporters.js')}}"></script>
{{--<script src="{{asset('js/users.js')}}"></script>--}}
</body>
</html>
