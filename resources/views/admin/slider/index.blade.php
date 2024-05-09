@extends('layouts.admin')

@section("content")

    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>{{trans("label.sliders")}}</h4>
                </div>
                <div>
                    {{ Breadcrumbs::exists(request()->route()->getName()) ? Breadcrumbs::render(request()->route()->getName()) : Breadcrumbs::render('admin.dashboard') }}
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <a href="{{route('admin.slider.create')}}" class="btn btn-primary">
                    <i class="far fa-plus"></i>  {{trans("label.create_slider")}}
                </a>
            </div>
        </div>
    </div>

    @include('components.message')

    <div class="card shadow">

        <div class="card-body">
            <div class="mb-3">
                {!! Form::open(['method' => 'get']) !!}
                <div class="row align-items-end justify-content-end">
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::text('search', request('search'), ['class' => 'form-control form-control-sm', 'placeholder' => 'Enter title...']) !!}
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Search</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="table-responsive">
                <table class="table dataTable" id="dataTable">
                    <thead>
                    <tr>
                        <th>Tiêu đề Vi</th>
                        <th>Tiêu đề En</th>
                        <th>Redirect</th>
                        <th>Hình ảnh</th>
                        <th style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $slider)
                        <tr>
                            <td>{{$slider->title_vi}}</td>
                            <td>{{$slider->title_en}}</td>
                            <td>{{$slider->redirect}}</td>
                            <td>
                                <img src="{{$slider->image}}" alt="{{$slider->title}}" width="210" height="100">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{route('admin.slider.edit', ['slider' => $slider->id])}}" class="btn btn-link px-2 mt-1">
                                        <i class="icon icon-edit fal fa-edit"></i>
                                    </a>
                                    <i class="icon icon-delete far fa-trash-alt" data-url="{{route('admin.slider.destroy', ['slider' => $slider->id])}}"></i>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{$sliders->links()}}
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(".icon-delete").click(function () {
            let url = $(this).data('url')
            if (confirm('Bạn có chắc chắn muốn xóa slider')) {
                $.ajax({
                    method: "DELETE",
                    url: url
                }).done(function (res) {
                    window.location.reload()
                })
            }
        })
    </script>
@stop
