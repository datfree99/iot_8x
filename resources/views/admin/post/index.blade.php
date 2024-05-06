@extends('layouts.admin')

@section("content")
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh sách bài viết</h1>
    </div>
    @include('components.message')
    <div class="mb-3">
        {!! Form::open(['method' => 'get']) !!}
        <div class="row align-items-end">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('search') !!}
                    {!! Form::text('search', request('search'), ['class' => 'form-control', 'placeholder' => 'Nhập tiêu đề bài viết...']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('category', 'Danh mục') !!}
                    <select name="category" class="form-control">
                        <option value=""> Chọn danh mục </option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($category->id == request('category')) selected @endif>{{$category->name_en}}</option>
                            @if(isset($category->children))
                                @foreach($category->children as $subCateLv1)
                                    <option value="{{$subCateLv1->id}}" @if($subCateLv1->id == request('category')) selected @endif>
                                        -- {{$subCateLv1->name_en}}
                                    </option>
                                    @if(isset($subCateLv1->children))
                                        @foreach($subCateLv1->children as $subCateLv2)
                                            <option value="{{$subCateLv2->id}}" @if($subCateLv2->id == request('category')) selected @endif>
                                                --- {{$subCateLv2->name_en}}
                                            </option>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('status', 'Trạng thái') !!}
                    {!! Form::select('status', $status, request('status'), ['class' => 'form-control']) !!}
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
                <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
                <a href="{{route('admin.post.create')}}" class="btn btn-primary">
                    <i class="far fa-plus"></i>  Thêm bài viết
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table dataTable" id="dataTable">
                    <thead>
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Thumbnail</th>
                        <th>Danh mục</th>
                        <th>Trạng thái</th>
                        <th style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>
                                <img src="{{$post->image}}" alt="{{$post->title}}" class="show-image-preview">
                            </td>
                            <td>
                                {{$post->category->name_en}}
                            </td>
                            <td>
                                {!! $post->statusHtml() !!}
                            </td>
                            <td>
                                <a href="{{route('admin.post.edit', ['post' => $post->id])}}" class="btn btn-link">
                                    <i class="icon icon-edit fal fa-edit"></i>
                                </a>
                                <i class="icon icon-delete far fa-trash-alt" data-url="{{route('admin.post.destroy', ['post' => $post->id])}}"></i>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{$posts->links()}}
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(".icon-delete").click(function () {
            let url = $(this).data('url')
            if (confirm('Bạn có chắc chắn muốn xóa sản phẩm')) {
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
