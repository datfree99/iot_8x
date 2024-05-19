@extends('layouts.client', ['useBackGroup' => true])


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
                                {{trans('label.solution')}}
                            </h1>
                        </div>
                        <div class="title-content flex-col flex-right text-right medium-text-center">
                            <div class="title-breadcrumbs pb-half pt-half">
                                <nav class="woocommerce-breadcrumb breadcrumbs uppercase">
                                    <a href="{{route('home')}}/">{{trans('label.home')}}</a>
                                    <span class="divider">/</span>
                                    {{trans('label.solution')}}
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row large-columns-4 medium-columns-2 small-columns-1">
                @foreach($solutions as $solution)
                    <div class="page-col col">
                        <div class="col-inner">
                            <a class="plain" href="{{$solution->solutionDetailLink()}}"
                               title="{{$solution->renderTitle()}}" target="">
                                <div class="page-box box has-hover box-default">
                                    <div class="box-image">
                                        <div class="box-image image-zoom image-glow image-cover"
                                             style="padding-top:75%;">
                                            <img width="800" height="451" src="{{$solution->showImage()}}"
                                                 data-src="{{$solution->showImage()}}"
                                                 class="attachment-large size-large lazy-load-active"
                                                 alt="{{$solution->renderTitle()}}"
                                                 loading="lazy"
                                                 srcset="{{$solution->showImage()}}"
                                                 sizes="(max-width: 800px) 100vw, 800px">
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
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
            <div>
                {{$solutions->links('components.pagination')}}
            </div>
        </div>
    </main>
@stop
@section('vendor_scripts')
    <script type="text/javascript" src="{{asset("assets/js/flatsome-tooltips.js")}}" ></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-sidebar.js")}}" ></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-popup.js")}}" ></script>
@endsection
