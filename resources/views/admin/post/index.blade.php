@extends('layouts.admin')

@section("content")
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Posts</h4>
                </div>
                <div>
                    {{ Breadcrumbs::exists(request()->route()->getName()) ? Breadcrumbs::render(request()->route()->getName()) : Breadcrumbs::render('admin.dashboard') }}
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <a href="{{route('admin.post.create')}}" class="btn btn-primary">
                    <i class="far fa-plus"></i>  Thêm bài viết
                </a>
            </div>
        </div>
    </div>
    @include('components.message')
    <div class="card shadow">
        <div class="card-header py-4">
            {!! Form::open(['method' => 'get']) !!}
            <div class="row align-items-end">
                <div class="col-md-4">
                    <div class="">
                        {!! Form::text('search', request('search'), ['class' => 'form-control', 'placeholder' => 'Nhập tiêu đề bài viết...']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
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
                    <div class="">
                        {!! Form::select('status', $status, request('status'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
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
                               <div class="d-flex align-items-center">
                                   <a href="{{route('admin.post.edit', ['post' => $post->id])}}" class="btn btn-link px-2">
                                       <i class="icon icon-edit fal fa-edit"></i>
                                   </a>
                                   <i class="icon icon-delete far fa-trash-alt" data-url="{{route('admin.post.destroy', ['post' => $post->id])}}"></i>
                               </div>
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
            if (confirm('Bạn có chắc chắn muốn xóa bài viết')) {
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
