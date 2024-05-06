@extends('layouts.client')
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

@section('header')
    @include('components.header_home')
@endsection
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
                                {{trans('label.contact')}}
                            </h1>
                        </div>
                        <div class="title-content flex-col flex-right text-right medium-text-center">
                            <div class="title-breadcrumbs pb-half pt-half">
                                <nav class="woocommerce-breadcrumb breadcrumbs uppercase">
                                    <a href="{{route('home')}}/">{{trans('label.home')}}</a>
                                    <span class="divider">/</span>
                                    {{trans('label.contact')}}
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <div class="row align-center">
                    <div class="col medium-6 small-12 large-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.1025652902299!2d106.62270655624444!3d20.805804998368636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7731fa6a0b31%3A0xd75072e3ac4e6c63!2zMTEgTmd1eeG7hW4gQ8O0bmcgTeG7uSwgVHLhuqduIFRow6BuaCBOZ-G7jSwgS2nhur9uIEFuLCBI4bqjaSBQaMOybmcsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1714847344543!5m2!1sen!2s" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <h2>{{business()->getInfo('name')}}</h2>
                            <ul>
                                <li><strong>{{trans("label.address")}}:</strong> {{business()->getInfo('address')}} </li>
                                <li><strong>{{trans("label.tel")}}: </strong><a href="tel:{{business()->getInfo('tel')}}" rel="nofollow" target="_blank">{{business()->getInfo('tel')}}</a><strong><br></strong></li>
                                <li><strong>{{trans("label.email")}}:</strong> <a href="mailto:{{business()->getInfo('email')}}">{{business()->getInfo('email')}}</a></li>
                            </ul>
                            <div class="social-icons follow-icons">
                                <a href="#" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon primary button circle facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook"></i></a>
                                <a href="#" target="_blank" rel="noopener noreferrer nofollow" data-label="TikTok" class="icon primary button circle tiktok tooltip" title="Follow on TikTok" aria-label="Follow on TikTok"><i class="icon-tiktok"></i></a>
                                <a href="#" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon primary button circle youtube tooltip tooltipstered" aria-label="Follow on YouTube"><i class="icon-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
