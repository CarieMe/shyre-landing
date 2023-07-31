<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ getFaviconUrl() }}" type="image/png">
    @if(!empty($metas))
    @if($metas['meta_description'])
    <meta name="description" content="{{$metas['meta_description']}}">
    @endif
    @if($metas['meta_keyword'])
    <meta name="keywords" content="{{$metas['meta_keyword']}}">
    @endif
    @if($metas['home_title'] && $metas['site_title'])
    <title>{{ $metas['home_title'] }} | {{ $metas['site_title'] }}</title>
    @else
    <title>@yield('title') | {{ getAppName() }}</title>
    @endif
    @else
    <title>@yield('title') | {{ getAppName() }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    @endif

    @if(!empty(getAppLogo()))
    <meta property="og:image" content="{{getAppLogo()}}" />
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ mix('assets/css/main.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/public.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ mix('assets/js/front-third-party.js') }}"></script>

    <script src="{{ asset('assets/js/messages.js') }}"></script>

    <script src="{{ mix('assets/js/style-plugins.js') }}"></script>

    <script src="{{ mix('assets/js/style.js') }}"></script>

    @php $langSession = Session::get('languageName');
    $frontLanguage = !isset($langSession) ? getSuperAdminSettingValue('default_language') : $langSession;
    @endphp
    <script>
        let frontLanguage = "{{ $frontLanguage }}"
        Lang.setLocale(frontLanguage)
    </script>

    {!! getSuperAdminSettingValue('extra_js_front') !!}
    @routes

    <script>
        $('html, body').animate({
            scrollTop: $('html, body').offset().top,
        })
    </script>
    <!--google analytics code-->
    @if(!empty($metas['google_analytics']))

    @endif
</head>

<body>
    <div class="sb-app">
        <!-- <div class="sb-preloader"> -->
        <!-- <div class="sb-preloader-bg"></div> -->
        <!-- <div class="sb-preloader-body">
                <div class="sb-loading">
                    <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>
                </div>
                <div class="sb-loading-bar">
                    <div class="sb-bar"></div>
                </div>
            </div> -->
        <!-- </div> -->
        <!-- preloader end -->
        <!-- click effect -->
        <div class="sb-click-effect"></div>
        <!-- loader -->
        <div class="sb-load"></div>
        @include('front.layouts.header')
        <div id="sb-dynamic-content" class="sb-transition-fade">
            @yield('content')
        </div>
        @include('front.layouts.footer')
    </div>
</body>


</html>