
 
@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{ asset(getAppLogo()) }}" class="logo" width="120px" height="50px" style="object-fit: cover" alt="{{ getAppName() }}">
        @endcomponent
    @endslot


    {{-- Body --}}
    <div>
        <h2>{{ __('messages.mail.hello') }} <b>{{ $name }}</b></h2>
        <p> {{ __('messages.mail.book_successfully') }} {{$date}}  {{ __('messages.mail.between') }} {{ $from_time }}
            {{ __('messages.common.to') }} {{ $to_time }}</p>
        <p>{{ __('messages.mail.thanks_regard') }}</p>
        <p>{{ getAppName() }}</p>
    </div>


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <h6>© {{ date('Y') }} {{ getAppName() }}.</h6>
        @endcomponent
    @endslot
@endcomponent
