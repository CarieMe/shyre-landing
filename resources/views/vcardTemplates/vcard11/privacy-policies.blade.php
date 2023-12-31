
 
@extends('vcardTemplates.vcard11.app')
@section('title')
{{__('messages.vcard.privacy_policy')}}
@endsection
@section('page_css')
    <link href="{{ asset('assets/css/portfolio.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('page_name')
    {{__('messages.vcard.privacy_policy')}}
@endsection
@section('content')
    <div class="tab-content p-sm-4 p-3" id="v-pills-tabContent">
        <div class="portfolio-single-tab tab-pane fade show active" id="nav-portfolio-single" role="tabpanel"
             aria-labelledby="nav-portfolio-single-tab">
            <!-- start testimonials-section -->
            <section class="testimonials-section position-relative">
                <div class="section-heading mb-40">
                    <h2 class="fs-22 text-white ps-4">{{__('messages.vcard.privacy_policy')}}</h2>
                </div>
            </section>
            <!-- end testimonials-section -->
            <!-- start professional-summary-section -->
            <div class="professional-summary-section mb-4">
                <div class="row ">
                    <div class="col-xl-12 col-md-7 mb-md-0 mb-4">
                        <div class="card h-100 p-4 fs-12 mb-0 text-white">
                            {!! $vcard->privacy_policy->privacy_policy !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- end professional-summary-section -->
        </div>
    </div>
@endsection

