
 
<!-- start subscribe section -->
{{--<section class="subscribe-section padding-t-100px padding-b-100px">--}}
{{-- <div class="container">--}}
{{-- <div class="subscribe-section__subscribe-inner position-relative rounded-20">--}}
{{-- <div class="position-relative subscribe-section__subscribe-block text-center mx-auto">--}}
{{-- <h2 class="text-white">{{__('auth.subscribe_here')}}</h2>--}}
{{-- <p class="text-blue-100 fs-18">--}}
{{-- {{__('messages.placeholder.receive_latest_news')}}--}}
{{-- </p>--}}
{{-- <form action="{{route('email.sub')}}" method="post" id="addEmail">--}}
{{-- @csrf()--}}
{{-- <div class="subscribe-inputgrp position-relative">--}}
{{-- <input name="email" type="email" class="form-control" placeholder="{{ __('messages.front.your_email_address') }}">--}}
{{-- <div class="subscribe-btn d-flex align-items-center">--}}
{{-- <button type="submit" class="btn btn-primary">{{ __('messages.subscribe') }}</button>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </form>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{--</section>--}}
<!-- end subscribe section -->


<!-- start footer section -->
{{--<footer>--}}
{{-- <div class="container">--}}
{{-- <div class="row">--}}
{{-- <div class="col-lg-6 col-12  mb-md-5 mb-3 text-center">--}}
{{-- @if($setting['terms_conditions'] !== '' || $setting['privacy_policy'] !== '')--}}
{{-- <h3 class="mb-4 pb-1">{{__('messages.services')}}</h3>--}}
{{-- @endif--}}
{{-- <ul class="ps-0">--}}
{{-- <li>--}}
{{-- @if($setting['terms_conditions'] !== '')--}}
{{-- <a href="{{ route('terms.conditions') }}"--}}
{{-- class="text-decoration-none  mb-3 d-block fw-light {{ request()->routeIs('terms.conditions') ? 'active' : 'text-secondary' }}">{!! __('messages.vcard.term_condition') !!}</a>--}}
{{-- @endif--}}
{{-- </li>--}}
{{-- <li>--}}
{{-- @if($setting['privacy_policy'] !== '')--}}
{{-- <a href="{{ route('privacy.policy') }}"--}}
{{-- class="text-decoration-none  mb-3 d-block fw-light {{ request()->routeIs('privacy.policy') ? 'active' : 'text-secondary' }}">{{(__('messages.vcard.privacy_policy'))}}</a>--}}
{{-- @endif--}}
{{-- </li>--}}
{{-- </ul>--}}
{{-- </div>--}}
{{-- --}}
{{-- <div class=" col-12 {{$setting['terms_conditions'] !== '' || $setting['privacy_policy'] !== '' ? 'col-lg-6' : 'col-12'}} text-center ">--}}
{{-- <h3 class="mb-4 pb-1">{{__('messages.setting.address')}}</h3>--}}
{{-- <div class="footer-info ">--}}
{{-- <div class="d-flex footer-info__block mb-3 pb-1 text-center justify-content-center">--}}
{{-- <i class="fa-solid fa-house text-success fs-5 me-3"></i>--}}
{{-- <a--}}
{{-- class="text-decoration-none text-secondary fs-6">--}}
{{-- {{ $setting['address'] }}--}}
{{-- </a>--}}
{{-- </div>--}}
{{-- <div class="d-flex align-items-center footer-info__block mb-3 pb-1 text-center justify-content-center">--}}
{{-- <i class="fa-solid fa-envelope text-success fs-5 me-3"></i>--}}
{{-- <a href="mailto:{{ $setting['email'] }}"--}}
{{-- class="text-decoration-none text-secondary fs-6">--}}
{{-- {{ $setting['email'] }}--}}
{{-- </a>--}}
{{-- </div>--}}
{{-- <div class="d-flex align-items-center footer-info__block mb-3 pb-1 text-center justify-content-center">--}}
{{-- <i class="fa-solid fa-phone text-success fs-5 me-3"></i>--}}
{{-- <a href="tel:+ {{ $setting['phone'] }}"--}}
{{-- class="text-decoration-none text-secondary fs-6">--}}
{{-- {{ $setting['phone'] }}--}}
{{-- </a>--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- </div>--}}
{{-- <div class="container text-center mt-lg-5 copy-right">--}}
{{-- <p class="mb-0 text-gray-100 pt-4">©--}}
{{-- {{ \Carbon\Carbon::now()->year }}--}}
{{-- {{__('auth.copyright_by')." "}} <span class="text-success">{{ $setting['app_name'] }}</span></p>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{--</footer>--}}
<!-- end footer section -->



<!-- start subscribe section -->
<section class="sb-banner sb-bdl sec-pad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="mb-40">
                    <h2 class="sb-f-100 sb-capital">{{__('auth.subscribe_here')}}</h2>
                    <p> {{__('messages.placeholder.receive_latest_news')}}</p>
                </div>
                <form action="{{route('email.sub')}}" method="post" id="addEmail">
                    <div class="sb-group-input">
                        <input type="email" name="email" class="sb-bdl" placeholder="{{ __('messages.front.enter_your_email') }}">
                        <!-- <label>Email</label> -->
                    </div>
                    <div class="text-center sb-btn-center-content">
                        <button type="submit" class="sb-btn sb-btn-subscribe-outline">
                            <span class="sb-fld">{{ __('messages.subscribe') }}</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- start footer section -->
<footer class="sb-banner sec-pad sb-bdd sb-remove-top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 col-xl-4 me-auto mb-lg-0">
                <h3 class="sb-footer-title">vkardz</h3>
                <p class="sb-footer-sub">Welcome to tappo, the latest and the best NFC digital business card. We offer the best and incomparable service that no one has even delivered.</p>
                <h4 class="sb-footer-after">Direct Contact</h4>
                <ul class="sb-footer-nav mb-0">
                    <li><a href="{{ url('/') }}"><span><i class="fas fa-location-arrow" style="font-size: 18px;"></i></span>{{ $setting['address'] }}</a></li>
                    <li><a href="mailto:{{ $setting['email'] }}"><span><i class="far fa-envelope" style="font-size: 18px;"></i></span>{{ $setting['email'] }}</a></li>
                    <li><a href="tel:{{ $setting['phone'] }}"><span><i class="fas fa-phone-alt" style="font-size: 18px;"></i></span>{{ '+' . $setting['prefix_code'] . ' ' . $setting['phone'] }}</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-8 col-xl-7">
                <div class="row">
                    <div class="col-12 col-sm-3">
                        <h4 class="sb-footer-header">Pages</h4>
                        <ul class="sb-footer-nav mb-0">
                            <li><a href="{{ url('/') }}">Home</a>
                            </li>
                            <li><a href="">Cards</a>
                            </li>
                            <li><a href="">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 col-sm-3">
                        <h4 class="sb-footer-header">Support</h4>
                        <ul class="sb-footer-nav">
                            <li><a href="#.">Features</a></li>
                            <li><a href="#.">Faqs</a></li>
                            <li><a href="#.">Contact Us</a></li>
                            <li><a href="#.">Recipes</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-sm-6">
                        <h4 class="sb-footer-header">Accepted Payments</h4>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="rounded px-2 py-1 text-light" href="#"><i class="bi bi-cash-stack" style="font-size: 30px;"></i></a>
                            </li>
                            <li class=" list-inline-item"><a class="rounded px-2 py-1 text-light" href="#"><i class="fab fa-paypal" style="font-size: 30px;"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="rounded px-2 py-1 text-light" href="#"><i class="fab fa-stripe" style="font-size: 30px;"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="rounded px-2 py-1 text-light" href="#"><i class="bi bi-bank" style="font-size: 30px;"></i></a>
                            </li>
                        </ul>

                        <h4 class="sb-footer-after">We are on:</h4>
                        <ul class="sb-footer-pay">
                            <li><a href="https://www.facebook.com/profile.php?id=100094246425039&mibextid=LQQJ4d"><i class="fab fa-facebook" style="font-size: 22px;"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/tappome/"><i class="fab fa-instagram" style="font-size: 22px;"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/company/tappome/"><i class="fab fa-linkedin" style="font-size: 22px;"></i></a>
                            </li>
                            <li><a href="https://twitter.com/tappome"><i class="fab fa-twitter" style="font-size: 22px;"></i></a>
                            </li>
                            <li><a href="https://wa.me/971557941234"><i class="fab fa-whatsapp" style="font-size: 22px;"></i></a>
                            </li>
                        </ul>

                        <h4 class="sb-footer-after">Recent blogs</h4>
                        <ul class="sb-footer-blogs">
                            <li><a href="#"><img src="{{ asset('assets/ui/products/pr.png')}}" alt="Blog Image 1"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/ui/products/pr.png')}}" alt="Blog Image 1"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/ui/products/pr.png')}}" alt="Blog Image 1"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/ui/products/pr.png')}}" alt="Blog Image 1"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/ui/products/pr.png')}}" alt="Blog Image 1"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/ui/products/pr.png')}}" alt="Blog Image 1"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/ui/products/pr.png')}}" alt="Blog Image 1"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col">
                <hr class="m-0 text-main">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 sb-terms">
                Powered © {{ \Carbon\Carbon::now()->year }} {{__('auth.copyright_by')." "}} |
                <span><a class="footer-link text-main" href="#">{{ $setting['app_name'] }}</a></span>
            </div>
            <div class="col-lg-6 col-sm-12">
                <ul class="sb-term">
                    <li>
                        <a href="#">Terms Of Service</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#">Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- end footer section -->