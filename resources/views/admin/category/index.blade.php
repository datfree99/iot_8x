@extends('layouts.admin_v2')

@section("content")
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{trans("label.categories")}}</h1>

    </div>
    @include('components.message')
    <div class="card shadow">
        <div class="card-header text-right">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
                <button class="btn btn-primary" data-toggle="modal" data-target="#create-category">
                    <i class="far fa-plus"></i>  Thêm mới
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable">
                    <thead>
                        <tr>
                            <th>Tên danh mục</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <i class="far fa-folder-tree"></i>
                                    {{$category->name_en}}
                                </td>
                                <td></td>
                            </tr>
                            @if($category->parent_id == 0 && $category->children)
                                @foreach($category->children as $subCate)
                                    <tr>
                                        <td>
                                            <span style="margin-left: 20px">
                                             <i class="fal fa-folders"></i> {{$subCate->name_en}}
                                            </span>
                                        </td>
                                        <td>
                                            <i class="icon icon-edit fal fa-edit" data-url="{{route('admin.category.edit', ['category' => $subCate->id])}}"></i>
                                            <i class="icon icon-delete far fa-trash-alt" data-url="{{route('admin.category.destroy', ['category' => $subCate->id])}}"></i>
                                        </td>
                                    </tr>
                                    @if($category->children)
                                        @foreach($subCate->children as $cate)
                                            <tr>
                                                <td>
                                                    <span style="margin-left: 40px">
                                                       <i class="fal fa-folder-minus"></i> {{$cate->name_en}}
                                                    </span>
                                                </td>
                                                <td>
                                                    <i class="icon icon-edit fal fa-edit" data-url="{{route('admin.category.edit', ['category' => $cate->id])}}"></i>
                                                    <i class="icon icon-delete far fa-trash-alt" data-url="{{route('admin.category.destroy', ['category' => $cate->id])}}"></i>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="modal fade" id="create-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Thêm mới danh mục</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['method' => 'post', 'url' => route('admin.category.store')]) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Parent Category <span class="required-label">(*)</span> </label>
                        <select name="category" class="form-control">
                            @foreach($parentCategories as $category)
                                <option value="{{$category->id}}"> {{$category->name_en}} </option>
                                @if($category->parent_id == 0 && $category->children)
                                    @foreach($category->children as $subCate)
                                        <option value="{{$subCate->id}}"> == {{$subCate->name_en}} </option>
                                    @endforeach
                                @endif
                            @endforeach

                        </select>
                        @if ($errors->has('category'))
                            <span class="error">{{ $errors->first('category') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Tên danh mục en <span class="required-label">(*)</span></label>
                        {{Form::text('name_en', old('name_en'), ['class' => 'form-control', 'placeholder' => 'Nhập tên danh mục...'])}}
                        @if ($errors->has('name_en'))
                            <span class="error">{{ $errors->first('name_en') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Tên danh mục vn</label>
                        {{Form::text('name_vi', old('name_vi'), ['class' => 'form-control', 'placeholder' => 'Nhập tên danh mục...'])}}
                        @if ($errors->has('name_vi'))
                            <span class="error">{{ $errors->first('name_vi') }}</span>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Chỉnh sửa danh mục</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="category_id" value="">
                    <div class="form-group">
                        <label for="">Parent Category <span class="required-label">(*)</span> </label>
                        <select name="category" class="form-control edit-parent-cate">
                            @foreach($parentCategories as $category)
                                <option value="{{$category->id}}"> {{$category->name_en}} </option>
                                @if($category->parent_id == 0 && $category->children)
                                    @foreach($category->children as $subCate)
                                        <option value="{{$subCate->id}}"> == {{$subCate->name_en}} </option>
                                    @endforeach
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tên danh mục en <span class="required-label">(*)</span></label>
                        {{Form::text('name_en', null, ['class' => 'form-control edit-name-en', 'placeholder' => 'Nhập tên danh mục...'])}}
                    </div>
                    <div class="form-group">
                        <label for="">Tên danh mục vn</label>
                        {{Form::text('name_vi', null, ['class' => 'form-control edit-name-vi', 'placeholder' => 'Nhập tên danh mục...'])}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary update-category" >Lưu</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            @if($errors->any())
                $('#create-category').modal('show')
            @endif

            $(".icon-delete").click(function () {
                let url = $(this).data('url')
                if (confirm('Bạn có chắc chắn muốn xóa danh mục')) {
                    $.ajax({
                        method: "DELETE",
                        url: url
                    }).done(function (res) {
                        window.location.reload()
                    })
                }
            })
            $(".icon-edit").click(function () {
                $('#edit-category').modal('show')
                let url = $(this).data('url')
                $.ajax({
                    method: "GET",
                    url: url
                }).done(function (res) {
                   if(res.success) {
                       let category = res.category
                       $(".edit-parent-cate").val(category.parent_id)
                       $(".edit-name-en").val(category.name_en)
                       $(".edit-name-vi").val(category.name_vi)
                       $(".update-category").attr('data-url', category.edit)
                       $('#edit-category').modal('show')
                   }
                }).fail(function (xhr) {
                    alert("Lỗi không xác định. Vui lòng liên hệ quản trị viên")
                })
            })
            $(".update-category").click(function () {
                let url = $(this).data('url')
                let category = $(".edit-parent-cate").val()
                let name_en = $(".edit-name-en").val()
                let name_vi = $(".edit-name-vi").val()
                $.ajax({
                    method: "PUT",
                    url: url,
                    data : {
                        category,
                        name_en,
                        name_vi
                    }
                }).done(function (res) {
                    window.location.reload()
                }).fail(function (xhr) {
                    alert("Lỗi không xác định. Vui lòng liên hệ quản trị viên")
                })
            })
        });
    </script>
@endsection
