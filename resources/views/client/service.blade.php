@extends('layouts.client', ['useBackGroup' => true])
@section('style')
    <style>
        #page-header .page-title-inner {
            min-height: 234px;
        }

        #page-header {
            margin-bottom: 50px;
        }

        #page-header .title-bg {
            background-image: url(/assets/images/back_iotsmart.png);
            background-position: center center;
        }

    </style>
@stop

@section('content')
    <main id="main" class="">
        <div id="content" role="main">
            <div id="page-header" class="page-header-wrapper">
                <div class="page-title dark featured-title has-parallax">

                    <div class="page-title-bg">
                        <div class="title-bg fill bg-fill" data-parallax-container=".page-title"
                             data-parallax-background="" data-parallax="-5">
                        </div>
                        <div class="title-overlay fill"></div>
                    </div>

                    <div class="page-title-inner container align-center flex-row medium-flex-wrap">
                        <div class="title-wrapper flex-col text-left medium-text-center">
                            <h1 class="entry-title mb-0">
                                {{trans('label.service')}}
                            </h1>
                        </div>
                        <div class="title-content flex-col flex-right text-right medium-text-center">
                            <div class="title-breadcrumbs pb-half pt-half">
                                <nav class="woocommerce-breadcrumb breadcrumbs uppercase">
                                    <a href="{{route('home')}}/">{{trans('label.home')}}</a>
                                    <span class="divider">/</span>
                                    {{trans('label.service')}}
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row" id="home-service">
                @foreach($services as $service)
                    <div style="margin-bottom: 30px" class="col pd-bottom-0 medium-3 small-6 large-3" data-animate="flipInY" data-animated="true">
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
                                        <div class="text" style="text-align: center">
                                            <h3 style="text-transform: uppercase">{{$service->renderTitle()}}</h3>
                                            <p>{{$service->renderDescription()}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@stop
@section('vendor_scripts')
    <script type="text/javascript" src="{{asset("assets/js/flatsome-tooltips.js")}}" ></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-sidebar.js")}}" ></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-popup.js")}}" ></script>
@endsection
