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
                                {{trans('label.projects')}}
                            </h1>
                        </div>
                        <div class="title-content flex-col flex-right text-right medium-text-center">
                            <div class="title-breadcrumbs pb-half pt-half">
                                <nav class="woocommerce-breadcrumb breadcrumbs uppercase">
                                    <a href="{{route('home')}}/">{{trans('label.home')}}</a>
                                    <span class="divider">/</span>
                                    {{trans('label.projects')}}
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row large-columns-3 medium-columns- small-columns-2 row-normal">
                @foreach($projects as $project)
                    <div class="col" data-terms="[&quot;{{$project->renderDescription()}}&quot;]" data-animate="flipInX"
                         data-animated="true">
                        <div class="col-inner">
                            <a href="{{$project->projectDetailLink()}}" class="plain ">
                                <div class="portfolio-box box has-hover">
                                    <div class="box-image">
                                        <div class="image-zoom image-glow image-cover" style="padding-top:75%;">
                                            <img width="800" height="450"
                                                 src="{{$project->showImage()}}"
                                                 data-src="{{$project->showImage()}}"
                                                 class="attachment-large size-large lazy-load-active"
                                                 alt="{{$project->renderTitle()}}" loading="lazy"
                                                 sizes="(max-width: 800px) 100vw, 800px"></div>
                                    </div>
                                    <div class="box-text text-center">
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
            <div>
                {{$projects->links('components.pagination')}}
            </div>
        </div>
    </main>
@stop
@section('vendor_scripts')
    <script type="text/javascript" src="{{asset("assets/js/flatsome-tooltips.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-sidebar.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-popup.js")}}"></script>
@endsection
