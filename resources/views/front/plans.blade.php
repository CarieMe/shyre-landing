
 
@extends('front.layouts.app')
@section('title')
{{ __('messages.vcard.privacy_policy') }}
@endsection

@section('content')
<section class="sb-banner sb-banner-xs sb-bdl">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sb-main-title-frame">
                    <div class="sb-main-title">
                        <h1 class="sb-h2">{{ $plan->name }}</h1>
                        <ul class="sb-breadcrumbs">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="shop-1.html">Shop</a></li>
                            <li><a href="#.">Product</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- banner end

 product -->
<section class="sb-p-90-0 sb-bdd">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sb-gallery-item sb-gallery-square sb-mb-30">
                    <img src="{{ asset($plan->image) }}" alt="photo">
                    <!-- <div class="sb-badge sb-vegan"><i class="fas fa-badge"></i> Best Seller</div> -->
                    <a data-fancybox="menu" data-no-swup href="{{ asset($plan->image) }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                        <span class="sb-icon">
                            <img src="{{ asset('assets/ui/icons/zoom.svg') }}" alt="icon">
                        </span>
                    </a>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="sb-gallery-item sb-gallery-square sb-mb-90">
                            <img src="{{ asset($plan->image_1) }}" alt="photo">
                            <a data-fancybox="menu" data-no-swup href="{{ asset($plan->image_1) }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                                <span class="sb-icon">
                                    <img src="{{ asset('assets/ui/icons/zoom.svg') }}" alt="icon">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="sb-gallery-item sb-gallery-square sb-mb-90">
                            <img src="{{ asset($plan->image_2) }}" alt="photo">
                            <a data-fancybox="menu" data-no-swup href="{{ asset($plan->image_2) }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                                <span class="sb-icon">
                                    <img src="{{ asset('assets/ui/icons/zoom.svg') }}" alt="icon">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="sb-gallery-item sb-gallery-square sb-mb-90">
                            <img src="{{ asset($plan->image_3) }}" alt="photo">
                            <a data-fancybox="menu" data-no-swup href="{{ asset($plan->image_3) }}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                                <span class="sb-icon">
                                    <img src="{{ asset('assets/ui/icons/zoom.svg') }}" alt="icon">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="sb-product-description sb-mb-90">
                    <div class="sb-price-frame sb-mb-30">
                        <h3 class="sb-f-100 sb-capital">{{ $plan->name }}</h3>
                        <div class="sb-price"><sub>{{ $plan->currency->currency_icon }}</sub> {{ ($plan->price) }}</div>
                    </div>
                    <ul class="sb-stars sb-mb-25">
                        <li class="sb-pr-10"><i class="fas fa-shopping-cart fa-lg sb-fml"></i><span class="sb-fld sb-f-s-15"> {{ $plan->rate_sold }}</span></li>
                        <li class="sb-pl-20"><i class="fas fa-user fa-lg sb-fml"></i><span class="sb-fld sb-f-s-15"> {{ $plan->rate_user }}</span></li>
                        <li class="sb-pl-20"><i class="fas fa-star fa-lg sb-fml"></i><span class="sb-fld sb-f-s-15"> {{ $plan->rate_rate }}</span></li>
                    </ul>
                    <p class="sb-mb-60 sb-justify">{{ $plan->description }}</p>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sb-features-item sb-features-item-sm sb-mb-60">
                                <div class="sb-number">01</div>
                                <div class="sb-feature-text">
                                    <h4 class="sb-mb-15">Add to the cart and place an order</h4>
                                    <p class="sb-text sb-text-sm">Porro comirton pera nemo veniam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sb-features-item sb-features-item-sm sb-mb-60">
                                <div class="sb-number">02</div>
                                <div class="sb-feature-text">
                                    <h4 class="sb-mb-15">Enter your phone number and address</h4>
                                    <p class="sb-text sb-text-sm">Eligendi adipisci numquam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sb-features-item sb-features-item-sm sb-mb-60">
                                <div class="sb-number">03</div>
                                <div class="sb-feature-text">
                                    <h4 class="sb-mb-15">Enjoy your favorite food at home!</h4>
                                    <p class="sb-text sb-text-sm">Nnecessitatibus praesentium</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sb-buttons-frame sb-mb-60">
                        <a href="#." class="sb-btn sb-btn-cart-outline">
                            <span class="sb-add-to-cart-text">SELECT CARD</span>
                        </a>
                    </div>
                    <div class="sb-filter">
                        <a href="#." data-filter=".sb-ingredients-tab" class="sb-filter-link sb-active">Details</a>
                        <a href="#." data-filter=".sb-details-tab" class="sb-filter-link">Info</a>
                        <a href="#." data-filter=".sb-reviews-tab" class="sb-filter-link">How to</a>
                    </div>
                    <div class="sb-masonry-grid sb-tabs">
                        <div class="sb-grid-sizer"></div>
                        <div class="sb-grid-item sb-ingredients-tab">
                            <div class="sb-tab">
                                <ul class="sb-list">
                                    <li><b>Material</b><span>{{ $plan->info_material }}</span></li>
                                    <li><b>Color</b><span>{{ $plan->info_color }}</span></li>
                                    <li><b>Print</b><span>{{ $plan->info_print }}</span></li>
                                    <li><b>Size</b><span>{{ $plan->info_size }}</span></li>
                                    <li><b>Weight</b><span>{{ $plan->info_weight }}</span></li>
                                    <li><b>Customized</b><span>{{ $plan->info_custom }}</span></li>
                                    <li><b>NFC</b><span>{{ $plan->info_nfc }}</span></li>
                                    <li><b>QR Code</b><span>{{ $plan->info_qr }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sb-grid-item sb-details-tab" style="position: absolute">
                            <div class="sb-tab">
                                <p class="sb-fld sb-justify sb-mb-15">Facilis ratione veritatis asperiores doloremque molestiae delectus iure officia earum dolores sit fugiat, repellendus, neque laboriosam optio culpa quibusdam, magnam totam quos. Mollitia dolorem, culpa,
                                    dignissimos
                                    quas et voluptates architecto in sit totam, quae animi ratione adipisci nulla ab quasi perferendis quo pariatur dolor magnam inventore. Sequi nisi ex excepturi non harum, asperiores laboriosam ipsum voluptate doloribus incidunt nam
                                    eveniet similique unde esse voluptatem minus necessitatibus eaque temporibus quaerat accusantium amet deserunt. Iste, facilis? Illo tenetur, libero, non dicta asperiores quisquam voluptas natus aperiam, at perspiciatis repellat
                                    voluptate. Autem non reprehenderit, perferendis.</p>
                            </div>
                        </div>
                        <div class="sb-grid-item sb-reviews-tab" style="position: absolute">
                            <div class="sb-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="sb-review-card sb-mb-60">
                                            <div class="sb-review-header sb-mb-15">
                                                <h4 class="sb-mb-10">Very tasty</h4>
                                                <ul class="sb-stars">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="sb-text sb-mb-15">Inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                                                tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                                            <div class="sb-author-frame">
                                                <div class="sb-avatar-frame">
                                                    <img src="img/faces/1.jpg" alt="Guest">
                                                </div>
                                                <h4>Emma Newman</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="sb-review-card sb-mb-60">
                                            <div class="sb-review-header sb-mb-15">
                                                <h4 class="sb-mb-10">I have lunch here every day</h4>
                                                <ul class="sb-stars">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="sb-text sb-mb-15">Tempora ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit Reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                                            <div class="sb-author-frame">
                                                <div class="sb-avatar-frame">
                                                    <img src="img/faces/2.jpg" alt="Guest">
                                                </div>
                                                <h4>Paul Trueman</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- filter -->

        <!-- filter end -->

    </div>
</section>
@endsection