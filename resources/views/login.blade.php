@extends('layouts.main')
@section('title')
    LOGIN
@endsection
@section('content')
    <div class="container">
        <div class="col-md-4 auth_user">
            <div class="app_title">
                KEILA
            </div>
            <form class="auth_form" action="{{route('login')}}" method="POST">
                <div class="form-group">
                    <input class="form-control" type='email' name="txt_email" id="email" placeholder="Email" value="{{old('txt_email')}}" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type='password' name="txt_password" id="password" placeholder="Password" value="{{old('txt_password')}}" required>
                </div>
                <div class="btn_auth">
                    @if (session('error_msg'))
                        <div class="alert alert-danger">
                            {{ session('error_msg') }}
                        </div>
                    @endif
                    <input class="btn col-md-12" type="submit" id="btn_login" value="LOG IN">
                    <a href="{{route('registration')}}">Create Account Here!</a>
                </div>
                <input type="hidden" name="_token" value="{{@Session::Token()}}">
            </form>
        </div>
    </div>
@endsection