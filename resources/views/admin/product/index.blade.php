@extends('layouts.admin')

@section("content")
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh sách sản phẩm</h1>

    </div>
    @include('components.message')
    <div class="mb-3">
        {!! Form::open(['method' => 'get']) !!}
            <div class="row align-items-end">
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('search') !!}
                        {!! Form::text('search', request('search'), ['class' => 'form-control', 'placeholder' => 'Nhập tiêu đề sản phẩm...']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('category', 'Danh mục') !!}
                        <select name="category" class="form-control">
                            <option value=""> Chọn danh mục </option>
                            @if(isset($categoryProduct->children))
                                @foreach($categoryProduct->children as $category)
                                    <option value="{{$category->id}}" @if($category->id == request('category')) selected @endif> {{$category->name_en}} </option>
                                    @if($category->children)
                                        @foreach($category->children as $subCate)
                                            <option value="{{$subCate->id}}" @if($subCate->id == request('category')) selected @endif> == {{$subCate->name_en}} </option>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
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
               <h6 class="m-0 font-weight-bold text-primary">Products</h6>
               <a href="{{route('admin.product.create')}}" class="btn btn-primary">
                   <i class="far fa-plus"></i>  Thêm sản phẩm
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
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->post->title}}</td>
                            <td>
                                <img src="{{$product->post->image}}" alt="{{$product->post->title}}" class="show-image-preview">
                            </td>
                            <td>
                                {{$product->category->name_en}}
                            </td>
                            <td>
                                {!! $product->post->statusHtml() !!}
                            </td>
                            <td>
                                <a href="{{route('admin.product.edit', ['product' => $product->id])}}" class="btn btn-link">
                                    <i class="icon icon-edit fal fa-edit"></i>
                                </a>
                                <i class="icon icon-delete far fa-trash-alt" data-url="{{route('admin.product.destroy', ['product' => $product->id])}}"></i>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{$products->links()}}
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
