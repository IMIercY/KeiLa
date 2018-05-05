@extends('layouts.main')
@section('title')
    REGISTRATION
@endsection
@section('content')
    <div class="container">
        <div class="col-md-4 auth_user">
            <div class="app_title">
                KEILA
            </div>
            <form class="auth_form" action="{{route('registration')}}" method="POST">
                <div class="form-group">
                    <input class="form-control" type='text' name="txt_fullname" id="fullname" placeholder="Fullname" value="{{old('txt_fullname')}}" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type='email' name="txt_email" id="email" placeholder="Email" value="{{old('txt_email')}}" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type='password' name="txt_password" id="password" placeholder="Password" value="{{old('txt_password')}}" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type='text' name="txt_phone" id="phone" placeholder="Phone" value="{{old('txt_phone')}}" required>
                </div>
                <div class="btn_auth">
                    @if (session('error_msg'))
                        <div class="alert alert-danger">
                            {{ session('error_msg') }}
                        </div>
                    @endif
                    <input class="btn col-md-12" type="submit" id="btn_signup" value="SIGN UP">
                </div>
                <input type="hidden" name="_token" value="{{@Session::Token()}}">
            </form>
        </div>
    </div>
@endsection