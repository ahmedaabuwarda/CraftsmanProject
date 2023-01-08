<!DOCTYPE HTML>
<html lang="ar">
<head>
    <title>الموهوبين | الصفحة الرئيسية</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css?v=7.2.2') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/assets/plugins/global/plugins.bundle.css?v=7.2.2') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.2.2') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/assets/css/style.bundle.css?v=7.2.2') }}" rel="stylesheet" type="text/css"/>
    
    <link rel="shortcut icon" href="{{ asset('images/hammer.png') }}"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <style>
        h2 {
            font-size: 44px;
        }

        .sub {
            font-size: 20px;
            color: grey;
        }

        .icon {
            color: #24679e;
        }
    </style>

</head>
<body class="is-preload" style="background-color: #8ec7f7">

    <header id="header">
        <a class="logo" href="{{ URL('/') }}">
            <img alt="gifted logo" src="{{ asset('images/logo.pngg') }}" style=" height:47px; margin-top: 4px">
        </a>
        <nav>
            <a href="{{ URL('/') }}">الصفحة الرئيسية</a>
            <a href="{{ URL('/craftsmen') }}">الموهوبين</a>
            @if(auth('craftsman')->user())
                <a href="{{ URL('/craftsman') }}">{{ auth('craftsman')->user()->name }}</a>
                <a href="" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('تسجيل الخروج') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            @elseif(auth('admin')->user())
                <a href="{{ URL('/admin') }}">{{ auth('admin')->user()->name }}</a>
                <a href="" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('تسجيل الخروج') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            @elseif(Auth::user())
                <a href="{{ URL('/') }}">{{ Auth::user()->name }}</a>
                <a href="" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('تسجيل الخروج') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            @else
                @if (Route::has('login')) <a href="{{ route('dash.login') }}">{{ __('تسجيل الدخول') }}</a> @endif
                @if (Route::has('register')) <a href="{{ route('dash.register') }}">{{ __('التسجيل') }}</a> @endif
            @endif
            <a href="#menu">القائمة</a>

        </nav>
    </header>
    <nav id="menu">
        <ul class="links">
            <li><a href="{{ URL('/') }}"><img alt="ss" src="{{asset('images/logo.pngg')}}" style="height:55px; margin:10px">
                </a></li>
            <li><a href="{{ URL('/') }}">الصفحة الرئيسية</a></li>
            <li><a href="{{ route('reports.create') }}">التقارير والشكاوى</a></li>
            <li><a href="{{ route('dash.register') }}">التسجيل</a></li>
            <li><a href="tel:+972599887766">اتصل بنا </a></li>
            <li><a href="mailto:asdasd@gmail.com">راسلنا</a></li>
        </ul>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer id="footer" style="">
        <div class="inner">
            <div class="content">
                <section>
                    <h3>GIFTED.COM</h3>
                    <p>محرك بحث عن الوظائف في السعودية</p>
                </section>
                <section>
                    <h4 style="text-align: right">خدمات</h4>
                    <ul class="alt" style="text-align: right">
                        <li><a href="#">الموهوبين والمهنيين في السعودية</a></li>
                        <li><a href="#">ارباب العمل والشركات</a></li>
                        <li><a href="#">المواطنين المحتاجين لخدمات الموهوبين</a></li>
                    </ul>
                </section>
                <section>
                    <h4>تواصل معنا</h4>
                    <ul class="plain">
                        <li><a href="https://twitter.com/" target="_blank"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                        <li><a href="https://facebook.com/" target="_blank"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
                        <li><a href="https://instagram.com/" target="_blank"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
                        <li><a href="https://github.com/" target="_blank"><i class="icon fa-github">&nbsp;</i>Github</a></li>
                    </ul>
                </section>
            </div>
            <div class="copyright">
                &copy; جميع الحقوق محفوظة لدى Craftsmen.com
            </div>
        </div>
    </footer>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
