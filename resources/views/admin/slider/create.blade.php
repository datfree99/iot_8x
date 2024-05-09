@extends('layouts.admin')
@section('add-container', 'container')
@section("content")
    <div class="">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Create slider</h4>
                    </div>
                    <div>
                        {{ Breadcrumbs::exists(request()->route()->getName()) ? Breadcrumbs::render(request()->route()->getName()) : Breadcrumbs::render('admin.dashboard') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box">
            <div class="card-body">
                {!! Form::open(['method' => 'post', 'url' => route('admin.slider.store')]) !!}
                <div class="form-group">
                    {!! Form::label('title_vi', 'Tiêu đề Vi') !!}
                    {!! Form::text('title_vi', old('title_vi'), ['class' => 'form-control', 'placeholder' => 'Nhập tiêu đề...']) !!}
                    @if ($errors->has('title_vi'))
                        <span class="error">{{ $errors->first('title_vi') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('title_en', 'Tiêu đề En') !!}
                    {!! Form::text('title_en', old('title_en'), ['class' => 'form-control', 'placeholder' => 'Nhập tiêu đề...']) !!}
                    @if ($errors->has('title_en'))
                        <span class="error">{{ $errors->first('title_en') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('redirect', 'Redirect <i class="fal fa-exclamation-circle text-warning" data-toggle="tooltip" data-placement="top" title="Link muốn điều hướng người dùng"></i>', [], false) !!}
                    {!! Form::text('redirect', old('redirect'), ['class' => 'form-control', 'placeholder' => 'Nhập redirect...']) !!}
                    @if ($errors->has('redirect'))
                        <span class="error">{{ $errors->first('redirect') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh <span class="required-label">(*)</span></label>
                    <div>
                        <img src="{{old('image') ?? '/images/image_slider_default.png'}}" alt="Ảnh slider" id="btn_file_add" style="width: 100%; height: 450px">
                        <input type="text" class="form-control d-none" id="file_name_add" name="image" placeholder="Tên file" value="{{old('image')}}">
                    </div>
                    @if ($errors->has('image'))
                        <span class="error">{{ $errors->first('image') }}</span>
                    @endif
                </div>
                <div class="text-center mb-5 mt-5">
                    <a href="{{route('admin.slider.index')}}" class="btn btn-secondary">Hủy</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection

@section('scripts')
    <script src="{{asset('vendor/ckfinder/ckfinder.js')}}"></script>
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
