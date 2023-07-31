@extends('layouts.auth')
@section('title')
{{__('messages.common.login')}}
@endsection
@section('content')

<div class="sb-auth-frame sb-bdl">
    <div class="sb-auth-back">
        <a href="{{ route('home') }}"> <span>
                <i class="fas fa-arrow-left"></i>
            </span> Back
        </a>
    </div>
    <h3 class="sb-auth-title">Hi! Welcome back.</h3>
    <p class="sb-auth-sub">Login to your account and start managing your digital business cards.</p>
    <div class="sb-auth-border">
        <div class="sb-auth-content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="sb-input">
                    <input name="email" type="email" id="email" aria-describedby="emailHelp" required>
                    <label for="email">{{ __('messages.user.email').':' }} <span class="required"></span></label>
                </div>
                <div class="sb-input">
                    <input name="password" type="password" id="password" required aria-label="Password" data-toggle="password">
                    <label for="password">{{ __('messages.user.password').':' }}<span class="required"></span></label>
                </div>
                <div class="sb-row-input">
                    <div class="left-content">
                        <label class="checkbox checkbox--checkbox">
                            {{ __('messages.common.remember_me') }}
                            <input type="checkbox" id="remember_me" />
                            <div class="checkbox__indicator"></div>
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="link">
                        {{ __('messages.common.forgot_your_password').'?' }}
                    </a>
                    @endif
                </div>

                <!-- <div class="sb-input">
                    <div class="d-flex justify-content-between">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="link-info fs-6 text-decoration-none">
                            {{ __('messages.common.forgot_your_password').'?' }}
                        </a>
                        @endif
                    </div>
                    <div class="mb-3 position-relative">
                        <input name="password" type="password" class="form-control" id="password" required placeholder="{{ __('messages.user.password')}}" aria-label="Password" data-toggle="password">
                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                            <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                </div> -->
                <!-- <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me">
                    <label class="form-check-label" for="remember_me">{{ __('messages.common.remember_me') }}</label>
                </div> -->
                <div class="d-grid">
                    <button type="submit" class="sb-btn sb-btn-cart-outline"><span>{{ __('messages.common.login') }}</span></button>
                </div>
                <div class="d-flex align-items-center mb-10 mt-4">
                    <span class="text-gray-700 me-2">{{__('messages.common.new_here').'?'}}</span>
                    <a href="{{ route('register') }}" class="link-info fs-6 text-decoration-none">
                        {{__('messages.common.create_an_account')}}
                    </a>
                </div>
                <!-- <div class="d-grid">
                    @if(config('app.google_client_id') && config('app.google_client_secret') && config('app.google_redirect'))
                    <a href="{{route('social.login','google')}}" class="btn btn-danger d-flex align-items-center justify-content-center mb-sm-5 mb-4">
                        <i class="fa-brands fa-google fs-2 me-3"></i>{{__('messages.placeholder.login_via_google')}}
                    </a>
                    @endif
                    @if(config('app.facebook_app_id') && config('app.facebook_app_secret') && config('app.facebook_redirect'))
                    <a href="{{route('social.login','facebook')}}" class="btn btn-info d-flex align-items-center justify-content-center">
                        <i class="fa-brands fa-facebook-f fs-2 me-3"></i>{{__('messages.placeholder.login_via_facebook')}}
                    </a>
                    @endif
                </div> -->
            </form>
            <div class="col-12 text-center">
                <a href="{{ route('home') }}" class="sb-auth-logo">
                    <img alt="Logo" src="{{ getLogoUrl() }}">
                </a>
            </div>
            <div class="copyright text-center text-muted">
                {{__('messages.placeholder.all_rights_reserve')}} &copy; {{ date('Y') }} <a href="{{ route('home') }}" class="font-weight-bold ml-1" target="_blank">{{getAppName()}}</a>
            </div>
        </div>
    </div>
    <div class="width-540">
        @include('flash::message')
        @include('layouts.errors')
    </div>
</div>
@endsection