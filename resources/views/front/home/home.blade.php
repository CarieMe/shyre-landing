@extends('front.layouts.app')
@section('title')
{{ getAppName() }}
@endsection
@section('content')

<!-- HERO -->
<section class="sb-banner sb-bdd">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sb-main-title-frame">
                    <div class="sb-main-title">
                        <span class="sb-suptitle sb-mb-30 sb-fml">Hi, new friend!</span>
                        <h1 class="sb-mb-30 sb-h1">WE DO NOT <span>COOK</span>, <br>WE <span>CREATE</span> YOUR <br>EMOTIONS!</h1>
                        <p class="sb-text sb-text-lg sb-mb-30 sb-fmd">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>

                        <a href="menu-1.html" class="sb-btn sb-btn-outline">
                            <span class="sb-icon">
                                <img src="{{ asset('assets/ui/icons/card-l.svg') }}" alt="icon">
                            </span>
                            <span>Select card</span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sb-illustration-1">
                    <img src="assets/ui/products/pr.png" alt="girl" class="sb-girl">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sb-banner sb-bdl sec-pad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <!-- main title -->
                <div class="sb-main-title-frame">
                    <div class="sb-main-title">
                        <h2 class="sb-mb-30 sb-capital">Get in <span class="sb-fml">with</span> vkardz</h2>
                        <p class="sb-text sb-text-lg sb-mb-30">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                    </div>
                </div>
                <!-- main title end -->
            </div>
            <div class="col-lg-5">
                <div class="sb-contact-form-frame">
                    <div class="sb-form-content">
                        <div class="sb-main-content">
                            <h3 class="sb-mb-30">Send Message</h3>
                            <form id="form">
                                <div class="sb-group-input">
                                    <input type="text" name="name" required>
                                    <span class="sb-bar"></span>
                                    <label>Name</label>
                                </div>
                                <div class="sb-group-input">
                                    <input type="email" name="email" required>
                                    <span class="sb-bar"></span>
                                    <label>Email</label>
                                </div>
                                <div class="sb-group-input">
                                    <textarea name="text" required></textarea>
                                    <span class="sb-bar"></span>
                                    <label>Message</label>
                                </div>
                                <p class="sb-text sb-text-xs sb-mb-30">*We promise not to disclose your <br>personal information to third parties.</p>
                                <!-- button -->
                                <button class="sb-btn sb-cf-submit sb-show-success">

                                    <span>Send</span>
                                </button>
                                <!-- button end -->
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STORE -->
<section class="sb-short-menu sb-p-0-90 sb-bdl sec-pad">
    <div class="container">
        <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
                <h2 class="sb-mb-30">VKARDZ <span class="sb-fml">LIST</span> ITEMS</h2>
                <p class="sb-text sb-fll">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
            </div>
            <div class="sb-right sb-mb-30">
                <!-- slider navigation -->
                <div class="sb-slider-nav">
                    <div class="sb-prev-btn sb-short-menu-prev"><i class="fas fa-chevron-left fa-lg"></i></div>
                    <div class="sb-next-btn sb-short-menu-next"><i class="fas fa-chevron-right fa-lg"></i></div>
                </div>
                <!-- slider navigation end -->
                <!-- button -->
                <a href="menu-1.html" class="sb-btn sb-btn-outline">
                    <span class="sb-icon">
                        <img src="assets/ui/icons/arrow-left-c.svg" alt="icon">
                    </span>
                    <span>Full menu</span>
                </a>
                <!-- button end -->
            </div>
        </div>
        <div class="swiper-container sb-short-menu-slider-4i">
            <div class="swiper-wrapper">
                @foreach ($plans as $plan)
                <div class="swiper-slide">
                    <a href="{{ route('plans', ['id' => $plan->id]) }}" class="sb-menu-item">
                        <div class="sb-cover-frame sb-bdd">
                            <img src="{!! $plan->image !!}" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title sb-capital sb-f-100">{!! $plan->name !!}</h4>
                            <div class="sb-price"><sub>{{ $plan->currency->currency_icon }}</sub> {{ ($plan->price) }}</div>
                        </div>
                        <div class="sb-description sb-mb-15">
                            <p class="sb-mb-15 sb-text-max">{!! $plan->description !!}</p>
                            <ul class="sb-stars">
                                <li class="sb-pr-10"><i class="fas fa-shopping-cart fa-lg sb-fml"></i><span class="sb-fld sb-f-s-15"> {!! $plan->rate_sold !!}</span></li>
                                <li class="sb-pl-20"><i class="fas fa-user fa-lg sb-fml"></i><span class="sb-fld sb-f-s-15"> {{ ($plan->rate_user) }}</span></li>
                                <li class="sb-pl-20"><i class="fas fa-star fa-lg sb-fml"></i><span class="sb-fld sb-f-s-15"> {{ ($plan->rate_rate) }}</span></li>
                            </ul>
                        </div>

                        <div class="sb-buttons-frame">
                            <a href="#." class="sb-btn sb-btn-cart-outline">
                                <span class="sb-add-to-cart-text">SELECT CARD</span>
                            </a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- BANNER -->
<section class="sb-banner sb-p-0-90 sb-banner-sm sb-bdd">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- main title -->
                <div class="sb-main-title-frame">
                    <div class="sb-main-title text-center">
                        <h1 class="sb-mb-30 sb-capital">Make an <span>impact</span> <br>always tap with <br><span>vkardz</span></h1>
                        <p class="sb-mb-30 sb-fll ">Make an impact, tap with vkardz, <br>and leave a lasting connection and impression </p>
                    </div>
                </div>
                <!-- main title end -->
            </div>
        </div>
    </div>
</section>

<!-- HOW TO GET CARD -->
<section class="sb-banner sb-bdl sec-pad">
    <div class="container">
        <div class="sb-left sb-mb-60">
            <h2 class="sb-mb-30 sb-capital">Get Your <span class="sb-fml">Personalized</span><br> vkardz in 3 Easy Steps</h2>
            <p class="sb-text sb-fll">Elevate your networking experience with a <br>customized vkardz or our ready standard cards.</p>
            <p class="sb-text sb-fll">Our team is always available to assist you throughout <br>the process and ensure your vkardz reflects your unique <br> style and professional image</p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="sb-features-item sb-mb-60">
                    <div class="sb-number">01</div>
                    <div class="sb-feature-text">
                        <h3 class="sb-mb-15">Select Your Ideal Card Type</h3>
                        <p class="sb-text">Choose from a range of premium materials such as wood, metal, PVC, and more.
                            <br> Pick the card design that aligns with your personal or business branding then proceed to payment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sb-features-item sb-mb-60">
                    <div class="sb-number">02</div>
                    <div class="sb-feature-text">
                        <h3 class="sb-mb-15">Provide Your Branding Details</h3>
                        <p class="sb-text">Share your logo, contact information, social media handles, and any additional details you want to showcase on your vkardz.
                            <br> Customize the card's layout, colors, and fonts to match your brand identity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sb-features-item sb-mb-60">
                    <div class="sb-number">03</div>
                    <div class="sb-feature-text">
                        <h3 class="sb-mb-15">Wait for Swift Delivery</h3>
                        <p class="sb-text">We'll handle the printing and programming of the NFC technology.
                            <br> Receive your vkardz at your doorstep, ready to make a remarkable impression in your networking endeavors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BANNER -->
<section class="sb-banner sb-p-0-90 sb-banner-sm sb-bdd">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- main title -->
                <div class="sb-main-title-frame">
                    <div class="sb-main-title text-center">
                        <h1 class="sb-mb-30 sb-capital"><span>seamlesss</span> <br>networking with a meta <br><span>power</span></h1>
                        <p class="sb-mb-30 sb-fll">Unlock the potential of seamless networking with vkardz, <br>and experience the meta power that opens doors to endless opportunities.</p>
                    </div>
                </div>
                <!-- main title end -->
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="sb-banner sb-bdl sec-pad">
    <div class="container">
        <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
                <h2 class="sb-mb-30 sb-capital">The Power of vkardz: a <span class="sb-fml">digital </span>networking <span class="sb-fml">game changer</span></h2>
                <p class="sb-fll"> Elevate your networking game with cutting-edge technology <br> for seamless and always on-the-go connectivity</p>
            </div>
            <div class="sb-right sb-mb-30">
                <!-- button -->
                <a href="shop-1.html" class="sb-btn sb-btn-outline">
                    <span class="sb-icon">
                        <img src="{{ asset('assets/ui/icons/card-l.svg') }}" alt="icon">
                    </span>
                    <span>Go shopping now</span>
                </a>
                <!-- button end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a href="shop-list-1.html" class="sb-categorie-card sb-categorie-card-2 sb-mb-30">
                    <div class="sb-card-body sb-bdd">
                        <div class="sb-category-icon">
                            <img src="{{ asset('assets/ui/icons/wcv-1.svg') }}" alt="icon">
                        </div>
                        <div class="sb-card-descr">
                            <h3 class="sb-mb-10 sb-fml">Effortless Contact Sharing</h3>
                            <p class="sb-fld">Simplify the process of exchanging contact information by tapping your vkardz against any NFC-enabled device.
                                <br> Instantly share your contact details, eliminating the need for manual data entry and ensuring accurate and hassle-free connections.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="shop-list-1.html" class="sb-categorie-card sb-categorie-card-2 sb-mb-30">
                    <div class="sb-card-body sb-bdd sb-no-outline">
                        <div class="sb-category-icon">
                            <img src="{{ asset('assets/ui/icons/wcv-2.svg') }}" alt="icon">
                        </div>
                        <div class="sb-card-descr">
                            <h3 class="sb-mb-10 sb-fml">Enhanced Professional Image</h3>
                            <p class="sb-fld">Embrace the power of vkardz to leave a memorable impression on clients, partners, and colleagues.
                                <br> Demonstrate your tech-savviness and forward-thinking approach to networking, reflecting your commitment to staying ahead in a digital world.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="shop-list-1.html" class="sb-categorie-card sb-categorie-card-2 sb-mb-30">
                    <div class="sb-card-body sb-bdd">
                        <div class="sb-category-icon">
                            <img src="{{ asset('assets/ui/icons/wcv-3.svg') }}" alt="icon">
                        </div>
                        <div class="sb-card-descr">
                            <h3 class="sb-mb-10 sb-fml">Amplify Your Digital Presence</h3>
                            <p class="sb-fld">Extend your networking potential beyond the physical realm by linking your vkardz to your online presence.
                                <br> Drive traffic to your digital portfolio, LinkedIn profile, or social media platforms, enabling others to explore your work and engage with your online content.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="shop-list-1.html" class="sb-categorie-card sb-categorie-card-2 sb-mb-30">
                    <div class="sb-card-body sb-bdd">
                        <div class="sb-category-icon">
                            <img src="{{ asset('assets/ui/icons/wcv-4.svg') }}" alt="icon">
                        </div>
                        <div class="sb-card-descr">
                            <h3 class="sb-mb-10 sb-fml">Environmentally Responsible Networking</h3>
                            <p class="sb-fld">Contribute to a greener future by choosing vkardz over traditional paper-based business cards.
                                <br> Minimize your environmental footprint and showcase your commitment to sustainability, aligning your brand with eco-conscious values and making a positive impact on the planet.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- BANNER -->
<section class="sb-banner sb-p-0-90 sb-banner-sm sb-bdd">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- main title -->
                <div class="sb-main-title-frame">
                    <div class="sb-main-title text-center">
                        <h1 class="sb-mb-30 sb-capital">Connect, <span>share</span> <br>and impress with<br><span> vkardz</span></h1>
                        <p class="sb-mb-30 sb-fll">Make a lasting impression in every connection, as you effortlessly connect, <br>share your information, and leave a memorable mark with vkardz.</p>
                    </div>
                </div>
                <!-- main title end -->
            </div>
        </div>
    </div>
</section>


<!-- BLOGS -->
<section class="sb-popular sb-bdl sec-pad">
    <div class="container">
        <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
                <h2 class="sb-mb-30 sb-h2">MOST <span class="sb-fml">POPULAR</span> BLOGS</h2>
                <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
            </div>
            <div class="sb-right sb-mb-30">
                <!-- slider navigation -->
                <div class="sb-slider-nav">
                    <div class="sb-prev-btn sb-blog-prev"><i class="fas fa-arrow-left"></i></div>
                    <div class="sb-next-btn sb-blog-next"><i class="fas fa-arrow-right"></i></div>
                </div>
                <!-- slider navigation end -->
            </div>
        </div>

    </div>
</section>
<!-- popular end -->


<!-- REVIEWS -->
<section class="sb-popular sb-bdd">
    <div class="container">
        <div class="sb-main-title sb-mt-50 text-center">
            <h2 class="sb-mb-30 sb-capital">Let them speak</h2>
            <p class="sb-mb-30 sb-fll">Make a lasting impression in every connection, as you effortlessly connect, <br>share your information, and leave a memorable mark with vkardz.</p>
        </div>
        <div id="customers-testimonials" class="owl-carousel">

        </div>
    </div>
</section>

<section class="sb-brands">
    <div class="slide-track">
        <div class="sb-brand">
            <img src="{{ asset('assets/ui/brands/brand-1.png') }}" alt="" />
        </div>
        <div class="sb-brand">
            <img src="{{ asset('assets/ui/brands/brand-2.png') }}" alt="" />
        </div>
        <div class="sb-brand">
            <img src="{{ asset('assets/ui/brands/brand-3.png') }}" alt="" />
        </div>
        <div class="sb-brand">
            <img src="{{ asset('assets/ui/brands/brand-4.png') }}" alt="" />
        </div>
        <div class="sb-brand">
            <img src="{{ asset('assets/ui/brands/brand-5.png') }}" alt="" />
        </div>
        <div class="sb-brand">
            <img src="{{ asset('assets/ui/brands/brand-1.png') }}" alt="" />
        </div>
        <div class="sb-brand">
            <img src="{{ asset('assets/ui/brands/brand-3.png') }}" alt="" />
        </div>
        <div class="sb-brand">
            <img src="{{ asset('assets/ui/brands/brand-4.png') }}" alt="" />
        </div>
        <div class="sb-brand">
            <img src="{{ asset('assets/ui/brands/brand-5.png') }}" alt="" />
        </div>
    </div>
</section>



@endsection