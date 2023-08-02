@extends('front.layouts.app')
@section('title')
{{ getAppName() }}
@endsection
@section('content')

<!-- HERO -->

<section class="sb-banner sb-banner-light">
    <div class="container">
        <div class="sb-main-title-frame">
            <div class="sb-main-title text-center">
                <h1 class="sb-mb-30 sb-h1"><span>Zhyre</span> support:<br> boost <span>sales</span> with ease!</h1>
                <p class="sb-text sb-text-lg sb-mb-30">Maximize Client Retention with Zhyre CRM - Elevate Engagement,
                    <br> Deliver Exceptional Support, and Cultivate Lasting Connections.
                </p>
                <a href="menu-1.html" class="sb-btn sb-btn-filled">
                    <span class="sb-icon">
                        <img src="{{ asset('assets/ui/icons/card-l.svg') }}" alt="icon">
                    </span>
                    <span>Select card</span>
                </a>
                <a href="menu-1.html" class="sb-btn sb-btn-filled">
                    <span class="sb-icon">
                        <img src="{{ asset('assets/ui/icons/card-l.svg') }}" alt="icon">
                    </span>
                    <span>Select card</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- BANNER -->
<section class="sb-section sb-section-dark text-center">
    <div class="container">
        <h1 class="sb-mb-30 sb-capital">Make an <span>impact</span> <br>always tap with <br><span>vkardz</span></h1>
        <p class="">Make an impact, tap with vkardz, <br>and leave a lasting connection and impression </p>
    </div>
</section>

<section class="sb-section sb-section-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mobile-container">
                    <div class="mobile">
                        <div class="head">
                            <div class="notch"></div>
                            <div class="profilebox">
                                <div class="left">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <div class="profile">
                                        <img src="images/avatar.jpg" alt="dp">
                                        <div class="pdetail">
                                            <h3>Samuel Green</h3>
                                            <p>Available to Walk</p>
                                        </div>
                                    </div>
                                </div>
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="chatbox">
                            <div class="eachmessage sent animate">
                                <p>Hello, </p>
                            </div>
                            <div class="eachmessage received animate">
                                <p>Could you send over some pictures of your dog, please?</p>
                            </div>
                            <div class="eachmessage sent animate">
                                <p>Here are a few pictures. She’s a happy girl!</p>
                            </div>
                            <div class="eachmessage received animate">
                                <p>She looks so happy! The time we discussed works. How long shall I take her out for?</p>
                            </div>
                            <div class="deal animate">
                                <div class="det">
                                    <input type="radio" name="plan">
                                    <p>30 minute walk</p>
                                </div>
                                <p class="price">$29</p>
                            </div>
                        </div>
                        <div class="sendbox">
                            <input type="text" placeholder="Type a message…">
                            <button class="submit"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text">
                    <h1>Simple booking</h1>
                    <p>Stay in touch with our dog walkers through the chat interface. This makes it easy to
                        discuss arrangements and make bookings. Once the walk has been completed you can rate
                        your walker and book again all through the chat.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sb-section sb-section-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="graph-container"></div>
            </div>
            <div class="col-lg-4">
                <div class="sb-sec-7-box">
                    <div class="sb-sec-7-content"></div>
                    <h2>This is sample</h2>
                    <p>This is a sample of the sample of the sample</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="sb-sec-7-box-3">
                    <p>TEST</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="sb-sec-7-box-3">
                    <p>TEST</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="sb-sec-7-box-5">
                    <div class="line-container">
                        <div class="step-wrapper move-line">
                            <article class="linestep linestep1" style="left: 34%; top: -2%;">
                                <span class="num"> This is the one</span>
                            </article>
                            <article class="linestep linestep2" style="left: 68%; top: 44%;">
                                <span class="num">This is two</span>
                            </article>
                            <article class="linestep linestep3" style="left: 20%; top: 44%;">
                                <span class="num">This is two</span>
                            </article>
                            <article class="linestep linestep5" style="left: 46%; top: 92.5%;">
                                <span class="num">This is four</span>
                            </article>
                            <svg width="100%" viewBox="0 0 1156 608" xmlns="http://www.w3.org/2000/svg">
                                <path class="path" d="m560.30957,10.588011c0,0 438.0947,1.90476 439.04708,1.90476c0.95238,0 144.57857,-1.02912 143.80934,137.14269c-0.76923,138.17181 -116.81095,142.30859 -131.61967,143.8923c-14.80873,1.58372 -840.41472,-0.71429 -860.5941,0.71429c-20.17938,1.42858 -148.4991,6.80903 -146.83244,147.05973c1.66666,140.2507 129.52365,152.14266 129.33243,151.27321c0.19122,0.86945 415.268425,2.687632 415.42748,0" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sb-sec-7-box-6">
                    <p>TEST</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sb-section sb-section-light">
    <div class="container">
        <div class="sb-card">
            <div class="text-center">
                <h1 class="sb-mb-30 sb-capital">Make an <span>impact</span> <br>always tap with <br><span>vkardz</span></h1>
                <p class="">Make an impact, tap with vkardz, <br>and leave a lasting connection and impression </p>
            </div>
        </div>
    </div>
</section>




<section class="sb-section sb-section-light">
    <div class="container">
        <div class="sb-sec-3-container">
            <!-- <div class="naccs">
                <div class="grid">
                    <ul class="nacc">
                        <li class="active">
                            <div class="thumb">
                                <div class="row">
                                    <div class="col-lg-6 align-self-center">
                                        <div class="left-text">
                                            <h4>SEO Analysis &amp; Daily Reports</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor
                                                incididunt ut labore et dolore kengan darwin doerski token.
                                                dover lipsum lorem and the others.</p>
                                            <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span>
                                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i>
                                                    SEO Analysis</span>
                                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i>
                                                    SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor
                                                incididunt.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="right-image">
                                            <img src="{{ asset('assets/images/dummy/serve-4.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text">
                        <h4>SEO Analysis &amp; Daily Reports</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor
                            incididunt ut labore et dolore kengan darwin doerski token.
                            dover lipsum lorem and the others.</p>
                        <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span>
                            <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i>
                                SEO Analysis</span>
                            <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i>
                                SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor
                            incididunt.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sb-sec-3">
                        <img src="{{ asset('assets/images/dummy/serve-4.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sb-section sb-section-light">
    <div class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-left-image">
                                <img src="{{ asset('assets/images/dummy/about.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="about-right-content">
                                <div class="section-heading">
                                    <h6>About Us</h6>
                                    <h4>Who is DigiMedia <em>Agency</em></h4>
                                    <div class="line-dec"></div>
                                </div>
                                <p>We hope this DigiMedia template is useful for your work. You can use this template for any purpose.
                                    You may <a rel="nofollow" href="http://paypal.me/templatemo" target="_blank">contribute a little
                                        amount</a> via PayPal to <a href="https://templatemo.com/contact" target="_blank">support
                                        TemplateMo</a> in creating new templates regularly.</p>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="90">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div>
                                                        90%<br>
                                                        <span>Coding</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="80">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div>
                                                        80%<br>
                                                        <span>Photoshop</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="80">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div>
                                                        80%<br>
                                                        <span>Animation</span>
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
            </div>
        </div>
    </div>
</section>



<!-- <div class='dashboard'>
    <div class='container'>
        <div class='menuBar'>
            <div class='buttons'>
                <button class='close'></button>
                <button class='min'></button>
                <button class='max'></button>
            </div>
            <div class='tabs'>
                <ul>
                    <li tabindex='1'>Apps</li>
                    <li tabindex='2'>Your work</li>
                    <li tabindex='3'>Discover</li>
                    <li tabindex='4'>Market</li>
                </ul>
            </div>
            <div class='search'>
                <input type='text' class='searchBar' placeholder="Search" />
            </div>
            <div class='user-info'>
                <div class='notification'>
                    <svg height="48px" version="1.1" viewBox="0 0 48 48" width="48px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title />
                        <desc />
                        <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                            <g id="Artboard-Copy" transform="translate(-347.000000, -129.000000)">
                                <path d="M370.2695,136.0005 L371.7285,136.0005 C377.7345,136.0005 381.9865,140.9525 381.9865,146.9795 L381.9865,155.1555 L385.118012,160.493499 C385.208025,160.646937 385.255479,160.821608 385.255479,160.9995 C385.255479,161.551785 384.807764,161.9995 384.255479,161.9995 L357.751858,161.9995 C357.572907,161.9995 357.397234,161.95148 357.243167,161.860449 C356.767678,161.579507 356.609966,160.966298 356.890908,160.490809 L360.0155,155.2025 L360.0155,146.8995 C360.0155,140.8705 364.2655,136.0005 370.2695,136.0005 Z M365.9995,163.0005 L375.9995,163.0005 C375.9995,165.2085 373.7615,167.0005 370.9995,167.0005 C368.2385,167.0005 365.9995,165.2085 365.9995,163.0005 Z" fill="#FFFFFF" id="bell" />
                                <g id="slices" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class='cloud'>
                    <svg height="48px" version="1.1" width="48px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title />
                        <desc />
                        <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                            <g id="Artboard-Copy">
                                <path d="M28.0483 19.7219A8.4933 8.4933 90 0028.1875 18.1875c0-4.6527-3.7848-8.4375-8.4375-8.4375-2.97 0-5.7229 1.582-7.2354 4.096-2.0416-.6619-4.1364-.378-5.8621.8112-1.7257 1.1883-2.7557 3.0697-2.839 5.1269C1.5448 20.8618 0 23.1561 0 25.6875c0 .4395.1065.8679.1878 1.2835l.0009.0009C.795 30.0307 3.5021 32.25 6.625 32.25h18.75c3.6182 0 6.625-2.9443 6.625-6.5625 0-2.5589-1.5658-4.8624-3.9517-5.9656z" fill="#FFFFFF" id="cloud" />
                                <g id="slices1" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class='profile'></div>
            </div>
        </div>
        <div class='main'>
            <div class='sideBar'>
                <div class='scroll'>
                    <ol>
                        <li>Apps</li>
                        <li>
                            <ol>
                                <li><svg width="30" height='20'>
                                        <path d="m2 2 4 0 0 4-4 0zm6 0 4 0 0 4-4 0zm6 0 4 0 0 4-4 0zm-12 6 4 0 0 4-4 0zm6 0 4 0 0 4-4 0 0 0zm6 0 4 0 0 4-4 0zm-12 6 4 0 0 4-4 0zm6 0 4 0 0 4-4 0zm6 0 4 0 0 4-4 0z" fill='#FFFFFF' />
                                    </svg>All Apps</li>
                                <li class='update'><svg width="30" height="20">
                                        <path d="M18 10C18 15 15 18 10 18 5 18 2 15 2 10 2 5 5 2 10 2L10 0 14 3 10 6 10 4C6 4 4 6 4 10 4 14 6 16 10 16 14 16 16 14 16 10Z" fill="#FFFFFF" />
                                    </svg>Updates</li>
                            </ol>
                        </li>
                        <li>Categories</li>
                        <li>
                            <ol>
                                <li><svg width="30" height="20">
                                        <path d="M10 9A1 1 0 0010 13 1 1 0 0010 9M10 7A1 1 0 0110 15 1 1 0 0110 7M10 17 17 17Q18 17 18 16L18 6Q18 5 17 5L15 5Q14 5 14 4L14 3 6 3 6 4Q6 5 5 5L3 5Q2 5 2 6L2 16Q2 17 3 17Z" fill="#FFFFFF" />
                                    </svg>Photography</li>
                                <li><svg width="30" height="20">
                                        <path d="M10 11A1 1 0 0010 17 1 1 0 0010 11M6.8 14Q7 11.5 9 11L6.5 6 3 14ZM10 8 10 10.8Q13 11 13.2 14L16 14 16 8Z" fill="#FFFFFF" />
                                    </svg>Graphic Design</li>
                                <li><svg width="30" height="20">
                                        <path d="M 18.35 2.8 H 1.55 a 0.3 0.3 90 0 0 -0.3 0.3 v 13.2 a 0.3 0.3 90 0 0 0.3 0.3 h 16.8 a 0.3 0.3 90 0 0 0.3 -0.3 V 3.1 a 0.3 0.3 90 0 0 -0.3 -0.3 z M 4.25 16 H 1.85 v -2.7 h 2.4 v 2.7 z m 0 -3.3 H 1.85 v -2.7 h 2.4 v 2.7 z m 0 -3.3 H 1.85 v -2.7 h 2.4 v 2.7 z m 0 -3.3 H 1.85 V 3.4 h 2.4 v 2.7 z m 7.9611 3.8532 l -3.3 2.1 a 0.3021 0.3021 90 0 1 -0.3054 0.0099 A 0.3003 0.3003 90 0 1 8.45 11.8 V 7.6 a 0.3003 0.3003 90 0 1 0.4614 -0.2532 l 3.3 2.1 a 0.3009 0.3009 90 0 1 -0.0003 0.5064 z M 18.05 16 h -2.4 v -2.7 h 2.4 v 2.7 z m 0 -3.3 h -2.4 v -2.7 h 2.4 v 2.7 z m 0 -3.3 h -2.4 v -2.7 h 2.4 v 2.7 z m 0 -3.3 h -2.4 V 3.4 h 2.4 v 2.7 z" fill="#FFFFFF" />
                                    </svg>Video</li>
                                <li><svg width="30" height="20">
                                        <path d="M 15 4 Q 17 4 17 6 L 10 13 Q 10 11 8 11 Z M 6 12 A 1 1 0 0 1 9 15 C 7 17 3 17 2 15 Q 4 15 6 12 z" fill="#FFFFFF" />
                                    </svg>Illustrations</li>
                                <li><svg width="30" height="20">
                                        <path d="M18.642 6.436H12.126c-.3024 0-.54.2376-.54.54v10.8c0 .3024.2376.54.54.54h6.516c.3024 0 .54-.2376.54-.54V6.976c0-.3024-.2376-.54-.54-.54zm-2.736 9.72h-1.08c-.3024 0-.54-.2376-.54-.54s.2376-.54.54-.54h1.08c.3024 0 .54.2376.54.54s-.2376.54-.54.54zm0-6.48h-1.08c-.3024 0-.54-.2376-.54-.54s.2376-.54.54-.54h1.08c.3024 0 .54.2376.54.54s-.2376.54-.54.54zM1.29 12.916h7.056v2.16h-2.7c-.2984 0-.54.2416-.54.54s.2416.54.54.54h4.86v-1.08h-1.08v-2.16h1.08V6.976c0-.8933.7267-1.62 1.62-1.62h4.86V2.656c0-.2983-.2417-.54-.54-.54H1.29C.9917 2.116.75 2.3577.75 2.656v9.72c0 .2983.2417.54.54.54z" fill="#FFFFFF" />
                                    </svg>UI/UX</li>
                                <li><svg width="30" height="20">
                                        <path d="M2 12.092v3.5934a.4798.4798 90 00.2419.4167L5.392 17.884V14.012L2 12.092zM6.352 14.012v3.872l3.36-1.92V12.092zM10.672 12.092v3.872l3.36 1.92V14.012zM14.992 14.012v3.872l3.1501-1.7818A.4798.4798 90 0018.384 15.6854V12.092l-3.392 1.92zM14.512 9.212l-3.7042 1.852L14.512 13.1808l3.7362-2.1168zM10.4067 1.5506a.4802.4802 90 00-.4294 0L6.4878 3.352 10.192 5.4688l3.7042-2.1168L10.4067 1.5506zM6.352 4.38v3.9986l3.36 1.68V6.3zM5.872 9.212 2.1358 11.064 5.872 13.1808l3.7042-2.1168zM10.672 6.3v3.7586l3.36-1.68V4.38z" fill="#FFFFFF" />
                                    </svg>3D/AR</li>
                            </ol>
                        </li>
                        <li>Fonts</li>
                        <li>
                            <ol>
                                <li><svg width="30" height="20">
                                        <path d="M16.1171 1.9142C15.7882 1.6353 15.3105 1.5 14.6552 1.5c-.9476 0-1.8179.2817-2.5878.8371-.7486.5397-1.4637 1.4319-2.1241 2.6514-.2179.3997-.3714.5521-.4486.6089h-1.3128c-.542 0-.9813.4393-.9813.9813 0 .4495.3039.8243.7161.9405l-.0025.0083h.0295c.0766.0192.1555.0326.2379.0326h.9416l-1.6344 6.4001c-.3604 1.3924-.5161 1.8891-.5833 2.062-.0722.1855-.1633.3531-.2771.5068-.021-.2695-.1318-.5071-.3254-.6927-.2132-.2039-.5054-.3068-.8682-.3068-.4113 0-.754.1216-1.0185.3614-.2708.2465-.4142.5596-.4142.9067 0 .2579.0851.6356.4914.9674.307.2485.7422.3691 1.3311.3691.8548 0 1.6271-.2284 2.2946-.6788.6556-.4422 1.2306-1.1244 1.7083-2.0261.4696-.8839.9348-2.2562 1.4213-4.195l.9299-3.674h1.5008c.5421 0 .9812-.4392.9812-.9812s-.4392-.9813-.9812-.9813h-.9814c.317-1.081.7087-1.8974 1.1722-2.4289.1142-.1348.2623-.2846.4206-.3839-.0771.1696-.1163.3383-.1163.5028 0 .3082.1205.5857.3454.8015.2242.2168.5083.327.8444.327.3543 0 .6686-.1333.9085-.3858.238-.2502.3593-.5817.3593-.9851.0008-.454-.1777-.8449-.5151-1.1309z" fill="#FFFFFF" />
                                    </svg>Manage Fonts</li>
                            </ol>
                        </li>
                        <li>Resource Links</li>
                        <li>
                            <ol>
                                <li><svg width="30" height="20">
                                        <path d="M 15 4 Q 17 4 17 6 L 10 13 Q 10 11 8 11 Z M 6 12 A 1 1 0 0 1 9 15 C 7 17 3 17 2 15 Q 4 15 6 12 z" fill="#FFFFFF" />
                                    </svg>Stock</li>
                                <li><svg width="30" height="20">
                                        <path d="M 15 4 Q 17 4 17 6 L 10 13 Q 10 11 8 11 Z M 6 12 A 1 1 0 0 1 9 15 C 7 17 3 17 2 15 Q 4 15 6 12 z" fill="#FFFFFF" />
                                    </svg>Tutorials</li>
                                <li><svg width="30" height="20">
                                        <path d="M 15 4 Q 17 4 17 6 L 10 13 Q 10 11 8 11 Z M 6 12 A 1 1 0 0 1 9 15 C 7 17 3 17 2 15 Q 4 15 6 12 z" fill="#FFFFFF" />
                                    </svg>Portfolio</li>
                                <li><svg width="30" height="20">
                                        <path d="M 15 4 Q 17 4 17 6 L 10 13 Q 10 11 8 11 Z M 6 12 A 1 1 0 0 1 9 15 C 7 17 3 17 2 15 Q 4 15 6 12 z" fill="#FFFFFF" />
                                    </svg>Behance</li>
                                <li><svg width="30" height="20">
                                        <path d="M 15 4 Q 17 4 17 6 L 10 13 Q 10 11 8 11 Z M 6 12 A 1 1 0 0 1 9 15 C 7 17 3 17 2 15 Q 4 15 6 12 z" fill="#FFFFFF" />
                                    </svg>Social Forum</li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
            <div class='page'>
                <div class="main-tabs">
                    <label class='all'>All Apps</label>
                    <span class='empty'></span>
                    <div class='menus'>
                        <input type='radio' name='menu' id="Desktop" />
                        <label for="Desktop">Desktop</label>
                        <input type='radio' name='menu' id="Mobile" />
                        <label for="Mobile">Mobile</label>
                        <input type='radio' name='menu' id=Web />
                        <label for="Web">Web</label>
                    </div>
                </div>
                <div class='content'>
                    <div class='advertise'>
                    </div>
                    <div class="installed">
                        <label>Installed</label>
                        <ul class='appList'>
                            <li>Photoshop</li>
                            <li>Illustrator</li>
                            <li>After Effects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 -->


<section class="sb-section sb-section-light">
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog-post">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('assets/images/dummy/b-1.jpg') }}" alt=""></a>
                        </div>
                        <div class="down-content">
                            <span class="category">SEO Analysis</span>
                            <span class="date">03 August 2021</span>
                            <a href="#">
                                <h4>Lorem Ipsum Dolor Sit Amet, Consectetur Adelore
                                    Eiusmod Tempor Incididunt</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers itii eiumod deis tempor incididunt
                                ut labore.</p>
                            <span class="author"><img src="{{ asset('assets/images/dummy/author.jpg') }}" alt="">By: Andrea Mentuzi</span>
                            <div class="border-first-button"><a href="#">Discover More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="#"><img src="{{ asset('assets/images/dummy/b-2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category">SEO Analysis</span>
                                        <span class="date">24 September 2021</span>
                                        <a href="#">
                                            <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="#"><img src="{{ asset('assets/images/dummy/b-3.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category">SEO Analysis</span>
                                        <span class="date">24 September 2021</span>
                                        <a href="#">
                                            <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-item last-post-item">
                                    <div class="thumb">
                                        <a href="#"><img src="{{ asset('assets/images/dummy/b-4.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category">SEO Analysis</span>
                                        <span class="date">24 September 2021</span>
                                        <a href="#">
                                            <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sb-section sb-section-dark text-center">
    <div class="container-box">
        <div class="header-box">
            <div class="grp-img">
                <img class="i1" src="https://images.unsplash.com/photo-1660476705851-21e527337f9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxOHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
            </div>
            <div class="grp-info">
                <h3 class="grp-name">
                    Elnora, Lelia, Lucinda
                </h3>
                <p class="grp-status">
                    We tipically reply in a few minutes
                </p>
            </div>
        </div>
        <div class="chatbox">
            <div class="chat">
                <img src="https://images.unsplash.com/photo-1657299143482-4f4ea1ebd71c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
                <p class="msg">
                    <ion-icon name="caret-back-outline"></ion-icon>
                    Hi there! <br>
                    Looking to get started? I can help answer to your questions!
                </p>
            </div>
            <div class="chat">
                <img src="https://images.unsplash.com/photo-1660481451479-7ad6d6ad0223?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                <p class="msg">
                    <ion-icon name="caret-back-outline"></ion-icon>
                    I need a laptop 😊
                </p>
            </div>
            <div class="chat">
                <img src="https://images.unsplash.com/photo-1657299143482-4f4ea1ebd71c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
                <p class="msg">
                    <ion-icon name="caret-back-outline"></ion-icon>
                    What kind of laptop your looking for? Mam
                </p>
            </div>
            <div class="chat">
                <img src="https://images.unsplash.com/photo-1660481451479-7ad6d6ad0223?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                <p class="msg">
                    <ion-icon name="caret-back-outline"></ion-icon>
                    A gaming one 😅
                </p>
            </div>
        </div>
        <a href="#" class="close">
            <ion-icon name="close-outline"></ion-icon>
        </a>
    </div>
</section>

@endsection