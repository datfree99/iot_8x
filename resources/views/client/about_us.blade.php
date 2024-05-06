@extends('layouts.client')
@section('header')
    @include('components.header_page')
@endsection
@section('content')
    <main id="main" class="">

        <div class="page-wrapper page-right-sidebar">
            <div class="row">
                <div id="content" class="large-9 left col col-divided" role="main">
                    <h1> {{$post->renderTitle()}} </h1>
                    <div class="page-inner">
                        {!! $post->renderContents() !!}
                    </div>
                </div>

                <div class="large-3 col">
                    <x-post-category></x-post-category>
                </div>

            </div>
        </div>

    </main>
@stop
