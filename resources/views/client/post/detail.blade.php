@extends('layouts.client')

@section('content')
    <div class="page-wrapper page-right-sidebar">
        <div class="row">
            <div id="content" class="large-9 left col col-divided" role="main">
                <h1> {{$post->renderTitle()}} </h1>
                <div class="page-inner">
                    {!! $post->renderContents() !!}
                </div>
            </div>

            <div class="large-3 col">
                <x-aside></x-aside>
            </div>
        </div>
    </div>
@stop

@section('vendor_scripts')
    <script type="text/javascript" src="{{asset("assets/js/flatsome-tooltips.js")}}" ></script>
    <script type="text/javascript" src="{{asset("assets/js/flatsome-popup.js")}}" ></script>
@endsection
