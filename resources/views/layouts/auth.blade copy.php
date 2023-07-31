
 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ getAppName() }}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ getFaviconUrl() }}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- General CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/front/front-custom.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('assets/css/page.css') }}"> <!-- CSS Libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/front/front-custom.css') }}">

    @stack('css')
    @yield('css')
</head>

<body>
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed authImage">
        <div class="dropdown ms-auto">
            <button type="button" title="Active" class="dropdown-toggle hide-arrow btn btn btn-info m-7 mb-5 pl-2" id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-boundary="viewport" aria-expanded="false">
                {{ getLanguageByKey(checkFrontLanguageSession()) }} <i class="fa  fa-language"></i>
            </button>
            <ul class="dropdown-menu min-width-220" aria-labelledby="dropdownMenuButton1" style="max-height: 380px;overflow: auto;">
                @foreach(getAllLanguage() as $key => $value)
                <li style="padding: 0px" class="dropdown-item languageSelection padding {{(checkFrontLanguageSession() == $key) ? 'active' : '' }}" data-prefix-value="{{ $key }}"><a class=" dropdown-item {{(checkFrontLanguageSession() == $key) ? 'active' : '' }}" class="text-decoration-none" data-id="{{$key}}" href="javascript:void(0)">{{$value}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <ul>
        </ul>
        @yield('content')
    </div>
    
    <section class="sb-banner sb-banner-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- main title -->
                    <div class="sb-main-title-frame">
                        <div class="sb-main-title">
                            <span class="sb-suptitle sb-mb-30 sb-fml">Hi, new friend!</span>
                            <h1 class="sb-mb-30 sb-h1">WE DO NOT <span>COOK</span>, <br>WE <span>CREATE</span> YOUR <br>EMOTIONS!</h1>
                            <p class="sb-text sb-text-lg sb-mb-30 sb-fmd">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                            <!-- button -->
                            <a href="menu-1.html" class="sb-btn sb-btn-outline">
                                <span class="sb-icon">
                                    <img src="{{ asset('assets/ui/icons/card-l.svg') }}" alt="icon">
                                </span>
                                <span>Select card</span>
                            </a>
                            <!-- button end -->
                            <!-- button -->
                            <!-- <a href="about-1.html" class="sb-btn sb-btn-2 sb-btn-gray">
                            <span class="sb-icon">
                                <img src="img/ui/icons/arrow.svg" alt="icon">
                            </span>
                            <span>About us</span>
                        </a> -->
                            <!-- button end -->
                        </div>
                    </div>
                    <!-- main title end -->
                </div>
                <div class="col-lg-6">
                    <div class="sb-illustration-1">
                        <img src="assets/ui/products/pr.png" alt="girl" class="sb-girl">
                        <!-- <div class="sb-cirkle-1"></div>
                        <div class="sb-cirkle-2"></div>
                        <div class="sb-cirkle-3"></div>
                        <div class="sb-cirkle-4"></div>
                        <div class="sb-cirkle-5"></div>
                        <img src="img/illustrations/3.svg" alt="phones" class="sb-pik-1">
                        <img src="img/illustrations/1.svg" alt="phones" class="sb-pik-2">
                        <img src="img/illustrations/2.svg" alt="phones" class="sb-pik-3"> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid padding-0">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6">
                    <div class="copyright text-center text-muted">
                        {{__('messages.placeholder.all_rights_reserve')}} &copy; {{ date('Y') }} <a href="{{ route('home') }}" class="font-weight-bold ml-1" target="_blank">{{getAppName()}}</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ mix('assets/js/style.js') }}"></script>
    <script src="{{ mix('assets/js/front-third-party.js') }}"></script>
    <script src="{{ asset('assets/js/messages.js') }}"></script>
    <script src="{{ mix('assets/js/custom/helpers.js')}}"></script>
    <script src="{{ mix('assets/js/custom/custom.js') }}"></script>
    <script src="{{ mix('assets/js/auth/auth.js') }}"></script>
    @stack('scripts')
    <script>
        $(document).ready(function() {
            $('.alert').delay(5000).slideUp(300)
        })
    </script>

</body>

</html>