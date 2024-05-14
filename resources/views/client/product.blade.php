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
                        @if(request()->routeIs('product.category') && $category)
                            <span class="divider">/</span> {{$category->renderNameHtml()}}
                        @endif
                    </nav>
                </div>
            </div>
            <div class="flex-col medium-text-center  form-flat">
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row category-page-row">

        <div class="col large-3 hide-for-medium ">
            <x-aside></x-aside>
        </div>

        <div class="col large-9">
            <div class="shop-container">
                <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 has-equal-box-heights equalize-box">
                    @foreach($products as $product)
                        <div class="product-small col has-hover product type-product status-publish first instock has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-zoom_in">
                                            <a href="{{$product->productDetailLink()}}" aria-label="">
                                                <img width="300" height="300" src="{{$product->showImage()}}"
                                                     data-src="{{$product->showImage()}}"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazy-load-active"
                                                     alt="{{$product->renderTitle()}}" loading="lazy"
                                                     srcset="{{$product->showImage()}}" data-srcset="{{$product->showImage()}}"
                                                     sizes="(max-width: 300px) 100vw, 300px">
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover">
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>

                                    <div class="box-text box-text-products text-center grid-style-2" style="height: 92.125px;">
                                        <div class="title-wrapper">
                                            <p class="name product-title woocommerce-loop-product__title" style="height: 59.0312px;">
                                                <a href="{{$product->productDetailLink()}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{$product->renderTitle()}}</a>
                                            </p>
                                        </div>
{{--                                        <div class="price-wrapper" style="height: 0px;">--}}
{{--                                            --}}
{{--                                        </div>		--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@stop

@section('vendor_scripts')
    <script type="text/javascript" src="{{asset("assets/js/flatsome-tooltips.js")}}" ></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-sidebar.js")}}" ></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-popup.js")}}" ></script>
@endsection
