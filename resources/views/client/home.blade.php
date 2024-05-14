@extends('layouts.client', ['useBackGroup' => true])


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
        @if($aboutUs)
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
                                                                 alt="{{ $aboutUs->renderTitle()}}" loading="lazy" srcset=""
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
                                                <span>{{trans('label.read_more')}}</span>
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
        @endif
        <section class="section" id="section_1793062646">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="ux-shape-divider ux-shape-divider--top ux-shape-divider--style-triangle">
                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path class="ux-shape-fill" d="M1025 103H-25L500 3L1025 103Z"></path>
                </svg>
            </div>
            <div class="section-content relative">
                <div id="gap-229861892" class="gap-element clearfix" style="display:block; height:auto;">
                    <style>
                        #gap-229861892 {
                            padding-top: 60px;
                        }
                    </style>
                </div>
                <div class="row" id="row-1937343494">
                    <div id="col-652273388" class="col pd-bottom-0 small-12 large-12" data-animate="bounceIn">
                        <div class="col-inner text-center">
                            <div class="container section-title-container ps-divider">
                                <h3 class="section-title section-title-center">
                                    <b></b>
                                    <span
                                        class="section-title-main"
                                        style="font-size:140%; text-transform: uppercase">{{trans('label.feature_products')}}
                                    </span>
                                    <b></b>
                                </h3>
                            </div>
                            <div
                                class="row large-columns-3 medium-columns- small-columns-2 row-normal slider row-slider slider-nav-simple slider-nav-push"
                                data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">

                                @foreach($products as $product)
                                    <div class="product-category col" data-animate="flipInX">
                                        <div class="col-inner">
                                            <a href="{{$product->productDetailLink()}}">
                                                <div class="box box-category has-hover box-default ">
                                                    <div class="box-image">
                                                        <div class="image-zoom image-cover" style="padding-top:75%;">
                                                            <img class="lazy-load"
                                                                 src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                                                 data-src="{{$product->showImage()}}"
                                                                 alt="{{$product->renderTitle()}}" width="300" height="300">
                                                        </div>
                                                    </div>
                                                    <div class="box-text text-center">
                                                        <div class="box-text-inner">
                                                            <h5 class="uppercase header-title">
                                                                {{$product->renderTitle()}}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a href="{{route('product')}}" target="_self"
                               class="button primary is-underline pd-bottom-0" style="border-radius:99px;">
                                <span>{{trans('label.view_all')}}</span>
                                <i class="icon-angle-right"></i>
                            </a>
                        </div>
                    </div>


                </div>

            </div>


            <style>
                #section_1793062646 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }

                #section_1793062646 .ux-shape-divider--top svg {
                    height: 50px;
                    --divider-top-width: 100%;
                }

                #section_1793062646 .ux-shape-divider--top .ux-shape-fill {
                    fill: rgb(245, 245, 245);
                }

                #section_1793062646 .ux-shape-divider--bottom svg {
                    height: 150px;
                    --divider-width: 100%;
                }
            </style>
        </section>
        <section class="section dark has-parallax" id="section_1360553020">
            <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background="" data-parallax="-5">
                <div class="section-bg-overlay absolute fill"></div>
            </div>
            <div class="ux-shape-divider ux-shape-divider--top ux-shape-divider--style-triangle">
                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path class="ux-shape-fill" d="M1025 103H-25L500 3L1025 103Z"></path>
                </svg>
            </div>
            <div class="ux-shape-divider ux-shape-divider--bottom ux-shape-divider--style-triangle-invert">
                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path class="ux-shape-fill" d="M500 95.6L0 0V100H1000V0L500 95.6Z"></path>
                </svg>
            </div>
            <div class="section-content relative">
                <div class="container section-title-container ps-divider div-light" style="margin-bottom:20px;">
                    <h3 class="section-title section-title-center"><b></b>
                        <span class="section-title-main"style="font-size:140%;color:rgb(255, 255, 255); text-transform: uppercase">{{trans('label.our_service')}}</span>
                        <b></b>
                    </h3>
                </div>
                <div class="row">
                    @foreach($services as $service)
                        <div id="home-service" class="col pd-bottom-0 medium-3 small-6 large-3" data-animate="flipInY">
                            <div class="col-inner">
                                <a class="plain" href="{{$service->serviceDetailLink()}}">
                                    <div class="icon-box featured-box icon-box-center text-center">
                                        <div class="icon-box-img has-icon-bg" style="width: 100px">
                                            <div class="icon">
                                                <div class="icon-inner" style="border-width:2px;">
                                                    <img src="{{$service->showImage()}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                            <div id="text-2770854012" class="text">
                                                <h3>{{$service->renderTitle()}}</h3>
                                                <p>
                                                    {{$service->renderDescription()}}
                                                </p>
                                                <style>
                                                    #text-2770854012 {
                                                        text-align: center;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <style>
                #section_1360553020 {
                    padding-top: 100px;
                    padding-bottom: 100px;
                }

                #section_1360553020 .section-bg-overlay {
                    background-color: rgba(0, 0, 0, 0.686);
                }

                #section_1360553020 .section-bg.bg-loaded {
                    background-image: url(/assets/images/back_iotsmart.png);
                }

                #section_1360553020 .ux-shape-divider--top svg {
                    height: 50px;
                    --divider-top-width: 100%;
                }

                #section_1360553020 .ux-shape-divider--bottom svg {
                    height: 50px;
                    --divider-width: 100%;
                }
            </style>
        </section>
        <section class="section" id="section_1039536166">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div id="gap-933752254" class="gap-element clearfix" style="display:block; height:auto;">
                    <style>
                        #gap-933752254 {
                            padding-top: 30px;
                        }
                    </style>
                </div>
                <div class="container section-title-container ps-divider">
                    <h3 class="section-title section-title-center">
                        <b></b>
                        <span class="section-title-main" style="font-size:140%;">{{trans('label.our_solution')}}</span>
                        <b></b>
                    </h3>
                </div>

                <div class="row" id="row-1707653227">
                    <div id="col-197918817" class="col pd-bottom-0 small-12 large-12">
                        <div class="col-inner">
                            <div
                                class="row large-columns-4 medium-columns-3 small-columns-2 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                                data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">
                                @foreach($solutions as $solution)
                                    <div class="page-col col" data-animate="fadeInUp">
                                        <div class="col-inner">
                                            <a class="plain"
                                               href="{{$solution->solutionDetailLink()}}"
                                               title="Giải pháp trung tâm hạ tầng, trung tâm dữ liệu" target="">
                                                <div class="page-box box has-hover">
                                                    <div class="box-image">
                                                        <div class="box-image image-zoom image-cover"
                                                             style="padding-top:75%;">
                                                            <img width="800" height="451"
                                                                 src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20451%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                                                 data-src="{{$solution->showImage()}}"
                                                                 class="lazy-load attachment-large size-large"
                                                                 alt="{{$solution->renderTitle()}}"
                                                                 loading="lazy" srcset=""
                                                                 data-srcset="{{$solution->showImage()}}"
                                                                 sizes="(max-width: 800px) 100vw, 800px">
                                                        </div>
                                                    </div>
                                                    <div class="box-text text-center is-large">
                                                        <div class="box-text-inner">
                                                            <p>{{$solution->renderTitle()}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_1039536166 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }

                #section_1039536166 .ux-shape-divider--top svg {
                    height: 150px;
                    --divider-top-width: 100%;
                }

                #section_1039536166 .ux-shape-divider--bottom svg {
                    height: 150px;
                    --divider-width: 100%;
                }
            </style>
        </section>
        <section class="section dark has-parallax" id="section_1348545758">
            <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background="" data-parallax="-5">
                <div class="section-bg-overlay absolute fill"></div>
            </div>
            <div class="ux-shape-divider ux-shape-divider--top ux-shape-divider--style-triangle">
                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path class="ux-shape-fill" d="M1025 103H-25L500 3L1025 103Z"></path>
                </svg>
            </div>
            <div class="ux-shape-divider ux-shape-divider--bottom ux-shape-divider--style-triangle-invert">
                <svg viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path class="ux-shape-fill" d="M500 95.6L0 0V100H1000V0L500 95.6Z"></path>
                </svg>
            </div>

            <div class="section-content relative">

                <div class="container section-title-container ps-divider div-light">
                    <h3 class="section-title section-title-center">
                        <b></b>
                        <span class="section-title-main" style="font-size:140%;color:rgb(255, 255, 255);">{{trans('label.our_project')}}</span>
                        <b></b>
                    </h3></div>

                <div class="row">
                    <div class="col pd-bottom-0 small-12 large-12">
                        <div class="col-inner">
                            <div class="portfolio-element-wrapper has-filtering">
                                <div
                                    class="row large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-simple slider-nav-outside slider-nav-light slider-nav-push"
                                    data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: true, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">

                                    @foreach($projects as $project)
                                        <div class="col" data-animate="bounceIn">
                                            <div class="col-inner">
                                                <a href="{{$project->projectDetailLink()}}"
                                                   class="plain ">
                                                    <div class="portfolio-box box has-hover box-default">
                                                        <div class="box-image">
                                                            <div class="image-zoom image-glow image-cover"
                                                                 style="padding-top:75%;">
                                                                <img width="400" height="225"
                                                                     src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20400%20225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                                                     data-src="{{$project->showImage()}}"
                                                                     class="lazy-load attachment-medium size-medium"
                                                                     alt="{{$project->renderTitle()}}" loading="lazy" srcset=""
                                                                     data-srcset="{{$project->showImage()}}"
                                                                     sizes="(max-width: 400px) 100vw, 400px"></div>
                                                        </div>
                                                        <div class="box-text text-center is-large">
                                                            <div class="box-text-inner">
                                                                <h6 class="uppercase portfolio-box-title">{{$project->renderTitle()}}</h6>
                                                                <p class="uppercase portfolio-box-category is-xsmall op-6">
                                                                    <span class="show-on-hover">
                                                                      {{$project->renderDescription()}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>
                            </div>


                        </div>
                    </div>


                </div>

            </div>


            <style>
                #section_1348545758 {
                    padding-top: 90px;
                    padding-bottom: 90px;
                }

                #section_1348545758 .section-bg-overlay {
                    background-color: rgba(0, 0, 0, 0.68);
                }

                #section_1348545758 .section-bg.bg-loaded {
                    background-image: url(/assets/images/back_iotsmart.png);
                }

                #section_1348545758 .ux-shape-divider--top svg {
                    height: 50px;
                    --divider-top-width: 100%;
                }

                #section_1348545758 .ux-shape-divider--bottom svg {
                    height: 50px;
                    --divider-width: 100%;
                }

                #section_1348545758 .ux-shape-divider--bottom .ux-shape-fill {
                    fill: rgb(245, 245, 245);
                }
            </style>
        </section>
        <section class="section" id="section_252455885">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="container section-title-container ps-divider">
                    <h3 class="section-title section-title-center"><b></b>
                        <span class="section-title-main" style="font-size:140%;"> {{trans('label.our_partner')}} </span>
                        <b>

                        </b>
                    </h3>
                </div>

                <div class="row row-small align-middle" id="row-1800182579">
                    <div id="col-580497669" class="col small-12 large-12" data-animate="flipInY">
                        <div class="col-inner">


                            <div class="slider-wrapper relative" id="slider-872370357">
                                <div
                                    class="slider slider-nav-dots-simple slider-nav-simple slider-nav-large slider-nav-dark slider-nav-outside slider-style-normal"
                                    data-flickity-options="{
                                    &quot;cellAlign&quot;: &quot;center&quot;,
                                    &quot;imagesLoaded&quot;: true,
                                    &quot;lazyLoad&quot;: 1,
                                    &quot;freeScroll&quot;: true,
                                    &quot;wrapAround&quot;: true,
                                    &quot;autoPlay&quot;: 1000,
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

                                    @foreach($logoPartners as $logoPartner)
                                    <div class="ux-logo has-hover align-middle ux_logo inline-block"
                                         style="max-width: 100%!important; width: 150px!important">
                                        <div class="ux-logo-link block image-" title="" href=""
                                             style="padding: 15px;"><img
                                                src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                                data-src="{{asset('images/partners/' . $logoPartner->getFilename())}}"
                                                title="" alt="" class="lazy-load ux-logo-image block"
                                                style="height:60px;">
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                                <div class="loading-spin dark large centered"></div>

                            </div>


                        </div>
                    </div>


                </div>

            </div>


            <style>
                #section_252455885 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }

                #section_252455885 .ux-shape-divider--top svg {
                    height: 150px;
                    --divider-top-width: 100%;
                }

                #section_252455885 .ux-shape-divider--bottom svg {
                    height: 150px;
                    --divider-width: 100%;
                }
            </style>
        </section>
    </div>
@stop

@section('vendor_scripts')
    <script type="text/javascript" src="{{asset("assets/js/flatsome-slider.js")}}" id="flatsome-js-js"></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-popup.js")}}" id="flatsome-js-js"></script>
@endsection
