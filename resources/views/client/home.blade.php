@extends('layouts.client')

@section('header')
    @include('components.header_home')
@endsection


@section('content')
    <div id="content" role="main">

        <section class="section" id="section_home">
            <div class="bg section-bg fill bg-fill  bg-loaded"> </div>
            <div
                class="ux-shape-divider ux-shape-divider--bottom ux-shape-divider--style-triangle-invert ux-shape-divider--to-front">
                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path class="ux-shape-fill" d="M500 95.6L0 0V100H1000V0L500 95.6Z"></path>
                </svg>
            </div>

            <div class="section-content relative">
                <div class="row row-collapse row-full-width" id="row-422698953">
                    <div id="col-1655028689" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="slider-wrapper relative hide-for-small" id="slider-215130016">
                                <div
                                    class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                                    data-flickity-options="{
                                        &quot;cellAlign&quot;: &quot;center&quot;,
                                        &quot;imagesLoaded&quot;: true,
                                        &quot;lazyLoad&quot;: 1,
                                        &quot;freeScroll&quot;: false,
                                        &quot;wrapAround&quot;: true,
                                        &quot;autoPlay&quot;: 6000,
                                        &quot;pauseAutoPlayOnHover&quot; : true,
                                        &quot;prevNextButtons&quot;: true,
                                        &quot;contain&quot; : true,
                                        &quot;adaptiveHeight&quot; : true,
                                        &quot;dragThreshold&quot; : 10,
                                        &quot;percentPosition&quot;: true,
                                        &quot;pageDots&quot;: false,
                                        &quot;rightToLeft&quot;: false,
                                        &quot;draggable&quot;: true,
                                        &quot;selectedAttraction&quot;: 0.1,
                                        &quot;parallax&quot; : 0,
                                        &quot;friction&quot;: 0.6
                                    }">
                                    @foreach($sliders as $slider)
                                        <div class="banner has-hover custom-slider" id="banner-{{$slider->id}}">
                                            <div class="banner-inner fill">
                                                <div class="banner-bg fill">
                                                    <div class="bg fill bg-fill "></div>
                                                    <div class="overlay"></div>
                                                </div>

                                                <div class="banner-layers container">
                                                    <a class="fill" href="{{$slider->redirect}}" target="_blank" rel="noopener noreferrer">
                                                        <div class="fill banner-link"></div>
                                                    </a>
                                                    <div style="width: 50%"  class="@if($loop->index % 2 == 0)text-box banner-layer x50 md-x50 lg-x50 y90 md-y90 lg-y90 res-text @else text-box banner-layer x80 md-x80 lg-x80 y50 md-y50 lg-y50 res-text @endif">
                                                        <div data-animate="{{$loop->index % 2 == 0 ? 'fadeInRight' : 'fadeInLeft'}}">
                                                            <div class="text-box-content text @if($loop->index % 2 == 0) dark @endif text-shadow-2">
                                                                <div class="text-inner text-center">
                                                                    <div class="text">
                                                                        <h3>
                                                                            <strong style="text-transform: uppercase">{{$slider->renderTitle()}}</strong>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                #banner-{{$slider->id}} {
                                                    padding-top: 46%;
                                                }

                                                #banner-{{$slider->id}} .bg.bg-loaded {
                                                    background-image: url("{{$slider->image}}");
                                                }

                                                #banner-{{$slider->id}} .overlay {
                                                    background-color: rgba(0, 0, 0, 0.06);
                                                }

                                                #banner-{{$slider->id}} .ux-shape-divider--top svg {
                                                    height: 150px;
                                                    --divider-top-width: 100%;
                                                }

                                                #banner-{{$slider->id}} .ux-shape-divider--bottom svg {
                                                    height: 150px;
                                                    --divider-width: 100%;
                                                }
                                            </style>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="loading-spin dark large centered"></div>
                            </div>
                            <div class="slider-wrapper relative show-for-small" id="slider-658842596">
                                <div
                                    class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                                    data-flickity-options="{
                                        &quot;cellAlign&quot;: &quot;center&quot;,
                                        &quot;imagesLoaded&quot;: true,
                                        &quot;lazyLoad&quot;: 1,
                                        &quot;freeScroll&quot;: false,
                                        &quot;wrapAround&quot;: true,
                                        &quot;autoPlay&quot;: 6000,
                                        &quot;pauseAutoPlayOnHover&quot; : true,
                                        &quot;prevNextButtons&quot;: true,
                                        &quot;contain&quot; : true,
                                        &quot;adaptiveHeight&quot; : true,
                                        &quot;dragThreshold&quot; : 10,
                                        &quot;percentPosition&quot;: true,
                                        &quot;pageDots&quot;: false,
                                        &quot;rightToLeft&quot;: false,
                                        &quot;draggable&quot;: true,
                                        &quot;selectedAttraction&quot;: 0.1,
                                        &quot;parallax&quot; : 0,
                                        &quot;friction&quot;: 0.6
                                    }">
                                    @foreach($sliders as $slider)
                                        <div class="banner has-hover" id="banner-{{$slider->id}}">
                                            <div class="banner-inner fill">
                                                <div class="banner-bg fill">
                                                    <div class="bg fill bg-fill "></div>
                                                    <div class="overlay"></div>
                                                </div>

                                                <div class="banner-layers container">
                                                    <a class="fill" href="{{$slider->redirect}}" target="_blank" rel="noopener noreferrer">
                                                        <div class="fill banner-link"></div>
                                                    </a>

                                                    <div style="width: 90%" class="@if($loop->index % 2 == 0)text-box banner-layer x50 md-x50 lg-x50 y85 md-y90 lg-y90 res-text @else text-box banner-layer x50 md-x80 lg-x80 y80 md-y25 lg-y25 res-text @endif">
                                                        <div data-animate="{{$loop->index % 2 == 0 ? 'fadeInRight' : 'fadeInLeft'}}">
                                                            <div class="text-box-content text @if($loop->index % 2 == 0) dark @endif text-shadow-2">
                                                                <div class="text-inner text-center">
                                                                    <div class="text">
                                                                        <h3 style="line-height:1.3em;">
                                                                            <strong style="text-transform: uppercase">{{$slider->renderTitle()}}</strong>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <style>
                                                #banner-{{$slider->id}} {
                                                    padding-top: 150%;
                                                }

                                                #banner-{{$slider->id}} .bg.bg-loaded {
                                                    background-image: url("{{$slider->image}}");
                                                }

                                                #banner-{{$slider->id}} .overlay {
                                                    background-color: rgba(0, 0, 0, 0.06);
                                                }

                                                #banner-{{$slider->id}} .ux-shape-divider--top svg {
                                                    height: 150px;
                                                    --divider-top-width: 100%;
                                                }

                                                #banner-{{$slider->id}} .ux-shape-divider--bottom svg {
                                                    height: 150px;
                                                    --divider-width: 100%;
                                                }
                                                @media (min-width: 550px) {
                                                    #banner-{{$slider->id}} {
                                                        padding-top: 36%;
                                                    }
                                                }
                                            </style>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="loading-spin dark large centered"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="section_365490495">
            <div class="bg section-bg fill bg-fill  bg-loaded"> </div>
            <div class="section-content relative">
                <div class="row align-center" id="row-88004480">
                    <div id="col-567594061" class="col pd-bottom-0 small-12 large-12">
                        <div class="col-inner">
                            <div class="container section-title-container ps-divider" style="margin-bottom:20px;">
                                <h3 class="section-title section-title-center"><b></b>
                                    <span class="section-title-main" style="font-size:140%; text-transform: uppercase">{{trans("label.about_us")}}</span><b></b>
                                </h3>
                            </div>
                            <div class="row align-middle" id="row-60942239">
                                <div id="col-2002485825" class="col medium-6 small-12 large-6" data-animate="fadeInLeft">
                                    <div class="col-inner">
                                        <div class="img has-hover x md-x lg-x y md-y lg-y" style=" width: 100%;">
                                            <a class="" href="{{route('about-us')}}">
                                                <div data-animate="flipInX">
                                                    <div class="img-inner image-glow image-zoom dark">
                                                        <img width="800" height="533"
                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20533%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                                             data-src="{{$aboutUs->image}}"
                                                             class="lazy-load attachment-large size-large"
                                                             alt="{{$aboutUs->renderTitle()}}" loading="lazy" srcset=""
                                                             sizes="(max-width: 800px) 100vw, 800px">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="gap-1360708190" class="gap-element clearfix show-for-small" style="display:block; height:auto;">
                                            <style>
                                                #gap-1360708190 {
                                                    padding-top: 0px;
                                                }
                                                @media (min-width: 550px) {
                                                    #gap-1360708190 {
                                                        padding-top: 30px;
                                                    }
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>


                                <div id="col-1460821999" class="col medium-6 small-12 large-6" data-animate="fadeInRight">
                                    <div class="col-inner">
                                        <div>
                                            {!! $aboutUs->renderDescription() !!}
                                        </div>
                                        <a href="{{route('about-us')}}" target="_self"
                                           class="button primary is-link" style="border-radius:10px;">
                                            <span>Tìm hiểu thêm</span>
                                            <i class="icon-angle-right"></i></a>
                                    </div>
                                </div>


                            </div>
                            <div id="gap-1103053011" class="gap-element clearfix"
                                 style="display:block; height:auto;">

                                <style>
                                    #gap-1103053011 {
                                        padding-top: 30px;
                                    }
                                </style>
                            </div>


                        </div>
                    </div>


                </div>

            </div>


            <style>
                #section_365490495 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    background-color: rgb(245, 245, 245);
                }

                #section_365490495 .ux-shape-divider--top svg {
                    height: 150px;
                    --divider-top-width: 100%;
                }

                #section_365490495 .ux-shape-divider--bottom svg {
                    height: 150px;
                    --divider-width: 100%;
                }
            </style>
        </section>

{{--        <section class="section" id="section_1793062646">--}}
{{--            <div class="bg section-bg fill bg-fill  bg-loaded">--}}


{{--            </div>--}}

{{--            <div class="ux-shape-divider ux-shape-divider--top ux-shape-divider--style-triangle">--}}
{{--                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">--}}
{{--                    <path class="ux-shape-fill" d="M1025 103H-25L500 3L1025 103Z"></path>--}}
{{--                </svg>--}}
{{--            </div>--}}


{{--            <div class="section-content relative">--}}


{{--                <div id="gap-229861892" class="gap-element clearfix" style="display:block; height:auto;">--}}

{{--                    <style>--}}
{{--                        #gap-229861892 {--}}
{{--                            padding-top: 60px;--}}
{{--                        }--}}
{{--                    </style>--}}
{{--                </div>--}}


{{--                <div class="row" id="row-1937343494">--}}


{{--                    <div id="col-652273388" class="col pd-bottom-0 small-12 large-12" data-animate="bounceIn">--}}
{{--                        <div class="col-inner text-center">--}}


{{--                            <div class="container section-title-container ps-divider"><h3--}}
{{--                                    class="section-title section-title-center"><b></b><span--}}
{{--                                        class="section-title-main"--}}
{{--                                        style="font-size:140%;">SẢN PHẨM NỔI BẬT</span><b></b></h3></div>--}}


{{--                            <div--}}
{{--                                class="row large-columns-3 medium-columns- small-columns-2 row-normal slider row-slider slider-nav-simple slider-nav-push"--}}
{{--                                data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">--}}

{{--                                <div class="product-category col" data-animate="flipInX">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a href="https://techviet.com.vn/p/cong-nghe-thong-tin">--}}
{{--                                            <div class="box box-category has-hover box-default ">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="image-zoom image-cover" style="padding-top:75%;">--}}
{{--                                                        <img class="lazy-load"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/02/dieu-khien-va-tu-dong-hoa.jpg"--}}
{{--                                                             alt="Công nghệ thông tin" width="300" height="300">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <h5 class="uppercase header-title">--}}
{{--                                                            Công nghệ thông tin </h5>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a></div>--}}
{{--                                </div>--}}
{{--                                <div class="product-category col" data-animate="flipInX">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a href="https://techviet.com.vn/p/hoi-nghi-truyen-hinh-hien-thi">--}}
{{--                                            <div class="box box-category has-hover box-default ">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="image-zoom image-cover" style="padding-top:75%;">--}}
{{--                                                        <img class="lazy-load"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/02/hoi-nghi-truyen-hinh.jpg"--}}
{{--                                                             alt="Hội nghị, truyền hình, hiển thị" width="300"--}}
{{--                                                             height="300"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <h5 class="uppercase header-title">--}}
{{--                                                            Hội nghị, truyền hình, hiển thị </h5>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a></div>--}}
{{--                                </div>--}}
{{--                                <div class="product-category col" data-animate="flipInX">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a href="https://techviet.com.vn/p/camera-cac-loai">--}}
{{--                                            <div class="box box-category has-hover box-default ">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="image-zoom image-cover" style="padding-top:75%;">--}}
{{--                                                        <img class="lazy-load"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/03/camera.jpg"--}}
{{--                                                             alt="Camera các loại" width="300" height="300"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <h5 class="uppercase header-title">--}}
{{--                                                            Camera các loại </h5>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <a href="https://techviet.com.vn/san-pham" target="_self"--}}
{{--                               class="button primary is-underline pd-bottom-0" style="border-radius:99px;">--}}
{{--                                <span>Xem tất cả</span>--}}
{{--                                <i class="icon-angle-right"></i></a>--}}


{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--            </div>--}}


{{--            <style>--}}
{{--                #section_1793062646 {--}}
{{--                    padding-top: 30px;--}}
{{--                    padding-bottom: 30px;--}}
{{--                }--}}

{{--                #section_1793062646 .ux-shape-divider--top svg {--}}
{{--                    height: 50px;--}}
{{--                    --divider-top-width: 100%;--}}
{{--                }--}}

{{--                #section_1793062646 .ux-shape-divider--top .ux-shape-fill {--}}
{{--                    fill: rgb(245, 245, 245);--}}
{{--                }--}}

{{--                #section_1793062646 .ux-shape-divider--bottom svg {--}}
{{--                    height: 150px;--}}
{{--                    --divider-width: 100%;--}}
{{--                }--}}
{{--            </style>--}}
{{--        </section>--}}

{{--        <section class="section dark has-parallax" id="section_1360553020">--}}
{{--            <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background=""--}}
{{--                 data-parallax="-5">--}}


{{--                <div class="section-bg-overlay absolute fill"></div>--}}


{{--            </div>--}}

{{--            <div class="ux-shape-divider ux-shape-divider--top ux-shape-divider--style-triangle">--}}
{{--                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">--}}
{{--                    <path class="ux-shape-fill" d="M1025 103H-25L500 3L1025 103Z"></path>--}}
{{--                </svg>--}}
{{--            </div>--}}

{{--            <div class="ux-shape-divider ux-shape-divider--bottom ux-shape-divider--style-triangle-invert">--}}
{{--                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">--}}
{{--                    <path class="ux-shape-fill" d="M500 95.6L0 0V100H1000V0L500 95.6Z"></path>--}}
{{--                </svg>--}}
{{--            </div>--}}

{{--            <div class="section-content relative">--}}


{{--                <div class="container section-title-container ps-divider div-light" style="margin-bottom:20px;"><h3--}}
{{--                        class="section-title section-title-center"><b></b><span class="section-title-main"--}}
{{--                                                                                style="font-size:140%;color:rgb(255, 255, 255);">DỊCH VỤ CỦA TECHVIET</span><b></b>--}}
{{--                    </h3></div>--}}

{{--                <div class="row" id="row-2057260663">--}}


{{--                    <div id="col-808406361" class="col pd-bottom-0 medium-3 small-6 large-3" data-animate="flipInY">--}}
{{--                        <div class="col-inner">--}}


{{--                            <a class="plain" href="https://techviet.com.vn/dich-vu/trien-khai-lap-dat">--}}
{{--                                <div class="icon-box featured-box icon-box-center text-center">--}}
{{--                                    <div class="icon-box-img has-icon-bg" style="width: 100px">--}}
{{--                                        <div class="icon">--}}
{{--                                            <div class="icon-inner" style="border-width:2px;">--}}
{{--                                                <!--?xml version="1.0" encoding="iso-8859-1"?-->--}}
{{--                                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->--}}
{{--                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
{{--                                                     viewBox="0 0 496 496"--}}
{{--                                                     style="enable-background:new 0 0 496 496;"--}}
{{--                                                     xml:space="preserve">--}}
{{--<g>--}}
{{--    <g>--}}
{{--        <g>--}}
{{--            <path d="M80,200c-32.576,0-59.488,24.48-63.448,56H0v16h19.056L32,297.888v18.976l-17.48,3.28l2.952,15.72L32,333.136v23.728--}}
{{--				l-17.48,3.28l2.952,15.72L32,373.136v23.728l-17.48,3.28l2.952,15.72L32,413.136v21.76l48,57.6l47.768-57.32l17.712-3.32--}}
{{--				l-2.952-15.72L128,418.864v-23.728l17.48-3.28l-2.952-15.72L128,378.864v-23.728l17.48-3.28l-2.952-15.72L128,338.864v-23.728--}}
{{--				l17.48-3.28l-2.952-15.72L128,298.864v-0.976L140.944,272H160v-16h-16.56C139.488,224.48,112.576,200,80,200z M80,467.504--}}
{{--				l-16.84-20.208l39.92-7.488L80,467.504z M112,421.864l-60.568,11.352L48,429.104v-18.968l64-12V421.864z M112,381.864l-64,12--}}
{{--				v-23.728l64-12V381.864z M112,341.864l-64,12v-23.728l64-12V341.864z M112,294.112v7.752l-64,12v-19.752L36.944,272h86.112--}}
{{--				L112,294.112z M32.72,256c3.392-20.056,19.224-35.888,39.28-39.28V240h16v-23.28c20.056,3.384,35.888,19.224,39.28,39.28H32.72z"></path>--}}
{{--            <path d="M352,408c0,30.872,25.128,56,56,56s56-25.128,56-56s-25.128-56-56-56S352,377.128,352,408z M416,368.808--}}
{{--				C431.648,372,444,384.352,447.192,400H432v16h15.192C444,431.648,431.648,444,416,447.192V432h-16v15.192--}}
{{--				C384.352,444,372,431.648,368.808,416H384v-16h-15.192C372,384.352,384.352,372,400,368.808V384h16V368.808z"></path>--}}
{{--            <path d="M496,32V16h-16V0H336v16h-16v16h16v16h-16v16h16v16h-64V51.312l8.856-8.864L270.248,0h-44.504l-10.608,42.456L224,51.312--}}
{{--				V80H72v104h16V96h136v160h-32v16h16v184c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40V272h16v-16h-32V96h64v16h-16v16h16--}}
{{--				v16h-16v16h16v16h64v49.136c-13.768,3.576-24,15.992-24,30.864s10.232,27.288,24,30.864v33.544--}}
{{--				c-44.784,4.056-80,41.768-80,87.592c0,48.52,39.48,88,88,88c48.52,0,88-39.48,88-88c0-45.824-35.216-83.536-80-87.592v-33.544--}}
{{--				c13.76-3.576,24-15.992,24-30.864s-10.24-27.288-24-30.864V176h64v-16h16v-16h-16v-16h16v-16h-16V96h16V80h-16V64h16V48h-16V32--}}
{{--				H496z M238.248,16h19.504l5.392,21.544L256,44.688V256h-16V44.688l-7.144-7.136L238.248,16z M272,288h-16v16h16v16h-16v16h16v16--}}
{{--				h-16v16h16v16h-16v16h16v16h-16v16h16v16h-16v16h14.528c-3.312,9.288-12.112,16-22.528,16s-19.216-6.712-22.528-16H240v-16h-16--}}
{{--				v-16h16v-16h-16v-16h16v-16h-16v-16h16v-16h-16v-16h16v-16h-16v-16h16v-16h-16v-16h48V288z M480,408c0,39.704-32.296,72-72,72--}}
{{--				c-39.704,0-72-32.296-72-72c0-39.704,32.296-72,72-72C447.704,336,480,368.296,480,408z M424,256c0,8.824-7.184,16-16,16--}}
{{--				c-8.824,0-16-7.176-16-16c0-8.824,7.176-16,16-16C416.816,240,424,247.176,424,256z M464,160H352V16h112V160z"></path>--}}
{{--            <rect x="384" y="32" width="16" height="16"></rect>--}}
{{--            <rect x="384" y="64" width="16" height="80"></rect>--}}
{{--            <rect x="416" y="32" width="16" height="112"></rect>--}}
{{--        </g>--}}
{{--    </g>--}}
{{--</g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--</svg>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="icon-box-text last-reset">--}}


{{--                                        <div id="text-2770854012" class="text">--}}


{{--                                            <h3>TRIỂN KHAI LẮP ĐẶT</h3>--}}
{{--                                            <p>Các hệ thống CNTT, phòng họp, âm thanh chuyên nghiệp, camera giám--}}
{{--                                                sát…</p>--}}

{{--                                            <style>--}}
{{--                                                #text-2770854012 {--}}
{{--                                                    text-align: center;--}}
{{--                                                }--}}
{{--                                            </style>--}}
{{--                                        </div>--}}


{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}


{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div id="col-1051782541" class="col pd-bottom-0 medium-3 small-6 large-3"--}}
{{--                         data-animate="flipInY">--}}
{{--                        <div class="col-inner">--}}


{{--                            <a class="plain" href="https://techviet.com.vn/dich-vu/bao-hanh-bao-tri-he-thong">--}}
{{--                                <div class="icon-box featured-box icon-box-center text-center">--}}
{{--                                    <div class="icon-box-img has-icon-bg" style="width: 100px">--}}
{{--                                        <div class="icon">--}}
{{--                                            <div class="icon-inner" style="border-width:2px;">--}}
{{--                                                <!--?xml version="1.0" encoding="iso-8859-1"?-->--}}
{{--                                                <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->--}}

{{--                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
{{--                                                     viewBox="0 0 357.25 357.25"--}}
{{--                                                     style="enable-background:new 0 0 357.25 357.25;"--}}
{{--                                                     xml:space="preserve">--}}
{{--<path d="M127.712,283.641c-40.053-19.423-65.933-60.717-65.933-105.201c0-39.34,19.617-75.8,52.475-97.531--}}
{{--	c4.146-2.742,5.284-8.326,2.542-12.472s-8.325-5.284-12.472-2.542c-1.855,1.228-3.673,2.494-5.455,3.801L81.093,54.779--}}
{{--	c-10.266-8.613-25.627-7.27-34.241,2.996L36.731,69.839c-4.164,4.961-6.145,11.261-5.579,17.74--}}
{{--	c0.567,6.48,3.612,12.341,8.573,16.502l17.807,14.943c-4.276,8.717-7.613,17.911-9.927,27.423H24.304--}}
{{--	C10.903,146.447,0,157.35,0,170.751v15.75c0,13.401,10.903,24.304,24.304,24.304h23.395c2.323,9.426,5.662,18.577,9.973,27.305--}}
{{--	l-17.944,15.059c-4.963,4.163-8.008,10.023-8.575,16.504c-0.566,6.479,1.415,12.779,5.577,17.737l10.123,12.068--}}
{{--	c4.801,5.72,11.696,8.668,18.638,8.668c5.514,0,11.059-1.862,15.604-5.674l18.01-15.113c6.503,4.752,13.445,8.933,20.753,12.477--}}
{{--	c4.473,2.167,9.856,0.301,12.025-4.171C134.052,291.193,132.184,285.809,127.712,283.641z M24.304,192.806--}}
{{--	c-3.476,0-6.304-2.828-6.304-6.304v-15.75c0-3.476,2.828-6.304,6.304-6.304H44.5c-0.478,4.618-0.721,9.287-0.721,13.992--}}
{{--	c0,4.82,0.255,9.614,0.76,14.366H24.304z M51.294,90.29c-1.277-1.071-2.062-2.591-2.21-4.279c-0.147-1.689,0.362-3.323,1.436-4.602--}}
{{--	l10.122-12.065c1.245-1.484,3.033-2.249,4.833-2.249c1.431,0,2.869,0.483,4.048,1.472L84.898,81.47--}}
{{--	c-6.863,6.624-12.958,13.911-18.219,21.731L51.294,90.29z M69.525,288.683c-2.665,2.235-6.651,1.886-8.884-0.774L50.519,275.84--}}
{{--	c-1.072-1.277-1.582-2.911-1.434-4.6c0.148-1.688,0.933-3.208,2.212-4.282l15.56-13.058c5.334,7.889,11.457,15.156,18.256,21.703--}}
{{--	L69.525,288.683z M332.946,146.447h-23.283c-2.309-9.528-5.642-18.729-9.916-27.446l17.778-14.919--}}
{{--	c10.265-8.613,11.609-23.974,2.996-34.242l-10.123-12.065c-8.614-10.266-23.975-11.61-34.241-2.996l-17.775,14.916--}}
{{--	c-2.349-1.721-4.766-3.376-7.243-4.959c-4.189-2.676-9.754-1.45-12.43,2.739c-2.676,4.189-1.45,9.754,2.739,12.43--}}
{{--	c33.826,21.611,54.021,58.446,54.021,98.535c0,45.388-26.627,87.036-67.836,106.104c-4.511,2.087-6.476,7.437-4.389,11.947--}}
{{--	c2.087,4.511,7.438,6.477,11.947,4.389c8.167-3.779,15.837-8.326,22.941-13.532l18.024,15.124c4.404,3.696,9.864,5.672,15.568,5.672--}}
{{--	c0.721,0,1.445-0.032,2.172-0.095c6.479-0.567,12.34-3.611,16.502-8.572l10.123-12.064c8.614-10.267,7.271-25.627-2.996-34.242--}}
{{--	l-18.023-15.125c4.278-8.657,7.641-17.785,9.994-27.24h23.449c13.401,0,24.304-10.903,24.304-24.304v-15.75--}}
{{--	C357.25,157.35,346.347,146.447,332.946,146.447z M305.956,266.958c2.663,2.235,3.012,6.22,0.777,8.884l-10.123,12.064--}}
{{--	c-1.072,1.277-2.592,2.062-4.281,2.209c-1.694,0.146-3.323-0.361-4.601-1.434l-15.625-13.111--}}
{{--	c6.833-6.601,12.938-13.892,18.225-21.728L305.956,266.958z M290.6,103.18c-5.261-7.814-11.365-15.1-18.235-21.72l15.363-12.891--}}
{{--	c2.663-2.234,6.647-1.886,8.882,0.776l10.122,12.064c2.235,2.664,1.887,6.65-0.776,8.885L290.6,103.18z M339.25,186.501--}}
{{--	c0,3.476-2.828,6.304-6.304,6.304h-20.251c0.512-4.74,0.773-9.536,0.773-14.366c0-4.707-0.242-9.377-0.716-13.992h20.193--}}
{{--	c3.476,0,6.304,2.828,6.304,6.304V186.501z M239.213,178.439c0-21.093-10.711-40.345-28.654-51.498--}}
{{--	c-4.221-2.624-5.516-8.173-2.892-12.395c2.624-4.22,8.173-5.517,12.395-2.892c23.263,14.46,37.151,39.426,37.151,66.785--}}
{{--	c0,18.602-6.619,36.647-18.636,50.813c-1.78,2.098-4.315,3.178-6.867,3.178c-2.058,0-4.126-0.702-5.818-2.137--}}
{{--	c-3.791-3.215-4.256-8.895-1.041-12.685C234.112,206.69,239.213,192.781,239.213,178.439z M133.413,218.772--}}
{{--	c3.311,3.708,2.988,9.397-0.72,12.708c-1.716,1.532-3.858,2.286-5.991,2.286c-2.475,0-4.939-1.015-6.717-3.006--}}
{{--	c-12.862-14.409-19.946-32.99-19.946-52.32c0-29.089,15.956-55.672,41.641-69.376c4.385-2.339,9.837-0.682,12.177,3.704--}}
{{--	c2.34,4.385,0.682,9.837-3.704,12.177c-19.808,10.568-32.113,31.066-32.113,53.495C118.039,193.343,123.499,207.667,133.413,218.772--}}
{{--	z M187.474,207.429c0.1-0.538,0.152-1.092,0.152-1.659V94.305l32.654-18.853c2.785-1.608,4.5-4.579,4.5-7.794V24.754--}}
{{--	c0-3.215-1.715-6.187-4.5-7.794L201.704,6.235c-4.304-2.485-9.81-1.011-12.294,3.294c-2.485,4.305-1.01,9.809,3.294,12.294--}}
{{--	l14.076,8.127v32.511l-28.154,16.255L150.47,62.462V29.951l14.078-8.127c4.305-2.485,5.78-7.989,3.295-12.294--}}
{{--	c-2.485-4.305-7.99-5.78-12.294-3.295L136.97,16.96c-2.785,1.607-4.5,4.579-4.5,7.794v42.904c0,3.215,1.715,6.187,4.5,7.794--}}
{{--	l32.656,18.853V205.77c0,0.567,0.052,1.121,0.152,1.659c-12.179,3.78-21.048,15.152-21.048,28.557v95.4--}}
{{--	c0,11.49,9.346,20.837,20.833,20.837h18.12c11.49,0,20.837-9.347,20.837-20.837v-95.4--}}
{{--	C208.521,222.581,199.652,211.209,187.474,207.429z M190.521,331.386c0,1.538-1.299,2.837-2.837,2.837h-18.12--}}
{{--	c-1.536,0-2.833-1.299-2.833-2.837v-95.4c0-6.558,5.336-11.893,11.896-11.893s11.896,5.335,11.896,11.893V331.386z"></path>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--</svg>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="icon-box-text last-reset">--}}


{{--                                        <div id="text-1874775451" class="text">--}}


{{--                                            <h3>BẢO HÀNH, BẢO TRÌ</h3>--}}
{{--                                            <p>Các hệ thống theo yêu cầu với quy trình nghiêm ngặt, có độ tin cậy--}}
{{--                                                cao.</p>--}}

{{--                                            <style>--}}
{{--                                                #text-1874775451 {--}}
{{--                                                    text-align: center;--}}
{{--                                                }--}}
{{--                                            </style>--}}
{{--                                        </div>--}}


{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}


{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div id="col-598663098" class="col pd-bottom-0 medium-3 small-6 large-3" data-animate="flipInY">--}}
{{--                        <div class="col-inner">--}}


{{--                            <a class="plain" href="https://techviet.com.vn/dich-vu/cho-thue-thiet-bi-he-thong">--}}
{{--                                <div class="icon-box featured-box icon-box-center text-center">--}}
{{--                                    <div class="icon-box-img has-icon-bg" style="width: 100px">--}}
{{--                                        <div class="icon">--}}
{{--                                            <div class="icon-inner" style="border-width:2px;">--}}
{{--                                                <!--?xml version="1.0" encoding="iso-8859-1"?-->--}}
{{--                                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->--}}
{{--                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
{{--                                                     viewBox="0 0 226.263 226.263"--}}
{{--                                                     style="enable-background:new 0 0 226.263 226.263;"--}}
{{--                                                     xml:space="preserve">--}}
{{--<g>--}}
{{--    <g>--}}
{{--        <g>--}}
{{--            <path d="M206.09,8.081H20.173C9.049,8.081,0,17.144,0,28.283v129.293c0,11.139,9.049,20.202,20.173,20.202H92.93v32.323H68.687--}}
{{--				v8.081h24.242h40.404h24.242v-8.081h-24.242v-32.323h72.757c11.123,0,20.173-9.063,20.173-20.202V28.283--}}
{{--				C226.263,17.144,217.213,8.081,206.09,8.081z M101.01,210.101v-32.323h24.242v32.323H101.01z M218.182,157.576--}}
{{--				c0,6.684-5.423,12.121-12.092,12.121h-72.757H92.929H20.173c-6.668,0-12.092-5.437-12.092-12.121V28.283--}}
{{--				c0-6.684,5.423-12.121,12.092-12.121H206.09c6.668,0,12.092,5.437,12.092,12.121V157.576z"></path>--}}
{{--            <path--}}
{{--                d="M20.202,157.576h185.859V28.283H20.202V157.576z M28.283,36.364H197.98v113.131H28.283V36.364z"></path>--}}
{{--            <path d="M186.169,92.827h-44.171c-1.614,0-3.074,0.961-3.711,2.444l-12.466,28.971l-18.742-78.508--}}
{{--				c-0.387-1.616-1.722-2.831-3.37-3.062c-1.643-0.251-3.267,0.568-4.082,2.02L72.54,92.827H41.008c-2.231,0-4.04,1.809-4.04,4.04--}}
{{--				s1.809,4.04,4.04,4.04h33.894c1.46,0,2.805-0.787,3.522-2.06l23.191-41.207l19.174,80.325c0.404,1.693,1.848,2.938,3.583,3.086--}}
{{--				c0.116,0.012,0.233,0.016,0.349,0.016c1.602,0,3.068-0.951,3.709-2.444l16.229-37.715h41.511c2.231,0,4.04-1.809,4.04-4.04--}}
{{--				C190.209,94.636,188.4,92.827,186.169,92.827z"></path>--}}
{{--        </g>--}}
{{--    </g>--}}
{{--</g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--</svg>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="icon-box-text last-reset">--}}


{{--                                        <div id="text-710071743" class="text">--}}


{{--                                            <h3>CHO THUÊ THIẾT BỊ</h3>--}}
{{--                                            <p>Đầy đủ các trang thiết bị, âm thanh chuyên nghiệp… với giá cả phải--}}
{{--                                                chăng.</p>--}}

{{--                                            <style>--}}
{{--                                                #text-710071743 {--}}
{{--                                                    text-align: center;--}}
{{--                                                }--}}
{{--                                            </style>--}}
{{--                                        </div>--}}


{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}


{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div id="col-114081637" class="col pd-bottom-0 medium-3 small-6 large-3" data-animate="flipInY">--}}
{{--                        <div class="col-inner">--}}


{{--                            <a class="plain"--}}
{{--                               href="https://techviet.com.vn/dich-vu/dao-tao-tu-van-chuyen-giao-cong-nghe">--}}
{{--                                <div class="icon-box featured-box icon-box-center text-center">--}}
{{--                                    <div class="icon-box-img has-icon-bg" style="width: 100px">--}}
{{--                                        <div class="icon">--}}
{{--                                            <div class="icon-inner" style="border-width:2px;">--}}
{{--                                                <!--?xml version="1.0" encoding="iso-8859-1"?-->--}}
{{--                                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->--}}
{{--                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
{{--                                                     viewBox="0 0 496 496"--}}
{{--                                                     style="enable-background:new 0 0 496 496;"--}}
{{--                                                     xml:space="preserve">--}}
{{--<g>--}}
{{--    <g>--}}
{{--        <path d="M402.524,432l-18.52-55.568c-6.472-19.4-22.984-33.72-43.112-37.384l-53.464-9.728v-4.144--}}
{{--			c9.304-5.4,17.4-12.624,23.848-21.176h16.152c13.232,0,24-10.768,24-24v-96c0-57.344-46.656-104-104-104s-104,46.656-104,104v56--}}
{{--			c0,15.424,10.968,28.328,25.512,31.336c4.488,22.992,18.856,42.448,38.488,53.84v4.144l-53.472,9.728--}}
{{--			c-20.12,3.664-36.64,17.984-43.104,37.384l-3.2,9.608l-27.248-27.248c-3.12-3.12-3.12-8.2,0-11.32l31.6-31.592l-59.312-59.312--}}
{{--			L16.98,292.28c-10.576,10.576-16.4,24.64-16.4,39.6s5.824,29.016,16.4,39.592l108.12,108.12C135.676,490.168,149.74,496,164.7,496--}}
{{--			c14.96,0,29.016-5.832,39.344-16.168l38.968-35.704L230.86,432H402.524z M335.428,280c0,4.416-3.592,8-8,8H320.7--}}
{{--			c2.32-5.288,4.08-10.864,5.216-16.664c3.424-0.712,6.576-2.072,9.512-3.784V280z M327.428,253.776v-27.552--}}
{{--			c4.76,2.776,8,7.88,8,13.776S332.188,251,327.428,253.776z M167.428,253.776c-4.76-2.776-8-7.88-8-13.776s3.24-11,8-13.776--}}
{{--			V253.776z M167.428,200v9.136c-2.848,0.744-5.52,1.864-8,3.312V184c0-48.52,39.48-88,88-88s88,39.48,88,88v28.448--}}
{{--			c-2.48-1.448-5.152-2.576-8-3.312V200h-8c-23.656,0-45.896-9.216-62.632-25.944l-9.368-9.368l-9.368,9.368--}}
{{--			C221.324,190.784,199.084,200,175.428,200H167.428z M183.428,256v-40.304c24.024-1.808,46.424-11.72,64-28.432--}}
{{--			c17.576,16.712,39.976,26.632,64,28.432V256c0,11.664-3.184,22.576-8.656,32h-55.344v16h42.192c-11.28,9.928-26.024,16-42.192,16--}}
{{--			C212.14,320,183.428,291.288,183.428,256z M271.428,332.312v0.376l-24,24l-24-24v-0.376c7.584,2.384,15.64,3.688,24,3.688--}}
{{--			S263.844,334.696,271.428,332.312z M126.02,381.488c4.616-13.856,16.416-24.088,30.792-26.712l55.92-10.16l34.696,34.696--}}
{{--			l34.688-34.688l55.912,10.16c14.376,2.624,26.176,12.848,30.792,26.712L380.332,416H214.86l-31.16-31.16l-34.624,31.32--}}
{{--			c-3.016,3.032-8.288,3.032-11.312,0l-17.472-17.472L126.02,381.488z M52.684,279.192l36.688,36.688l-8.688,8.688L43.996,287.88--}}
{{--			L52.684,279.192z M192.964,468.296c-7.552,7.536-17.6,11.704-28.28,11.704c-10.68,0-20.728-4.168-28.288-11.72L28.276,360.168--}}
{{--			c-7.552-7.552-11.712-17.6-11.712-28.28c0-10.688,4.16-20.736,11.712-28.288l4.4-4.4l36.688,36.688l-0.288,0.288--}}
{{--			c-9.352,9.36-9.352,24.584,0,33.944l57.368,57.368c4.536,4.528,10.56,7.032,16.976,7.032s12.44-2.496,16.68-6.752l0.6-0.536--}}
{{--			l36.856,36.856L192.964,468.296z M209.364,453.256l-36.776-36.776l10.568-9.552l36.712,36.712L209.364,453.256z"></path>--}}
{{--    </g>--}}
{{--</g>--}}
{{--                                                    <g>--}}
{{--                                                        <g>--}}
{{--                                                            <path d="M471.428,0h-112c-13.232,0-24,10.768-24,24v64c0,13.232,10.768,24,24,24h21.368l-8.272,48.248l77.2-48.248h21.704--}}
{{--			c13.232,0,24-10.768,24-24V24C495.428,10.768,484.66,0,471.428,0z M479.428,88c0,4.408-3.592,8-8,8h-26.296l-50.808,31.752--}}
{{--			L399.772,96h-40.344c-4.408,0-8-3.592-8-8V24c0-4.408,3.592-8,8-8h112c4.408,0,8,3.592,8,8V88z"></path>--}}
{{--                                                        </g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                        <g>--}}
{{--                                                            <rect x="367.428" y="32" width="96" height="16"></rect>--}}
{{--                                                        </g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                        <g>--}}
{{--                                                            <rect x="367.428" y="64" width="64" height="16"></rect>--}}
{{--                                                        </g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                        <g>--}}
{{--                                                            <rect x="447.428" y="64" width="16" height="16"></rect>--}}
{{--                                                        </g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                        <g>--}}
{{--                                                            <path d="M247.428,24C142.9,24,52.86,96.304,29.452,197.16l-15.16-25.272l-13.72,8.232l28.12,46.856l46.856-28.12l-8.232-13.72--}}
{{--			l-21.68,13.008C68.308,105.88,151.276,40,247.428,40c21.016,0,41.752,3.12,61.632,9.28L313.796,34--}}
{{--			C292.38,27.36,270.052,24,247.428,24z"></path>--}}
{{--                                                        </g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                        <g>--}}
{{--                                                            <path d="M491.54,177.136l-46.856-28.12l-28.112,46.864l13.72,8.232l14-23.336c7.368,21.56,11.136,44.112,11.136,67.224--}}
{{--			c0,47.576-16.48,94.088-46.392,130.96l12.424,10.08c32.224-39.712,49.968-89.808,49.968-141.04--}}
{{--			c0-24.472-3.944-48.368-11.632-71.248l23.512,14.104L491.54,177.136z"></path>--}}
{{--                                                        </g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--                                                    <g>--}}
{{--                                                    </g>--}}
{{--</svg>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="icon-box-text last-reset">--}}


{{--                                        <div id="text-1885506737" class="text">--}}


{{--                                            <h3>ĐÀO TẠO, TƯ VẤN</h3>--}}
{{--                                            <p>Chuyển giao công nghệ theo yêu cầu của khách hàng. Nhanh chóng và--}}
{{--                                                chuyên nghiệp.</p>--}}

{{--                                            <style>--}}
{{--                                                #text-1885506737 {--}}
{{--                                                    text-align: center;--}}
{{--                                                }--}}
{{--                                            </style>--}}
{{--                                        </div>--}}


{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}


{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--            </div>--}}


{{--            <style>--}}
{{--                #section_1360553020 {--}}
{{--                    padding-top: 100px;--}}
{{--                    padding-bottom: 100px;--}}
{{--                }--}}

{{--                #section_1360553020 .section-bg-overlay {--}}
{{--                    background-color: rgba(0, 0, 0, 0.686);--}}
{{--                }--}}

{{--                #section_1360553020 .section-bg.bg-loaded {--}}
{{--                    background-image: url(images/TechViet-office.jpg);--}}
{{--                }--}}

{{--                #section_1360553020 .ux-shape-divider--top svg {--}}
{{--                    height: 50px;--}}
{{--                    --divider-top-width: 100%;--}}
{{--                }--}}

{{--                #section_1360553020 .ux-shape-divider--bottom svg {--}}
{{--                    height: 50px;--}}
{{--                    --divider-width: 100%;--}}
{{--                }--}}
{{--            </style>--}}
{{--        </section>--}}

{{--        <section class="section" id="section_1039536166">--}}
{{--            <div class="bg section-bg fill bg-fill  bg-loaded">--}}


{{--            </div>--}}


{{--            <div class="section-content relative">--}}


{{--                <div id="gap-933752254" class="gap-element clearfix" style="display:block; height:auto;">--}}

{{--                    <style>--}}
{{--                        #gap-933752254 {--}}
{{--                            padding-top: 30px;--}}
{{--                        }--}}
{{--                    </style>--}}
{{--                </div>--}}


{{--                <div class="container section-title-container ps-divider"><h3--}}
{{--                        class="section-title section-title-center"><b></b><span class="section-title-main"--}}
{{--                                                                                style="font-size:140%;">GIẢI PHÁP CỦA TECHVIET</span><b></b>--}}
{{--                    </h3></div>--}}

{{--                <div class="row" id="row-1707653227">--}}


{{--                    <div id="col-197918817" class="col pd-bottom-0 small-12 large-12">--}}
{{--                        <div class="col-inner">--}}


{{--                            <div--}}
{{--                                class="row large-columns-4 medium-columns-3 small-columns-2 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"--}}
{{--                                data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">--}}

{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-trung-tam-ha-tang-trung-tam-du-lieu"--}}
{{--                                           title="Giải pháp trung tâm hạ tầng, trung tâm dữ liệu" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="451"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20451%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/02/data-center-800x451.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Internet Web Concept. Shot In The Modern Data Center: It Engineer Standing Beside Open Server Rack Cabinets And Touching Digital Connections On A Server."--}}
{{--                                                             loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/02/data-center-800x451.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/02/data-center-400x226.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/02/data-center-768x433.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/02/data-center-600x339.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/02/data-center.jpg 1200w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp trung tâm hạ tầng, trung tâm dữ liệu</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-quan-ly-noi-dung-hien-thi-tap-trung"--}}
{{--                                           title="Giải pháp Quản lý nội dung hiển thị tập trung" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="450"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20450%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/02/sao-luu-luu-tru-800x450.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Sao Luu Luu Tru" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/02/sao-luu-luu-tru-800x450.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/02/sao-luu-luu-tru-400x225.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/02/sao-luu-luu-tru-768x432.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/02/sao-luu-luu-tru-600x337.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/02/sao-luu-luu-tru.jpg 868w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp Quản lý nội dung hiển thị tập trung</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-tong-the-cong-nghe-thong-tin"--}}
{{--                                           title="Giải pháp tổng thể công nghệ thông tin" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="333"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20333%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/02/newslide2-800x333.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Newslide2" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/02/newslide2-800x333.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide2-400x167.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide2-768x320.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide2-1536x640.jpg 1536w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide2-600x250.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide2.jpg 1920w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp tổng thể công nghệ thông tin</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-kiem-soat-ra-vao"--}}
{{--                                           title="Giải pháp kiểm soát ra, vào" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="531"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20531%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/02/bao-mat-800x531.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Bao Mat" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/02/bao-mat-800x531.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/02/bao-mat-400x265.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/02/bao-mat-768x509.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/02/bao-mat-600x398.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/02/bao-mat.jpg 900w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp kiểm soát ra, vào</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-am-thanh-cho-phong-hop-hoi-truong"--}}
{{--                                           title="Giải pháp âm thanh cho phòng họp, hội trường" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="486"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20486%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/02/truyen-hinh-truc-tuyen-800x486.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Truyen Hinh Truc Tuyen" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/02/truyen-hinh-truc-tuyen-800x486.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/02/truyen-hinh-truc-tuyen-400x243.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/02/truyen-hinh-truc-tuyen-768x467.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/02/truyen-hinh-truc-tuyen-600x365.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/02/truyen-hinh-truc-tuyen.jpg 1000w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp âm thanh cho phòng họp, hội trường</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-phong-hop-khong-giay-to"--}}
{{--                                           title="Giải pháp phòng họp không giấy tờ" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="333"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20333%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/02/newslide3-800x333.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Newslide3" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/02/newslide3-800x333.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide3-400x167.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide3-768x320.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide3-1536x640.jpg 1536w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide3-600x250.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide3.jpg 1920w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp phòng họp không giấy tờ</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-giam-sat-an-ninh-trat-tu"--}}
{{--                                           title="Giải pháp giám sát an ninh, trật tự" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="333"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20333%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/02/newslide1-800x333.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Newslide1" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/02/newslide1-800x333.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide1-400x167.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide1-768x320.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide1-1536x640.jpg 1536w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide1-600x250.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/02/newslide1.jpg 1920w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp giám sát an ninh, trật tự</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-hoi-nghi-truyen-hinh-thong-minh"--}}
{{--                                           title="Giải pháp hội nghị truyền hình thông minh" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="533"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20533%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1-800x533.jpeg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Img Techviet (1)" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1-800x533.jpeg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1-400x266.jpeg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1-768x511.jpeg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1-600x400.jpeg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1.jpeg 1200w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp hội nghị truyền hình thông minh</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-phong-hoc-thong-minh"--}}
{{--                                           title="Giải pháp Phòng học thông minh" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="478"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20478%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/03/phong-hoc-thong-minh-800x478.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Phong Hoc Thong Minh" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/03/phong-hoc-thong-minh-800x478.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/03/phong-hoc-thong-minh-400x239.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/03/phong-hoc-thong-minh-768x459.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/03/phong-hoc-thong-minh-600x358.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/03/phong-hoc-thong-minh.jpg 1015w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp Phòng học thông minh</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-diem-danh-lop-hoc-qua-khuon-mat"--}}
{{--                                           title="Giải pháp điểm danh lớp học qua khuôn mặt" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="450"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20450%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/03/diem-danh-lop-hoc-800x450.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Diem Danh Lop Hoc" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/03/diem-danh-lop-hoc-800x450.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/03/diem-danh-lop-hoc-400x225.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/03/diem-danh-lop-hoc-768x432.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/03/diem-danh-lop-hoc-600x338.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/03/diem-danh-lop-hoc.jpg 1200w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp điểm danh lớp học qua khuôn mặt</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-telehealth"--}}
{{--                                           title="Giải pháp Telehealth" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="420"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20420%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/03/telehealth-800x420.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Telehealth" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/03/telehealth-800x420.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/03/telehealth-400x210.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/03/telehealth-768x404.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/03/telehealth-600x315.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/03/telehealth.jpg 1024w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp Telehealth</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-trung-tam-dieu-hanh-giam-sat-thong-minh-ioc"--}}
{{--                                           title="Giải pháp Trung tâm điều hành giám sát thông minh (IOC)"--}}
{{--                                           target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="586"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20586%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-800x586.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Img Techviet (8)" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-800x586.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-400x293.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-768x563.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-1536x1125.jpg 1536w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-2048x1500.jpg 2048w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-600x439.jpg 600w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp Trung tâm điều hành giám sát thông minh--}}
{{--                                                            (IOC)</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-hien-thi-thong-tin-cho-hoi-truong-sanh-ngoai-troi"--}}
{{--                                           title="Giải pháp hiển thị thông tin cho hội trường, sảnh, ngoài trời"--}}
{{--                                           target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="533"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20533%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/03/led-display-800x533.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Led Display" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/03/led-display-800x533.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/03/led-display-400x266.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/03/led-display-768x511.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/03/led-display-600x400.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/03/led-display.jpg 1000w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp hiển thị thông tin cho hội trường, sảnh, ngoài--}}
{{--                                                            trời</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-giao-thong-thong-minh"--}}
{{--                                           title="Giải pháp giao thông thông minh" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="450"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20450%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/03/giao-thong-thong-minh-800x450.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Giao Thong Thong Minh" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/03/giao-thong-thong-minh-800x450.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/03/giao-thong-thong-minh-400x225.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/03/giao-thong-thong-minh-768x432.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/03/giao-thong-thong-minh-600x338.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/03/giao-thong-thong-minh.jpg 1000w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp giao thông thông minh</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-phong-ngua-chay-no"--}}
{{--                                           title="Giải pháp phòng ngừa cháy nổ" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="600"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20600%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/03/pccc-800x600.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Pccc" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/03/pccc-800x600.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/03/pccc-400x300.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/03/pccc-768x576.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/03/pccc-600x450.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/03/pccc.jpg 1440w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp phòng ngừa cháy nổ</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="page-col col" data-animate="fadeInUp">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a class="plain"--}}
{{--                                           href="https://techviet.com.vn/giai-phap/giai-phap-bai-do-xe-thong-minh"--}}
{{--                                           title="Giải pháp bãi đỗ xe thông minh" target="">--}}
{{--                                            <div class="page-box box has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="box-image image-zoom image-cover"--}}
{{--                                                         style="padding-top:75%;">--}}
{{--                                                        <img width="800" height="586"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20586%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2022/03/bai_do_xe_thong_minh-800x586.jpg"--}}
{{--                                                             class="lazy-load attachment-large size-large"--}}
{{--                                                             alt="Bãi đỗ Xe Thông Minh" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2022/03/bai_do_xe_thong_minh-800x586.jpg 800w, https://techviet.com.vn/wp-content/uploads/2022/03/bai_do_xe_thong_minh-400x293.jpg 400w, https://techviet.com.vn/wp-content/uploads/2022/03/bai_do_xe_thong_minh-768x563.jpg 768w, https://techviet.com.vn/wp-content/uploads/2022/03/bai_do_xe_thong_minh-600x440.jpg 600w, https://techviet.com.vn/wp-content/uploads/2022/03/bai_do_xe_thong_minh.jpg 820w"--}}
{{--                                                             sizes="(max-width: 800px) 100vw, 800px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center is-large">--}}
{{--                                                    <div class="box-text-inner">--}}
{{--                                                        <p>Giải pháp bãi đỗ xe thông minh</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--            </div>--}}


{{--            <style>--}}
{{--                #section_1039536166 {--}}
{{--                    padding-top: 30px;--}}
{{--                    padding-bottom: 30px;--}}
{{--                }--}}

{{--                #section_1039536166 .ux-shape-divider--top svg {--}}
{{--                    height: 150px;--}}
{{--                    --divider-top-width: 100%;--}}
{{--                }--}}

{{--                #section_1039536166 .ux-shape-divider--bottom svg {--}}
{{--                    height: 150px;--}}
{{--                    --divider-width: 100%;--}}
{{--                }--}}
{{--            </style>--}}
{{--        </section>--}}

{{--        <section class="section dark has-parallax" id="section_1348545758">--}}
{{--            <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background=""--}}
{{--                 data-parallax="-5">--}}


{{--                <div class="section-bg-overlay absolute fill"></div>--}}


{{--            </div>--}}

{{--            <div class="ux-shape-divider ux-shape-divider--top ux-shape-divider--style-triangle">--}}
{{--                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">--}}
{{--                    <path class="ux-shape-fill" d="M1025 103H-25L500 3L1025 103Z"></path>--}}
{{--                </svg>--}}
{{--            </div>--}}

{{--            <div class="ux-shape-divider ux-shape-divider--bottom ux-shape-divider--style-triangle-invert">--}}
{{--                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">--}}
{{--                    <path class="ux-shape-fill" d="M500 95.6L0 0V100H1000V0L500 95.6Z"></path>--}}
{{--                </svg>--}}
{{--            </div>--}}

{{--            <div class="section-content relative">--}}


{{--                <div class="container section-title-container ps-divider div-light"><h3--}}
{{--                        class="section-title section-title-center"><b></b><span class="section-title-main"--}}
{{--                                                                                style="font-size:140%;color:rgb(255, 255, 255);">DỰ ÁN ĐÃ THI CÔNG</span><b></b>--}}
{{--                    </h3></div>--}}

{{--                <div class="row" id="row-632886870">--}}


{{--                    <div id="col-1408100175" class="col pd-bottom-0 small-12 large-12">--}}
{{--                        <div class="col-inner">--}}


{{--                            <div id="portfolio-2091043976" class="portfolio-element-wrapper has-filtering">--}}

{{--                                <div--}}
{{--                                    class="row large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-simple slider-nav-outside slider-nav-light slider-nav-push"--}}
{{--                                    data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: true, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">--}}

{{--                                    <div class="col" data-terms="[&quot;Dự án đã thi công&quot;]"--}}
{{--                                         data-animate="bounceIn">--}}
{{--                                        <div class="col-inner">--}}
{{--                                            <a href="https://techviet.com.vn/du-an/du-an-da-thi-cong/du-an-1"--}}
{{--                                               class="plain ">--}}
{{--                                                <div class="portfolio-box box has-hover box-default">--}}
{{--                                                    <div class="box-image">--}}
{{--                                                        <div class="image-zoom image-glow image-cover"--}}
{{--                                                             style="padding-top:75%;">--}}
{{--                                                            <img width="400" height="225"--}}
{{--                                                                 src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                                 data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-12-400x225.jpg"--}}
{{--                                                                 class="lazy-load attachment-medium size-medium"--}}
{{--                                                                 alt="Img Techviet (12)" loading="lazy" srcset=""--}}
{{--                                                                 data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-12-400x225.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-12-800x450.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-12-768x432.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-12-600x338.jpg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-12.jpg 1440w"--}}
{{--                                                                 sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="box-text text-center is-large">--}}
{{--                                                        <div class="box-text-inner">--}}
{{--                                                            <h6 class="uppercase portfolio-box-title">Dự án 1</h6>--}}
{{--                                                            <p class="uppercase portfolio-box-category is-xsmall op-6">--}}
{{--                        <span class="show-on-hover">--}}
{{--                         Dự án đã thi công                        </span>--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col" data-terms="[&quot;Dự án đã thi công&quot;]"--}}
{{--                                         data-animate="bounceIn">--}}
{{--                                        <div class="col-inner">--}}
{{--                                            <a href="https://techviet.com.vn/du-an/du-an-da-thi-cong/du-an-2"--}}
{{--                                               class="plain ">--}}
{{--                                                <div class="portfolio-box box has-hover box-default">--}}
{{--                                                    <div class="box-image">--}}
{{--                                                        <div class="image-zoom image-glow image-cover"--}}
{{--                                                             style="padding-top:75%;">--}}
{{--                                                            <img width="400" height="244"--}}
{{--                                                                 src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20244%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                                 data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-2-400x244.jpg"--}}
{{--                                                                 class="lazy-load attachment-medium size-medium"--}}
{{--                                                                 alt="Img Techviet (2)" loading="lazy" srcset=""--}}
{{--                                                                 data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-2-400x244.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-2-800x488.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-2-768x469.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-2-600x366.jpg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-2.jpg 1024w"--}}
{{--                                                                 sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="box-text text-center is-large">--}}
{{--                                                        <div class="box-text-inner">--}}
{{--                                                            <h6 class="uppercase portfolio-box-title">Dự án 2</h6>--}}
{{--                                                            <p class="uppercase portfolio-box-category is-xsmall op-6">--}}
{{--                        <span class="show-on-hover">--}}
{{--                         Dự án đã thi công                        </span>--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col" data-terms="[&quot;Dự án đã thi công&quot;]"--}}
{{--                                         data-animate="bounceIn">--}}
{{--                                        <div class="col-inner">--}}
{{--                                            <a href="https://techviet.com.vn/du-an/du-an-da-thi-cong/du-an-3"--}}
{{--                                               class="plain ">--}}
{{--                                                <div class="portfolio-box box has-hover box-default">--}}
{{--                                                    <div class="box-image">--}}
{{--                                                        <div class="image-zoom image-glow image-cover"--}}
{{--                                                             style="padding-top:75%;">--}}
{{--                                                            <img width="400" height="267"--}}
{{--                                                                 src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20267%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                                 data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-11-400x267.jpg"--}}
{{--                                                                 class="lazy-load attachment-medium size-medium"--}}
{{--                                                                 alt="Img Techviet (11)" loading="lazy" srcset=""--}}
{{--                                                                 data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-11-400x267.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-11-800x533.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-11-768x512.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-11-1536x1024.jpg 1536w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-11-600x400.jpg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-11.jpg 1920w"--}}
{{--                                                                 sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="box-text text-center is-large">--}}
{{--                                                        <div class="box-text-inner">--}}
{{--                                                            <h6 class="uppercase portfolio-box-title">Dự án 3</h6>--}}
{{--                                                            <p class="uppercase portfolio-box-category is-xsmall op-6">--}}
{{--                        <span class="show-on-hover">--}}
{{--                         Dự án đã thi công                        </span>--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col" data-terms="[&quot;Dự án đã thi công&quot;]"--}}
{{--                                         data-animate="bounceIn">--}}
{{--                                        <div class="col-inner">--}}
{{--                                            <a href="https://techviet.com.vn/du-an/du-an-da-thi-cong/du-an-4"--}}
{{--                                               class="plain ">--}}
{{--                                                <div class="portfolio-box box has-hover box-default">--}}
{{--                                                    <div class="box-image">--}}
{{--                                                        <div class="image-zoom image-glow image-cover"--}}
{{--                                                             style="padding-top:75%;">--}}
{{--                                                            <img width="400" height="243"--}}
{{--                                                                 src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20243%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                                 data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-3-400x243.jpg"--}}
{{--                                                                 class="lazy-load attachment-medium size-medium"--}}
{{--                                                                 alt="Img Techviet (3)" loading="lazy" srcset=""--}}
{{--                                                                 data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-3-400x243.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-3-800x485.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-3-768x466.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-3-600x364.jpg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-3.jpg 1148w"--}}
{{--                                                                 sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="box-text text-center is-large">--}}
{{--                                                        <div class="box-text-inner">--}}
{{--                                                            <h6 class="uppercase portfolio-box-title">Dự án 4</h6>--}}
{{--                                                            <p class="uppercase portfolio-box-category is-xsmall op-6">--}}
{{--                        <span class="show-on-hover">--}}
{{--                         Dự án đã thi công                        </span>--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col" data-terms="[&quot;Dự án đã thi công&quot;]"--}}
{{--                                         data-animate="bounceIn">--}}
{{--                                        <div class="col-inner">--}}
{{--                                            <a href="https://techviet.com.vn/du-an/du-an-da-thi-cong/du-an-5"--}}
{{--                                               class="plain ">--}}
{{--                                                <div class="portfolio-box box has-hover box-default">--}}
{{--                                                    <div class="box-image">--}}
{{--                                                        <div class="image-zoom image-glow image-cover"--}}
{{--                                                             style="padding-top:75%;">--}}
{{--                                                            <img width="400" height="225"--}}
{{--                                                                 src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                                 data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-4-400x225.jpg"--}}
{{--                                                                 class="lazy-load attachment-medium size-medium"--}}
{{--                                                                 alt="Img Techviet (4)" loading="lazy" srcset=""--}}
{{--                                                                 data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-4-400x225.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-4-800x450.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-4-768x432.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-4-1536x864.jpg 1536w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-4-600x338.jpg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-4.jpg 1600w"--}}
{{--                                                                 sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="box-text text-center is-large">--}}
{{--                                                        <div class="box-text-inner">--}}
{{--                                                            <h6 class="uppercase portfolio-box-title">Dự án 5</h6>--}}
{{--                                                            <p class="uppercase portfolio-box-category is-xsmall op-6">--}}
{{--                        <span class="show-on-hover">--}}
{{--                         Dự án đã thi công                        </span>--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col" data-terms="[&quot;Dự án đã thi công&quot;]"--}}
{{--                                         data-animate="bounceIn">--}}
{{--                                        <div class="col-inner">--}}
{{--                                            <a href="https://techviet.com.vn/du-an/du-an-da-thi-cong/du-an-6"--}}
{{--                                               class="plain ">--}}
{{--                                                <div class="portfolio-box box has-hover box-default">--}}
{{--                                                    <div class="box-image">--}}
{{--                                                        <div class="image-zoom image-glow image-cover"--}}
{{--                                                             style="padding-top:75%;">--}}
{{--                                                            <img width="400" height="233"--}}
{{--                                                                 src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20233%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                                 data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-10-400x233.jpg"--}}
{{--                                                                 class="lazy-load attachment-medium size-medium"--}}
{{--                                                                 alt="Img Techviet (10)" loading="lazy" srcset=""--}}
{{--                                                                 data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-10-400x233.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-10-800x467.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-10-768x448.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-10-600x350.jpg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-10.jpg 1200w"--}}
{{--                                                                 sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="box-text text-center is-large">--}}
{{--                                                        <div class="box-text-inner">--}}
{{--                                                            <h6 class="uppercase portfolio-box-title">Dự án 6</h6>--}}
{{--                                                            <p class="uppercase portfolio-box-category is-xsmall op-6">--}}
{{--                        <span class="show-on-hover">--}}
{{--                         Dự án đã thi công                        </span>--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--            </div>--}}


{{--            <style>--}}
{{--                #section_1348545758 {--}}
{{--                    padding-top: 90px;--}}
{{--                    padding-bottom: 90px;--}}
{{--                }--}}

{{--                #section_1348545758 .section-bg-overlay {--}}
{{--                    background-color: rgba(0, 0, 0, 0.68);--}}
{{--                }--}}

{{--                #section_1348545758 .section-bg.bg-loaded {--}}
{{--                    background-image: url(images/TechViet-office2.jpg);--}}
{{--                }--}}

{{--                #section_1348545758 .ux-shape-divider--top svg {--}}
{{--                    height: 50px;--}}
{{--                    --divider-top-width: 100%;--}}
{{--                }--}}

{{--                #section_1348545758 .ux-shape-divider--bottom svg {--}}
{{--                    height: 50px;--}}
{{--                    --divider-width: 100%;--}}
{{--                }--}}

{{--                #section_1348545758 .ux-shape-divider--bottom .ux-shape-fill {--}}
{{--                    fill: rgb(245, 245, 245);--}}
{{--                }--}}
{{--            </style>--}}
{{--        </section>--}}

{{--        <section class="section" id="section_1094643577">--}}
{{--            <div class="bg section-bg fill bg-fill  bg-loaded">--}}


{{--            </div>--}}


{{--            <div class="ux-shape-divider ux-shape-divider--bottom ux-shape-divider--style-triangle-invert">--}}
{{--                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">--}}
{{--                    <path class="ux-shape-fill" d="M500 95.6L0 0V100H1000V0L500 95.6Z"></path>--}}
{{--                </svg>--}}
{{--            </div>--}}

{{--            <div class="section-content relative">--}}


{{--                <div class="container section-title-container ps-divider"><h3--}}
{{--                        class="section-title section-title-center"><b></b><span class="section-title-main"--}}
{{--                                                                                style="font-size:140%;">TIN TỨC MỚI</span><b></b>--}}
{{--                    </h3></div>--}}

{{--                <div class="row align-middle" id="row-972996655">--}}


{{--                    <div id="col-887683513" class="col pd-bottom-0 small-12 large-12" data-animate="bounceIn">--}}
{{--                        <div class="col-inner text-center">--}}


{{--                            <div--}}
{{--                                class="row large-columns-3 medium-columns-1 small-columns-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"--}}
{{--                                data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">--}}

{{--                                <div class="col post-item" data-animate="flipInX">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a href="https://techviet.com.vn/phong-hop-thong-minh-dieu-khien-bang-giong-noi-khong-cham.html"--}}
{{--                                           class="plain">--}}
{{--                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="image-zoom image-glow image-cover"--}}
{{--                                                         style="padding-top:56.25%;">--}}
{{--                                                        <img width="400" height="293"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20293%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-400x293.jpg"--}}
{{--                                                             class="lazy-load attachment-medium size-medium wp-post-image"--}}
{{--                                                             alt="Img Techviet (8)" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-400x293.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-800x586.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-768x563.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-1536x1125.jpg 1536w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-2048x1500.jpg 2048w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-8-600x439.jpg 600w"--}}
{{--                                                             sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center">--}}
{{--                                                    <div class="box-text-inner blog-post-inner">--}}


{{--                                                        <h5 class="post-title is-large ">Phòng họp thông minh điều--}}
{{--                                                            khiển bằng giọng nói, không chạm</h5>--}}
{{--                                                        <div class="is-divider"></div>--}}


{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col post-item" data-animate="flipInX">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a href="https://techviet.com.vn/lua-chon-dac-diem-va-tinh-nang-loa-bosch-phat-nhac-nen-hoi-nghi.html"--}}
{{--                                           class="plain">--}}
{{--                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="image-zoom image-glow image-cover"--}}
{{--                                                         style="padding-top:56.25%;">--}}
{{--                                                        <img width="400" height="228"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20228%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-6-400x228.jpg"--}}
{{--                                                             class="lazy-load attachment-medium size-medium wp-post-image"--}}
{{--                                                             alt="Img Techviet (6)" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-6-400x228.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-6-800x456.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-6-768x438.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-6-1536x876.jpg 1536w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-6-600x342.jpg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-6.jpg 1684w"--}}
{{--                                                             sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center">--}}
{{--                                                    <div class="box-text-inner blog-post-inner">--}}


{{--                                                        <h5 class="post-title is-large ">Lựa chọn đặc điểm và tính--}}
{{--                                                            năng Loa BOSCH phát nhạc nền, hội nghị</h5>--}}
{{--                                                        <div class="is-divider"></div>--}}


{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col post-item" data-animate="flipInX">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a href="https://techviet.com.vn/luu-y-khi-lap-dat-he-thong-am-thanh-hoi-truong.html"--}}
{{--                                           class="plain">--}}
{{--                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="image-zoom image-glow image-cover"--}}
{{--                                                         style="padding-top:56.25%;">--}}
{{--                                                        <img width="400" height="225"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-5-400x225.jpg"--}}
{{--                                                             class="lazy-load attachment-medium size-medium wp-post-image"--}}
{{--                                                             alt="Img Techviet (5)" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-5-400x225.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-5-800x450.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-5-768x432.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-5-600x338.jpg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-5.jpg 1200w"--}}
{{--                                                             sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center">--}}
{{--                                                    <div class="box-text-inner blog-post-inner">--}}


{{--                                                        <h5 class="post-title is-large ">Lưu ý khi lắp đặt hệ thống--}}
{{--                                                            âm thanh hội trường</h5>--}}
{{--                                                        <div class="is-divider"></div>--}}


{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col post-item" data-animate="flipInX">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a href="https://techviet.com.vn/top-3-giai-phap-hoc-truc-tuyen-hop-truc-tuyen-duoc-ung-dung-nhieu-nhat-hien-nay.html"--}}
{{--                                           class="plain">--}}
{{--                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="image-zoom image-glow image-cover"--}}
{{--                                                         style="padding-top:56.25%;">--}}
{{--                                                        <img width="400" height="266"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20266%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1-400x266.jpeg"--}}
{{--                                                             class="lazy-load attachment-medium size-medium wp-post-image"--}}
{{--                                                             alt="Img Techviet (1)" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1-400x266.jpeg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1-800x533.jpeg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1-768x511.jpeg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1-600x400.jpeg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-1.jpeg 1200w"--}}
{{--                                                             sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center">--}}
{{--                                                    <div class="box-text-inner blog-post-inner">--}}


{{--                                                        <h5 class="post-title is-large ">Top 3 giải pháp học trực--}}
{{--                                                            tuyến, họp trực tuyến được ứng dụng nhiều nhất hiện--}}
{{--                                                            nay</h5>--}}
{{--                                                        <div class="is-divider"></div>--}}


{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col post-item" data-animate="flipInX">--}}
{{--                                    <div class="col-inner">--}}
{{--                                        <a href="https://techviet.com.vn/ket-noi-mat-gan-tuong-hdbt-truyen-thong-voi-giai-phap-av-over-ip.html"--}}
{{--                                           class="plain">--}}
{{--                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">--}}
{{--                                                <div class="box-image">--}}
{{--                                                    <div class="image-zoom image-glow image-cover"--}}
{{--                                                         style="padding-top:56.25%;">--}}
{{--                                                        <img width="400" height="225"--}}
{{--                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                             data-src="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-9-400x225.jpg"--}}
{{--                                                             class="lazy-load attachment-medium size-medium wp-post-image"--}}
{{--                                                             alt="Img Techviet (9)" loading="lazy" srcset=""--}}
{{--                                                             data-srcset="https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-9-400x225.jpg 400w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-9-800x450.jpg 800w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-9-768x432.jpg 768w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-9-600x338.jpg 600w, https://techviet.com.vn/wp-content/uploads/2016/08/img-techviet-9.jpg 1280w"--}}
{{--                                                             sizes="(max-width: 400px) 100vw, 400px"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="box-text text-center">--}}
{{--                                                    <div class="box-text-inner blog-post-inner">--}}


{{--                                                        <h5 class="post-title is-large ">Kết nối mặt gắn tường hdbt--}}
{{--                                                            truyền thống với giải pháp AV-over-IP</h5>--}}
{{--                                                        <div class="is-divider"></div>--}}


{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--            </div>--}}


{{--            <style>--}}
{{--                #section_1094643577 {--}}
{{--                    padding-top: 30px;--}}
{{--                    padding-bottom: 30px;--}}
{{--                    background-color: rgb(245, 245, 245);--}}
{{--                }--}}

{{--                #section_1094643577 .ux-shape-divider--top svg {--}}
{{--                    height: 150px;--}}
{{--                    --divider-top-width: 100%;--}}
{{--                }--}}

{{--                #section_1094643577 .ux-shape-divider--bottom svg {--}}
{{--                    height: 50px;--}}
{{--                    --divider-width: 100%;--}}
{{--                }--}}
{{--            </style>--}}
{{--        </section>--}}

{{--        <section class="section" id="section_252455885">--}}
{{--            <div class="bg section-bg fill bg-fill  bg-loaded">--}}


{{--            </div>--}}


{{--            <div class="section-content relative">--}}


{{--                <div class="container section-title-container ps-divider"><h3--}}
{{--                        class="section-title section-title-center"><b></b><span class="section-title-main"--}}
{{--                                                                                style="font-size:140%;">ĐỐi TÁC CỦA CHÚNG TÔI</span><b></b>--}}
{{--                    </h3></div>--}}

{{--                <div class="row row-small align-middle" id="row-1800182579">--}}


{{--                    <div id="col-580497669" class="col small-12 large-12" data-animate="flipInY">--}}
{{--                        <div class="col-inner">--}}


{{--                            <div class="slider-wrapper relative" id="slider-872370357">--}}
{{--                                <div--}}
{{--                                    class="slider slider-nav-dots-simple slider-nav-simple slider-nav-large slider-nav-dark slider-nav-outside slider-style-normal"--}}
{{--                                    data-flickity-options="{--}}
{{--            &quot;cellAlign&quot;: &quot;center&quot;,--}}
{{--            &quot;imagesLoaded&quot;: true,--}}
{{--            &quot;lazyLoad&quot;: 1,--}}
{{--            &quot;freeScroll&quot;: true,--}}
{{--            &quot;wrapAround&quot;: true,--}}
{{--            &quot;autoPlay&quot;: 1000,--}}
{{--            &quot;pauseAutoPlayOnHover&quot; : true,--}}
{{--            &quot;prevNextButtons&quot;: true,--}}
{{--            &quot;contain&quot; : true,--}}
{{--            &quot;adaptiveHeight&quot; : true,--}}
{{--            &quot;dragThreshold&quot; : 10,--}}
{{--            &quot;percentPosition&quot;: true,--}}
{{--            &quot;pageDots&quot;: false,--}}
{{--            &quot;rightToLeft&quot;: false,--}}
{{--            &quot;draggable&quot;: true,--}}
{{--            &quot;selectedAttraction&quot;: 0.1,--}}
{{--            &quot;parallax&quot; : 0,--}}
{{--            &quot;friction&quot;: 0.6        }">--}}


{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 150px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Cisco.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 213px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Microsoft.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 190px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Schneider-Electric-Logo.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 148px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/LG.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 270px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Oracle.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 271px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Milestone.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 236px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/HPE.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 318px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Hikvision.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 164px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Fujitsu.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 270px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Dell.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 270px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Fortinet.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 150px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Cypresscom.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 228px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/02/Yamaha-logo.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 413.14285714286px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/02/sennheiser-logo.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 303.42857142857px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/02/Samsung-logo.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 326.57142857143px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/02/kramer-logo.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 252px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/02/Extron-logo.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 480px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/02/crestron-logo.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 269.14285714286px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/02/bosch-logo.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 207.42857142857px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/02/biamp-logo.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 244px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Angustos.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 193px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/AXIS-logo.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 225px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Barracuda.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 157px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/bitdefender-antivirus.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 208px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/CyberPower.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 190px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/flir.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 212px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Hanwha-Techwin.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 189px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/OrionDisplay.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 188px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Ruckus.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 185px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/TATTILE_Logo.jpg"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 177px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Trend-Micro-Antivirus.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"--}}
{{--                                         style="max-width: 100%!important; width: 236px!important">--}}
{{--                                        <div class="ux-logo-link block image-" title="" href=""--}}
{{--                                             style="padding: 15px;"><img--}}
{{--                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"--}}
{{--                                                data-src="https://techviet.com.vn/wp-content/uploads/2022/03/Vmware.png"--}}
{{--                                                title="" alt="" class="lazy-load ux-logo-image block"--}}
{{--                                                style="height:60px;"></div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}

{{--                                <div class="loading-spin dark large centered"></div>--}}

{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--            </div>--}}


{{--            <style>--}}
{{--                #section_252455885 {--}}
{{--                    padding-top: 30px;--}}
{{--                    padding-bottom: 30px;--}}
{{--                }--}}

{{--                #section_252455885 .ux-shape-divider--top svg {--}}
{{--                    height: 150px;--}}
{{--                    --divider-top-width: 100%;--}}
{{--                }--}}

{{--                #section_252455885 .ux-shape-divider--bottom svg {--}}
{{--                    height: 150px;--}}
{{--                    --divider-width: 100%;--}}
{{--                }--}}
{{--            </style>--}}
{{--        </section>--}}


    </div>
@stop

@section('vendor_scripts')
    <script type="text/javascript" src="{{asset("assets/js/flatsome-slider.js")}}" id="flatsome-js-js"></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-popup.js")}}" id="flatsome-js-js"></script>
@endsection
