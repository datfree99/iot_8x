@extends('layouts.admin')

@section("content")
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Về chúng tôi</h4>
                </div>
                <div>
                    {{ Breadcrumbs::exists(request()->route()->getName()) ? Breadcrumbs::render(request()->route()->getName()) : Breadcrumbs::render('admin.dashboard') }}
                </div>
            </div>
        </div>
    </div>
    @include('components.message')

    <div id="post-content">
        {!! Form::open(['method' => 'post']) !!}
        <div class="card-box mb-30">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('title', 'Tiêu đề  <span class="required-label">(*)</span>', [], false) !!}
                            {!! Form::text('title', old('title', $post->title ?? ''), ['class' => 'form-control', 'placeholder' => 'Nhập tiêu đề...']) !!}
                            @if ($errors->has('title'))
                                <span class="error">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Mô tả <span class="required-label">(*)</span>', [], false) !!}
                            {!! Form::textarea('description', old('description', $post->description ?? ''), ['class' => 'form-control', 'placeholder' => 'Nhập mô tả...', 'rows' => 3]) !!}
                            @if ($errors->has('description'))
                                <span class="error">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh <span class="required-label">(*)</span></label>
                            <div>
                                <img src="{{old('image', $post->image ?? '') ? old('image', $post->image ?? '') : '/assets/images/default.png'}}" alt="Ảnh bài viết" id="btn_file_add" width="300" height="200">
                                <input type="text" class="form-control d-none" id="file_name_add" name="image" placeholder="Tên file" value="{{old('image', $post->image ?? '')}}">
                                <span style="font-size: 14px; font-style: italic; display: block">Khuyến nghị size 600x400 px</span>
                            </div>
                            @if ($errors->has('image'))
                                <span class="error">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('title_en', 'Tiêu đề en', [], false) !!}
                            {!! Form::text('title_en', old('title_en', $post->title_en ?? ''), ['class' => 'form-control', 'placeholder' => 'Nhập tiêu đề...']) !!}
                            @if ($errors->has('title_en'))
                                <span class="error">{{ $errors->first('title_en') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('description_en', 'Mô tả en', [], false) !!}
                            {!! Form::textarea('description_en', old('description_en', $post->description_en ?? ''), ['class' => 'form-control', 'placeholder' => 'Nhập mô tả...', 'rows' => 3]) !!}
                            @if ($errors->has('description_en'))
                                <span class="error">{{ $errors->first('description_en') }}</span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="">Seo tiêu đề</label>
                            {!! Form::text('seo_title', old('seo_title', $post->seo_title ?? ''), ['class' => 'form-control', 'placeholder' => 'Nhập seo tiêu đề...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('seo_description', 'Seo mô tả', [], false) !!}
                            {!! Form::textarea('seo_description', old('seo_description', $post->seo_description ?? ""), ['class' => 'form-control', 'placeholder' => 'Nhập seo mô tả...', 'rows' => 3]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('seo_keywords', 'Seo keywords', [], false) !!}
                            {!! Form::textarea('seo_keywords', old('seo_keywords', $post->seo_keywords ?? ''), ['class' => 'form-control', 'placeholder' => 'Nhập seo keywords...', 'rows' => 3]) !!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="card-box mb-30">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Nội dung bài viết vi</label>
                    <textarea name="contents" id="content-vi" class="form-control" rows="20" placeholder="Nhập mô tả">{!! old('contents', $post->contents ?? '') !!}</textarea>
                </div>
            </div>
        </div>
        <div class="card-box mb-30">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Nội dung bài viết en</label>
                    <textarea name="contents_en" id="content-en" class="form-control" rows="20" placeholder="Nhập mô tả">{!! old('contents_en', $post->contents_en ?? '') !!}</textarea>
                </div>
            </div>
        </div>

        <div class="text-center mb-5 mt-5">
            <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Hủy</a>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection


@section('scripts')
    <script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('vendor/ckfinder/ckfinder.js')}}"></script>
    <script>
        CKEDITOR.replace('content-vi', {
            'filebrowserBrowseUrl' : '/vendor/ckfinder/ckfinder.html',
            'filebrowserImageBrowseUrl' : '/vendor/ckfinder/ckfinder.html?Type=Images',
            'filebrowserFlashBrowseUrl' : '/vendor/ckfinder/ckfinder.html?Type=Flash',
            'filebrowserUploadUrl' : '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            'filebrowserImageUploadUrl' : '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            'filebrowserFlashUploadUrl' : '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        })
        CKEDITOR.replace('content-en', {
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
