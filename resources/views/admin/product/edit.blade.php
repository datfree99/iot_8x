@extends('layouts.admin')

@section("content")
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm mới sản phẩm</h1>

    </div>
    <div>
        {!! Form::open(['method' => 'put', 'url' => route('admin.product.update', ['product' => $product->id])]) !!}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('title', 'Tiêu đề  <span class="required-label">(*)</span>', [], false) !!}
                    {!! Form::text('title', old('title', $product->post->title), ['class' => 'form-control', 'placeholder' => 'Nhập tiêu đề...']) !!}
                    @if ($errors->has('title'))
                        <span class="error">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Mô tả <span class="required-label">(*)</span>', [], false) !!}
                    {!! Form::textarea('description', old('description', $product->post->description), ['class' => 'form-control', 'placeholder' => 'Nhập mô tả...', 'rows' => 3]) !!}
                    @if ($errors->has('description'))
                        <span class="error">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('category', 'Danh mục <span class="required-label">(*)</span>', [], false) !!}
                    <select name="category" class="form-control">
                        <option value=""> Chọn danh mục </option>
                        @if(isset($categoryProduct->children))
                            @foreach($categoryProduct->children as $category)
                                <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif> {{$category->name_en}} </option>
                                @if($category->children)
                                    @foreach($category->children as $subCate)
                                        <option value="{{$subCate->id}}"  @if($subCate->id == $product->category_id) selected @endif> == {{$subCate->name_en}} </option>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    </select>
                    @if ($errors->has('category'))
                        <span class="error">{{ $errors->first('category') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'Trạng thái <span class="required-label">(*)</span>', [], false) !!}
                    {!! Form::select('status', $status, old('status', $product->post->status), ['class' => 'form-control']) !!}
                    @if ($errors->has('status'))
                        <span class="error">{{ $errors->first('status') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh <span class="required-label">(*)</span></label>
                    <div>
                        <img src="{{old('image', $product->post->image) ?? '/assets/images/default.png'}}" alt="Ảnh sản phẩm" id="btn_file_add" class="image-preview">
                        <input type="text" class="form-control d-none" id="file_name_add" name="image" placeholder="Tên file" value="{{old('image', $product->post->image)}}">
                    </div>
                    @if ($errors->has('image'))
                        <span class="error">{{ $errors->first('image') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Seo tiêu đề</label>
                    {!! Form::text('seo_title', old('seo_title', $product->post->seo_title), ['class' => 'form-control', 'placeholder' => 'Nhập seo tiêu đề...']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('seo_description', 'Seo mô tả', [], false) !!}
                    {!! Form::textarea('seo_description', old('seo_description', $product->post->seo_description), ['class' => 'form-control', 'placeholder' => 'Nhập seo mô tả...', 'rows' => 3]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('seo_keywords', 'Seo keywords', [], false) !!}
                    {!! Form::textarea('seo_keywords', old('seo_keywords', $product->post->seo_keywords), ['class' => 'form-control', 'placeholder' => 'Nhập seo keywords...', 'rows' => 3]) !!}
                </div>
            </div>
            <div class="col-md-8">
                <label for="">Nội dung sản phẩm <span class="required-label">(*)</span></label>
                <textarea name="contents" id="content-ck" class="form-control" rows="20" placeholder="Nhập mô tả">{!! old('contents', $product->post->contents) !!}</textarea>
            </div>
        </div>
        <div class="text-center mb-5 mt-5">
            <a href="{{route('admin.product.index')}}" class="btn btn-secondary">Hủy</a>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')
    <script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('vendor/ckfinder/ckfinder.js')}}"></script>
    <script>
        CKEDITOR.replace('content-ck', {
            'filebrowserBrowseUrl' : '/vendor/ckfinder/ckfinder.html',
            'filebrowserImageBrowseUrl' : '/vendor/ckfinder/ckfinder.html?Type=Images',
            'filebrowserFlashBrowseUrl' : '/vendor/ckfinder/ckfinder.html?Type=Flash',
            'filebrowserUploadUrl' : '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            'filebrowserImageUploadUrl' : '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            'filebrowserFlashUploadUrl' : '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        })
    </script>
    <script>
        var button1 = document.getElementById('btn_file_add');
        button1.onclick = function() {
            selectFileWithCKFinder('file_name_add');
        };

        function selectFileWithCKFinder(elementId) {
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function(finder) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById(elementId);
                        output.value = file.getUrl();

                        document.getElementById("btn_file_add").src = file.getUrl();
                    });
                    finder.on('file:choose:resizedImage', function(evt) {
                        var output = document.getElementById('btn_file_add');
                        output.value = evt.data.resizedUrl;
                    });
                }
            });
        }
    </script>
@stop
