@extends('layouts.main')

@section('title')
    {{$user->full_name}}
@endsection

@section('user_fullname')
    {{$user->full_name}}
@endsection

@section('user_profile')
    @if($user->profile_image !="")
        {
        {{$user->profile_image}}
        }
    @else
        {{URL('/image/ic_default_profile.png')}}
    @endif
@endsection

@section('content')
    @include('headers.navigation')
    <div class="form-control profile">
        <img src="@yield('user_profile')"></a>
        <h5>{{$user->full_name}}</h5>
    </div>
    <div class="form-control">
        <div class="text-right">
            <a class="btn btn-default" href="#">Edit</a>
            <a class="btn btn-default" href="{{route('logout')}}">Log out</a>
        </div>
    </div>

    <table align="center">
        <tr class="profile-email">
            <td>
                <img class="profile-info-item" src="{{URL('/image/ic_email.png')}}"></a>
            </td>
            <td id="profile-user-info-item">
                <label>{{$user->email}}</label>
            </td>
        </tr>
        <tr class="profile-phone">
            <td>
                <img class="profile-info-item" src="{{URL('/image/ic_phone.png')}}"></a>
            </td>
            <td id="profile-user-info-item">
                <label>{{$user->phone}}</label>
            </td>
        </tr>
        <tr class="profile-age">
            <td>
                <img class="profile-info-item" src="{{URL('/image/ic_age.png')}}"></a>
            </td>
            <td id="profile-user-info-item">
                <label>
                    @if($user->age !="")
                        {{$user->age}}
                    @else
                        Age
                    @endif
                </label>
            </td>
        </tr>
        <tr class="profile-date-of-birth">
            <td>
                <img class="profile-info-item" src="{{URL('/image/ic_date_of_birth.png')}}"></a>
            </td>
            <td id="profile-user-info-item">
                <label>
                    @if($user->date_of_birth !="")
                        <span class="te">
                            {{$user->date_of_birth}}
                        </span>
                    @else
                        Date Of Birth
                    @endif
                </label>
            </td>
        </tr>
        <tr class="profile-address">
            <td>
                <img class="profile-info-item" src="{{URL('/image/ic_address.png')}}"></a>
            </td>
            <td id="profile-user-info-item">
                <label>
                    @if($user->address !="")
                        {{$user->address}}
                    @else
                        Address
                    @endif
                </label>
            </td>
        </tr>
    </table>
@endsection