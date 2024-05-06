@extends('layouts.admin')

@section("content")
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Liên hệ</h1>
    </div>
    {!! Form::open(['method' => 'post']) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('name', 'Tên công ty') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Địa chỉ') !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Số điện thoại') !!}
                    {!! Form::text('phone', old('phone'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone_support', 'Hỗ trợ & bảo hành') !!}
                    {!! Form::text('phone_support', old('phone_support'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('social_facebook', 'Social facebook') !!}
                    {!! Form::text('social_facebook', old('social_facebook'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('social_tiktok', 'Social tiktok') !!}
                    {!! Form::text('social_tiktok', old('social_tiktok'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('social_youtube', 'Social youtube') !!}
                    {!! Form::text('social_youtube', old('social_youtube'), ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.969442782942!2d105.77676422613003!3d20.99386198064683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134534b71693337%3A0xd5bf8c777b002bfd!2sApartment%20CT1%20Trung%20Van%20Vinaconex%203!5e0!3m2!1sen!2s!4v1714796408535!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    {!! Form::close() !!}
@endsection


