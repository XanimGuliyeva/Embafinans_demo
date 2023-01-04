@extends('main/index')
@section('main')
    <div class="content-center">
        <div class="main-content">
            <div class="tab-content">
                @foreach($about as $about)

                    <div  id="Haqqımızda" class="tab-pane fade in active">
                        <div class="abouts">
                            <span class="main-caption" >Haqqımızda</span>
                            <p class="main-text-about">
                                {!! $about->content !!}
                            </p>
                        </div>
                        <div class="numbers row col-lg-10">
                            <div class="col-lg-3 about-box1">
                                <p class="numbers-caption counter"  >{{$about->employee}}</p>
                                <p data-aos="fade-up" data-aos-duration="500" class="caption-numbers" >əməkdaş</p>
                                <p data-aos="fade-up" data-aos-duration="1000" class="about-numbers">hal-hazırda çalışır şirkətin ofislərində və satış nöqtələrində</p>
                            </div>
                            <div class="col-lg-3 about-box">
                                <p class="numbers-caption counter" >{{$about->credit}}</p>
                                <p data-aos="fade-up" data-aos-duration="500" class="caption-numbers" >kredit </p>
                                <p data-aos="fade-up" data-aos-duration="1000" class="about-numbers">kredit ərizəsi təsdiqlənir hər ay bütün satış  nöqtələrimizdə</p>
                            </div>
                            <div class="col-lg-3 about-box">
                                <p class="numbers-caption counter" >{{$about->portfolio}}</p>
                                <p data-aos="fade-up" data-aos-duration="500" class="caption-numbers" >mln.manat</p>
                                <p data-aos="fade-up" data-aos-duration="1000" class="about-numbers">dövriyyə edilən illik kredit portfelimiz</p>
                            </div>
                            <div class="col-lg-3 about-box about-box4">
                                <p class="numbers-caption counter" >{{$about->partner}}</p>
                                <p data-aos="fade-up" data-aos-duration="500" class="caption-numbers" >partnyor</p>
                                <p data-aos="fade-up" data-aos-duration="1000" class="about-numbers">şirkəti ilə əməkdaşlıq  etməyimizdən qürür duyuruq</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div  id="Təşkilatıstruktur" class="tab-pane fade">
                    <span class="main-caption ">Təşkilatı struktur</span>
                    <span class="main-caption-add">Haqqımızda</span>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>

                <div id="Partnyorlar" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-6">
                            <span class="main-caption" >Partnyorlar</span>
                        </div>
                        <div class="col-lg-6" style="padding-top: 35px;text-align:right">
                            <a class="be-partner" href="/partnership">Partnyor ol</a>
                        </div>
                    </div>
                    <ul class="nav nav-pills mb-3 partner-nav"  role="tablist">
                        <li class="nav-item active supporter_cat" id="all">
                            <a class="nav-link active_sup"  href="#" >Hamısı</a>
                        </li>
                        @foreach($partner_cats as $partner_cat)
                            <li class="nav-item supporter_cat" id="{{$partner_cat->id}}">
                                <a class="nav-link" href="#">{{$partner_cat->category}}</a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="all-li">
                        <div class="row">

                            <div class="col-lg-3 partnership-box">
                                <p class="partnership-cap">Burada <br> sizi görmək <br> istəyirik</p>
                                <a href="/partnership" class="send">Partnyor ol</a>
                            </div>
                            <h1 id="none-text" style="display: none;">Bu kateqoriyaya uyğun nəticə yoxdur!</h1>

                            @foreach($partners as $partner)
                                @if($partner->status == 1)
                                    <div class="col-lg-3 partner supporter-block" id="{{$partner->cat_id}}">
                                        <p class="partner-cap">{{$partner->category}}</p>
                                        <div class="partnyor">
                                            <div class="partner-image">
                                                <img src="{{asset('/images/'.$partner->image)}}" alt="">
                                            </div>
                                            <div class="partner-text">
                                                <p class="partner-text-cap"> {{$partner->name}}</p>
                                                <div class="card-item-button">
                                                    <a href="" title=""><i class="emba-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
                @foreach($missions as $mission)
                    <div id="Missiya" class="tab-pane fade missiya">
                        <span class="main-caption">Baxış və missiyamız</span>
                        <span class="main-caption-add">Haqqımızda</span>
                        <div class="mission-text">
                            <p class="main-text-about">
                                {!! $mission->content !!}
                            </p>
                        </div>
                    </div>
                @endforeach
                <div id="Filiallar" class="tab-pane fade">
                    <h3>Menu 4</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div id="Hesabatlar" class="tab-pane fade">
                    <span class="main-caption ">Hesabatlar</span>
                    <span class="main-caption-add">Haqqımızda</span>
                    <div class="main-table">
                        <table class="table">
                            <tbody>
                            @foreach($reports as $report)
                                <tr>
                                    <td class="td1">{{$report->year}}</td>
                                    <td class="td2">{{$report->name}}</td>
                                    <td class="td3 row">
                                        <div class="col-lg-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="35" viewBox="0 0 31 35">
                                                <g fill="none" fill-rule="evenodd">
                                                    <g fill-rule="nonzero">
                                                        <g>
                                                            <path fill="#E2E5E7" d="M6.375 0C5.206 0 4.25.956 4.25 2.125v29.75c0 1.169.956 2.125 2.125 2.125h21.25c1.169 0 2.125-.956 2.125-2.125V8.5L21.25 0H6.375z" transform="translate(-1559 -322) translate(1559.44 322.52)"/>
                                                            <path fill="#B0B7BD" d="M23.375 8.5h6.375L21.25 0v6.375c0 1.169.956 2.125 2.125 2.125z" transform="translate(-1559 -322) translate(1559.44 322.52)"/>
                                                            <path fill="#CAD1D8" d="M29.75 14.875L23.375 8.5 29.75 8.5z" transform="translate(-1559 -322) translate(1559.44 322.52)"/>
                                                            <path fill="#F15642" d="M25.5 27.625c0 .584-.478 1.063-1.063 1.063H1.063C.479 28.688 0 28.209 0 27.625V17c0-.584.478-1.063 1.063-1.063h23.375c.584 0 1.062.479 1.062 1.063v10.625z" transform="translate(-1559 -322) translate(1559.44 322.52)"/>
                                                            <path fill="#FFF" d="M4.631 20.131c0-.28.221-.586.577-.586h1.963c1.105 0 2.1.74 2.1 2.157 0 1.343-.995 2.09-2.1 2.09H5.752v1.123c0 .374-.238.585-.544.585-.28 0-.577-.211-.577-.585V20.13zm1.121.484v2.116h1.419c.57 0 1.02-.502 1.02-1.03 0-.593-.45-1.086-1.02-1.086H5.752zM10.934 25.5c-.28 0-.586-.153-.586-.526v-4.826c0-.305.306-.527.586-.527h1.946c3.882 0 3.797 5.879.076 5.879h-2.022zm.536-4.842v3.806h1.41c2.294 0 2.396-3.806 0-3.806h-1.41zM18.054 20.726v1.35h2.166c.306 0 .612.307.612.603 0 .28-.306.51-.612.51h-2.166v1.784c0 .297-.211.526-.509.526-.374 0-.602-.229-.602-.526v-4.826c0-.305.23-.527.602-.527h2.982c.374 0 .595.222.595.527 0 .272-.22.578-.595.578h-2.473v.001z" transform="translate(-1559 -322) translate(1559.44 322.52)"/>
                                                            <path fill="#CAD1D8" d="M24.438 28.688H4.25v1.062h20.188c.584 0 1.062-.478 1.062-1.063v-1.062c0 .584-.478 1.063-1.063 1.063z" transform="translate(-1559 -322) translate(1559.44 322.52)"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="col-lg-9"><a href="reports/{{$report->report}}" download>Hesabatı yüklə</a></td></div>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document" style="width: 26vw; height: 80vh;">
                    <div class="modal-content" style="width: 26vw; height: 80vh;">
                        <div class="modal-body" style="padding: 0;">
                            <img class="leader_main" src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="Komanda" class=" rehberlik tab-pane fade">
                <span class="main-caption">Rəhbərlik</span>
                <span class="main-caption-add">Haqqımızda</span>
                <div class="row team">
                    <div class="left col-lg-4">
                        <ul class="nav nav-pills">
                            @foreach($leader_cats as $key => $leader_cat)
                                <li name="leader_category" @if($key == 0) class="active" id="active_leader_cat" @endif><a name="{{$leader_cat->id}}" data-toggle="tab" href="#">{{$leader_cat->category}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="right col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" style="height: 100%;">
                                <div class="sections" id="leaders">
                                    <h3 id="none_text2" style="display: none;">Bu kateqoriyaya uyğun nəticə yoxdur!</h3>
                                    @foreach($leaders as $leader)
                                        <div class="section-part" id="{{$leader->category}}">
                                            <div class="image col-lg-4 leader_main_link" data-toggle="modal" data-target="#exampleModalLong" id="{{asset('profile_pics/'.$leader->profile)}}">
                                                <img style="border-radius: 10px;" src="{{asset('profile_pics/'.$leader->profile)}}" alt="">
                                            </div>
                                            <div class="text col-lg-8">
                                                <p class="person">{{$leader->full_name}}</p>
                                                <p class="position">{{$leader->position}}</p>
                                                <div class="leader_links">
                                                    <a class="link" style="padding-right: 5px;" href="mailto:{{$leader->email_link}}">email</a>
                                                    <div class="link" style="padding-right: 5px;">|</div>
                                                    <a class="link" style="padding-right: 5px;" href="{{$leader->linkedin_link}}">linkedin</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="Tariximiz"  class="tab-pane fade">
                <p class="main-caption" >İnkişaf tariximiz</p>
                <section class="timeline">
                    <div class="overlay"></div>
                    <ol>
                        <li  class="li1" style="width: 50px;">
                            <div class="divv" data-aos="fade-up"
                                 data-aos-duration="500" style="-webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(0, 145, 198, 0.33);">
                                <time >2001 </time>
                            </div>
                            <span  data-aos="fade-up"
                                   data-aos-duration="1000" class="span1 divv">Əsası 2012-ci ildə qoyulan və <br> həmin ildən fəaliyyətə  <br> başlayan  “EmbaFinans” QSC <br> müxtəlif növ kreditlərin <br>  verilməsi xidmətini göstərir.</span>
                        </li>
                        <li class="li2">
                            <div class="divv" data-aos="fade-down"
                                 data-aos-duration="500" style="  -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(64, 161, 206, 0.33);">
                                <time>2004 </time>
                            </div>
                            <span  data-aos="fade-down"
                                   data-aos-duration="1000" class="span2 divv">Əsası 2012-ci ildə qoyulan <br> və həmin ildən fəaliyyətə <br> başlayan “EmbaFinans” QSC müxtəlif </span>
                        </li>
                        <li class="li1">
                            <div class="divv" data-aos="fade-up"
                                 data-aos-duration="500" style=" -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(113, 179, 215, 0.33);">
                                <time>2008</time>
                            </div>
                            <span data-aos="fade-up"
                                  data-aos-duration="1000" class="span1 divv">Əsası 2012-ci ildə qoyulan və <br> həmin ildən fəaliyyətə  <br> başlayan  “EmbaFinans” QSC <br> müxtəlif növ kreditlərin <br>  verilməsi xidmətini göstərir.</span>
                        </li>
                        <li class="li2">
                            <div class="divv" data-aos="fade-down"
                                 data-aos-duration="500" style="  -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(64, 161, 206, 0.33);">
                                <time>2004 </time>
                            </div>
                            <span data-aos="fade-down"
                                  data-aos-duration="1000" class="span2 divv">Əsası 2012-ci ildə qoyulan <br> və həmin ildən fəaliyyətə <br> başlayan “EmbaFinans” QSC müxtəlif </span>
                        </li>
                        <li class="li1">
                            <div class="divv" data-aos="fade-up"
                                 data-aos-duration="500" style="  -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(171, 213, 172, 0.33);">
                                <time>2008</time>
                            </div>
                            <span data-aos="fade-up"
                                  data-aos-duration="1000" class="span1 divv">Əsası 2012-ci ildə qoyulan və <br> həmin ildən fəaliyyətə  <br> başlayan  “EmbaFinans” QSC <br> müxtəlif növ kreditlərin <br>  verilməsi xidmətini göstərir.</span>
                        </li>
                        <li class="li2">
                            <div class="divv" data-aos="fade-down"
                                 data-aos-duration="500" style="  -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(64, 161, 206, 0.33);">
                                <time>2004 </time>
                            </div>
                            <span data-aos="fade-down"
                                  data-aos-duration="1000" class="span2 divv">Əsası 2012-ci ildə qoyulan <br> və həmin ildən fəaliyyətə <br> başlayan “EmbaFinans” QSC müxtəlif </span>

                        </li>
                        <li class="li1">
                            <div class="divv" data-aos="fade-up"
                                 data-aos-duration="500" style=" -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(87, 180, 113, 0.2);">
                                <time>2008</time>
                            </div>
                            <span data-aos="fade-up"
                                  data-aos-duration="1000" class="span1 divv">Əsası 2012-ci ildə qoyulan və <br> həmin ildən fəaliyyətə  <br> başlayan  “EmbaFinans” QSC <br> müxtəlif növ kreditlərin <br>  verilməsi xidmətini göstərir.</span>

                        </li>
                        <li class="li2">
                            <div class="divv" data-aos="fade-down"
                                 data-aos-duration="500" style="  -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(64, 161, 206, 0.33);">
                                <time>2004 </time>
                            </div>
                            <span data-aos="fade-down"
                                  data-aos-duration="1000" class="span2 divv">Əsası 2012-ci ildə qoyulan <br> və həmin ildən fəaliyyətə <br> başlayan “EmbaFinans” QSC müxtəlif </span>
                        </li>
                        <li class="li1">
                            <div class="divv" data-aos="fade-up"
                                 data-aos-duration="500" style="  -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(171, 213, 172, 0.33);">
                                <time>2008</time>
                            </div>
                            <span data-aos="fade-up"
                                  data-aos-duration="1000" class="span1 divv">Əsası 2012-ci ildə qoyulan və <br> həmin ildən fəaliyyətə  <br> başlayan  “EmbaFinans” QSC <br> müxtəlif növ kreditlərin <br>  verilməsi xidmətini göstərir.</span>

                        </li>
                        <li class="li2">
                            <div class="divv" data-aos="fade-down"
                                 data-aos-duration="500" style="  -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(64, 161, 206, 0.33);">
                                <time>2004 </time>
                            </div>
                            <span data-aos="fade-down"
                                  data-aos-duration="1000" class="span2 divv">Əsası 2012-ci ildə qoyulan <br> və həmin ildən fəaliyyətə <br> başlayan “EmbaFinans” QSC müxtəlif </span>
                        </li>
                        <li class="li1">
                            <div class="divv" data-aos="fade-up"
                                 data-aos-duration="500" style="  -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(171, 213, 172, 0.33);">
                                <time>2008</time>
                            </div>
                            <span data-aos="fade-up"
                                  data-aos-duration="1000" class="span1 divv">Əsası 2012-ci ildə qoyulan və <br> həmin ildən fəaliyyətə  <br> başlayan  “EmbaFinans” QSC <br> müxtəlif növ kreditlərin <br>  verilməsi xidmətini göstərir.</span>
                        </li>
                        <li class="li2">
                            <div class="divv" data-aos="fade-down"
                                 data-aos-duration="500" style="  -webkit-backdrop-filter: blur(2px);
                                backdrop-filter: blur(2px);
                                background-color: rgba(64, 161, 206, 0.33);">
                                <time>2004 </time>
                            </div>
                            <span data-aos="fade-down"
                                  data-aos-duration="1000" class="span2 divv">Əsası 2012-ci ildə qoyulan <br> və həmin ildən fəaliyyətə <br> başlayan “EmbaFinans” QSC müxtəlif </span>
                        </li>
                        <li style="width: 150px;"></li>
                    </ol>
                </section>
                <div class="arrows">
                    <button class="arrow arrow__prev disabled"disabled>
                            <span class="fa fa-long-arrow-right arrow1" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" viewBox="0 0 28 12">
                                    <g fill="none" fill-rule="evenodd">
                                        <g fill="#FFF" fill-rule="nonzero">
                                            <g>
                                                <path d="M25.941 5.309l-4.74-4.74c-.123-.124-.323-.124-.447 0-.123.123-.123.323 0 .446l4.201 4.201-24.639.113c-.175 0-.316.141-.316.316 0 .174.141.316.316.316l24.639-.113-4.2 4.2c-.124.124-.124.324 0 .447.061.062.142.093.223.093.08 0 .162-.031.223-.093l4.74-4.74c.124-.123.124-.323 0-.446z" transform="translate(-194 -324) translate(194.77 324.625)"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                </span>
                    </button>
                    <button class="arrow arrow__next"><span class="fa fa-long-arrow-right arrow1" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" viewBox="0 0 28 12">
                                    <g fill="none" fill-rule="evenodd">
                                        <g fill="#FFF" fill-rule="nonzero">
                                            <g>
                                                <path d="M25.941 5.309l-4.74-4.74c-.123-.124-.323-.124-.447 0-.123.123-.123.323 0 .446l4.201 4.201-24.639.113c-.175 0-.316.141-.316.316 0 .174.141.316.316.316l24.639-.113-4.2 4.2c-.124.124-.124.324 0 .447.061.062.142.093.223.093.08 0 .162-.031.223-.093l4.74-4.74c.124-.123.124-.323 0-.446z" transform="translate(-194 -324) translate(194.77 324.625)"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                </span>
                    </button>
                </div>
            </div>

            <ul class="nav nav-tabs">
                @foreach($menus as $menu)
                    @if($menu->status == 1)
                        @if($menu->name == 'Haqqımızda')
                            <li id="About" class="active choosing"><a data-toggle="tab" href="#Haqqımızda">{{$menu->name}}</a></li>
                        @elseif($menu->name == 'Tariximiz')
                            <li class="choosing" id="History"><a data-toggle="tab" href="#Tariximiz">{{$menu->name}}</a></li>
                        @elseif($menu->name == 'Partnyorlar')
                            <li class="choosing"><a data-toggle="tab" href="#Partnyorlar">{{$menu->name}}</a></li>
                        @elseif($menu->name == 'Filiallar')
                            <li id="go_branch" class="choosing"><a href="/branch">{{$menu->name}}</a></li>
                        @else
                            <li class="choosing"><a data-toggle="tab" href="#{{str_replace(' ', '', $menu->name)}}">{{$menu->name}}</a></li>
                        @endif
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    </div>
@endsection
