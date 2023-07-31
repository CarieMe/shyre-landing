
 
@extends('front.layouts.app')

@section('title')
{{ getAppName() }}
@endsection

@section('content')
<section class="sb-banner sb-banner-xs sb-banner-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- main title -->
                <div class="sb-main-title-frame">
                    <div class="sb-main-title">
                        <h1 class="sb-h2">{{ $blog->title }}</h1>
                        <ul class="sb-breadcrumbs">
                            <li><a href="home-1.html">Home</a></li>
                            <li><a href="#.">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <!-- main title end -->
            </div>
        </div>
    </div>
</section>
<!-- banner end -->
<section class="sb-publication sb-p-90-90">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="col-lg-8">
                <div class="sb-author-panel">
                    <div class="sb-author-frame">
                        <!-- <div class="sb-avatar-frame">
                            <img src="img/faces/1.jpg" alt="Guest">
                        </div> -->
                        <h4>{{ $blog->author }}</h4>
                    </div>
                    <div class="sb-suptitle"><span>{{ $blog->date }}</div>
                </div>
                <div class="sb-post-cover sb-mb-30"><img src="{{ asset($blog->image) }}" alt="Cover"></div>
                <div class="sb-html-blog">{!! $blog->content !!}</div>
            </div>
            <div class="col-lg-4">
                <div class="sb-sidebar-frame sb-pad-type-2 sb-sticky" data-margin-top="120">
                    <div class="sb-sidebar">
                        <h3 class="sb-mb-30">Ingredients:</h3>
                        <ul class="sb-list">
                            <li><b>Numquam</b><span>1 pack</span></li>
                            <li><b>Cupiditate</b><span>150g</span></li>
                            <li><b>Adipisicing</b><span>1kg</span></li>
                            <li><b>Dolorem obcaecati</b><span>3 Teaspoon</span></li>
                            <li><b>Porro</b><span>2 pack</span></li>
                            <li><b>Vel fuga</b><span>300g</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection