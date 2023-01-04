<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <title>
        Admin panel
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{asset('assets/css/black-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
    <link href="{{asset('css/toast.css')}}" rel="stylesheet" />
    <link href="{{asset('css/modal.css')}}" rel="stylesheet" />
</head>

<body class="">
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
        var total_time = 1500 - loadtime;
        setTimeout(function (){
            preload.className += " fade";
            setTimeout(function() {
                preload.style.display = "none";
            }, 500);
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
    ul li ul {
        opacity: 0;
        transition: all 0.5s ease;
        left: -20px;
        position: absolute;
        height: 0;
    }

    ul li:hover > ul,
    ul li ul:hover {
        opacity: 1;
        position: relative;
        height: 100%;
    }
</style>
<div class="wrapper">
    <div class="sidebar">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
      -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="javascript:void(0)" class="simple-text logo-mini">
                    O!
                </a>
                <a href="javascript:void(0)" class="simple-text logo-normal">
                    Idealand team
                </a>
            </div>
            <ul class="nav">
                <li>
                    <a href="/admin">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Haqqında</p>
                    </a>
                </li>
                <li>
                    <a href="/menus">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Menyular</p>
                    </a>
                </li>
                <li>
                    <a href="/news" style="position: relative;">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Xəbərlər</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="/add_news">
                                <i class="tim-icons icon-puzzle-10"></i>
                                <p>Xəbər əlavə et</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/report">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Hesabatlar</p>
                    </a>
                </li>
                <li>
                    <a href="/mission">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Missiya</p>
                    </a>
                </li>
                <li>
                    <a href="/leaders">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Rəhbərlər</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="/pos_cat">
                                <i class="tim-icons icon-puzzle-10"></i>
                                <p>Rəhbər kateqoriyaları</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/career">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Vakansiyalar</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="/add_career">
                                <i class="tim-icons icon-puzzle-10"></i>
                                <p>Vakansiya əlavə et</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/categories">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Kateqoriyalar</p>
                    </a>
                </li>
                <li>
                    <a href="/products">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Məhsullar</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="/add_product">
                                <i class="tim-icons icon-puzzle-10"></i>
                                <p>Məhsul əlavə et</p>
                            </a>
                        </li>
                    </ul>
                </li>
{{--                <li>--}}
{{--                    <a href="/supporters">--}}
{{--                        <i class="tim-icons icon-puzzle-10"></i>--}}
{{--                        <p>Tərəfdaşlar</p>--}}
{{--                    </a>--}}
{{--                    <ul style="list-style-type: none;">--}}
{{--                        <li>--}}
{{--                            <a href="/supporter_cat">--}}
{{--                                <i class="tim-icons icon-puzzle-10"></i>--}}
{{--                                <p>Tərəfdaş kateqoriyaları</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li>
                    <a href="/partners">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Partnyorlar</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="/partner_cat">
                                <i class="tim-icons icon-puzzle-10"></i>
                                <p>Partnyor kateqoriyaları</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/contact">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Müraciətlər</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="/credit_apply">
                                <i class="tim-icons icon-puzzle-10"></i>
                                <p>Kredit müraciətləri</p>
                            </a>
                        </li>
                        <li>
                            <a href="/applies">
                                <i class="tim-icons icon-puzzle-10"></i>
                                <p>İş müraciətləri</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/offers">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Kompaniyalar</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="/add_offer">
                                <i class="tim-icons icon-puzzle-10"></i>
                                <p>Kompaniya əlavə et</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/contact_info">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Əlaqə məlumatları</p>
                    </a>
                </li>
                <li>
                    <a href="/finances">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>Maliyyə</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="/add_finance">
                                <i class="tim-icons icon-puzzle-10"></i>
                                <p>Maliyyə əlavə et</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li style="height: 100px;"></li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle d-inline">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand"><img src="{{asset('assets/img/embalogo.png')}}" style="height: 34px; width: 34px;"> Admin panel </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="search-bar input-group">
                            <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                                <span class="d-lg-none d-md-block">Search</span>
                            </button>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <div class="photo">
                                    <img src="{{asset('assets/img/anime3.png')}}" alt="Profile Photo">
                                </div>
                                <b class="caret d-none d-lg-block d-xl-block"></b>
                                <p class="d-lg-none">
                                    Log out
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-navbar">
                                <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li>
                            </ul>
                        </li>
                        <li class="separator d-lg-none"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->
        @yield('admin')
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script> made by
                    <a href="https://idealand.az/" target="_blank">Idealand Team</a> for a better web.
                </div>
            </div>
        </footer>
    </div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title">Cədvəl sütunu arxa planı</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-info" data-color="blue"></span>
                        <span class="badge filter badge-success" data-color="green"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line text-center color-change">
                <span class="color-label">GÜNDÜZ MODU</span>
                <span class="badge light-badge mr-2"></span>
                <span class="badge dark-badge ml-2"></span>
                <span class="color-label">GECƏ MODU</span>
            </li>
        </ul>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
<script src="{{asset('assets/js/black-dashboard.min.js?v=1.0.0')}}"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/demo/demo.js')}}"></script>
<script src="{{asset('js/toast.js')}}"></script>
<script src="{{asset('js/word.js')}}"></script>
<script src="{{asset('js/about.js')}}"></script>
<script src="{{asset('js/news.js')}}"></script>
<script src="{{asset('js/report.js')}}"></script>
<script src="{{asset('js/mission.js')}}"></script>
<script src="{{asset('js/pos_cat.js')}}"></script>
<script src="{{asset('js/leader.js')}}"></script>
<script src="{{asset('js/career.js')}}"></script>
<script src="{{asset('js/categories.js')}}"></script>
<script src="{{asset('js/products.js')}}"></script>
<script src="{{asset('js/sup_cat.js')}}"></script>
<script src="{{asset('js/supporters.js')}}"></script>
<script src="{{asset('js/partners.js')}}"></script>
<script src="{{asset('js/par_cat.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
<script src="{{asset('js/credit_apply.js')}}"></script>
<script src="{{asset('js/applies.js')}}"></script>
<script src="{{asset('js/offer_cat.js')}}"></script>
<script src="{{asset('js/offers.js')}}"></script>
<script src="{{asset('js/menus.js')}}"></script>
<script src="{{asset('js/contact_info.js')}}"></script>
<script src="{{asset('js/finance.js')}}"></script>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



            $('.fixed-plugin a').click(function(event) {
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data', new_color);
                }

                if ($main_panel.length != 0) {
                    $main_panel.attr('data', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data', new_color);
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    blackDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (white_color == true) {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').removeClass('white-content');
                    }, 900);
                    white_color = false;
                } else {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').addClass('white-content');
                    }, 900);

                    white_color = true;
                }


            });

            $('.light-badge').click(function() {
                $('body').addClass('white-content');
            });

            $('.dark-badge').click(function() {
                $('body').removeClass('white-content');
            });
        });
    });
</script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
    TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
    });
</script>
<script>
    var csrf_token = "{{ csrf_token() }}";
</script>
</body>

</html>
