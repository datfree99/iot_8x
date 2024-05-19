@extends('layouts.client')
@section('breadcrumbs')
    <div class="shop-page-title category-page-title page-title featured-title dark ">
        <div class="page-title-bg fill">
            <div class="title-bg fill bg-fill parallax-active" data-parallax-fade="true" data-parallax="-2" data-parallax-background="" data-parallax-container=".page-title" style="height: 110.444px; transform: translate3d(0px, -12.67px, 0px); backface-visibility: hidden;"></div>
            <div class="title-overlay fill"></div>
        </div>
        <div class="page-title-inner flex-row  medium-flex-wrap container">
            <div class="flex-col flex-grow medium-text-center">
                <div class="is-medium">
                    <nav class="woocommerce-breadcrumb breadcrumbs uppercase">
                        <a href="{{route('home')}}">{{trans('label.home')}}</a>
                        <span class="divider">/</span> <a href="{{route('product')}}">{{trans('label.products')}}</a>
                        <span class="divider">/</span> {{$product->category->renderNameHtml()}}
                    </nav>
                </div>
            </div>
            <div class="flex-col medium-text-center  form-flat">
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="page-wrapper page-right-sidebar has-lightbox">
        <div class="row">

            <div id="content" class="large-9 left col col-divided" role="main">
                <div class="product-main">
                    <div class="row">
                        <div class="large-6 col">
                            <div
                                    class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                    data-columns="4" style="opacity: 1;">
                                <div class="badge-container is-larger absolute left top z-1"></div>

                                <div class="image-tools absolute top show-on-hover right z-3"></div>

                                <figure
                                        class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half has-image-zoom slider-lazy-load-active flickity-enabled"
                                        data-flickity-options="{
                                    &quot;cellAlign&quot;: &quot;center&quot;,
                                    &quot;wrapAround&quot;: true,
                                    &quot;autoPlay&quot;: false,
                                    &quot;prevNextButtons&quot;:true,
                                    &quot;adaptiveHeight&quot;: true,
                                    &quot;imagesLoaded&quot;: true,
                                    &quot;lazyLoad&quot;: 1,
                                    &quot;dragThreshold&quot; : 15,
                                    &quot;pageDots&quot;: false,
                                    &quot;rightToLeft&quot;: false
                                    }" tabindex="0">
                                    <div class="flickity-viewport" style="height: 303.375px; touch-action: pan-y;">
                                        <div class="flickity-slider" style="left: 0px; transform: translateX(0%);">
                                            <div
                                                    data-thumb="{{$product->showImage()}}"
                                                    data-thumb-alt="{{$product->renderTitle()}}"
                                                    class="woocommerce-product-gallery__image slide first is-ready is-selected"
                                                    style="position: absolute; left: 0%;">
                                                <a href="{{$product->showImage()}}">
                                                    <img width="600" height="450" src="{{$product->showImage()}}"
                                                         class="wp-post-image skip-lazy lazy-load-active"
                                                         alt="{{$product->renderTitle()}}"
                                                         loading="lazy" title="{{$product->renderTitle()}}"
                                                         data-caption="{{$product->renderTitle()}}"
                                                         data-src="{{$product->showImage()}}"
                                                         sizes="(max-width: 600px) 100vw, 600px"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="flickity-button flickity-prev-next-button previous" type="button"
                                            disabled="" aria-label="Previous">
                                        <svg class="flickity-button-icon" viewBox="0 0 100 100">
                                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
                                                  class="arrow"></path>
                                        </svg>
                                    </button>
                                    <button class="flickity-button flickity-prev-next-button next" type="button"
                                            disabled=""
                                            aria-label="Next">
                                        <svg class="flickity-button-icon" viewBox="0 0 100 100">
                                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"
                                                  transform="translate(100, 100) rotate(180) "></path>
                                        </svg>
                                    </button>
                                </figure>
                            </div>
                        </div>
                        <div class="product-info summary entry-summary col col-fit product-summary">
                            <h1 class="product-title product_title entry-title">
                                {{$product->renderTitle()}}
                            </h1>

                            <div class="is-divider small"></div>
                            <style>
                                .woocommerce-variation-availability {
                                    display: none !important
                                }
                            </style>
                            <div class="product_meta" style="font-size: 14px">
                                <span>
                                    {{$product->renderDescription()}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-footer">
                    <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                        {!! $product->renderContents() !!}
                    </div>

                    <div class="related related-products-wrapper product-section">
                        <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                            Sản phẩm tương tự
                        </h3>
                        <div class="row has-equal-box-heights equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"
                             data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">
                            @foreach($similarProducts as $similarProduct)
                                <div class="product-small col has-hover product type-product status-publish instock has-post-thumbnail shipping-taxable product-type-simple">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-zoom_in">
                                                    <a href="{{$similarProduct->productDetailLink()}}"
                                                       aria-label="{{$similarProduct->renderTitle()}}">
                                                        <img width="300" height="300"
                                                             src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                                             data-src="{{$similarProduct->showImage()}}"
                                                             class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                             alt="{{$similarProduct->renderTitle()}}" loading="lazy"
                                                             srcset=""
                                                             data-srcset="{{$similarProduct->showImage()}}"
                                                             sizes="(max-width: 300px) 100vw, 300px"> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text box-text-products text-center grid-style-2"
                                                 style="height: 92.125px;">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title" style="height: 59.0312px;">
                                                        <a href="{{$similarProduct->productDetailLink()}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                            {{$similarProduct->renderTitle()}}
                                                        </a>
                                                    </p></div>
                                                <div class="price-wrapper" style="height: 0px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            <div class="large-3 col">
                <x-aside></x-aside>
            </div>

        </div>
    </div>
@stop

@section('vendor_scripts')
    <script type="text/javascript" src="{{asset("assets/js/flatsome-popup.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-slider.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-woocommerce.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-tooltips.js")}}"></script>
@endsection
