@extends('layouts.admin')

@section("content")
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh sách slider</h1>
    </div>
    @include('components.message')
    <div class="mb-3">
        {!! Form::open(['method' => 'get']) !!}
        <div class="row align-items-end">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('search') !!}
                    {!! Form::text('search', request('search'), ['class' => 'form-control', 'placeholder' => 'Nhập title...']) !!}
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <button class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="card shadow">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Sliders</h6>
                <a href="{{route('admin.slider.create')}}" class="btn btn-primary">
                    <i class="far fa-plus"></i>  Thêm slider
                </a>
            </div>
        </div>
        <div class="card-body">
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
                                <a href="{{route('admin.slider.edit', ['slider' => $slider->id])}}" class="btn btn-link">
                                    <i class="icon icon-edit fal fa-edit"></i>
                                </a>
                                <i class="icon icon-delete far fa-trash-alt" data-url="{{route('admin.slider.destroy', ['slider' => $slider->id])}}"></i>
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
