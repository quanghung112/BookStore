@extends('Layout.master')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Laravel Session
            </div>
            <div class="links">
                <a href="{{ route('user.showLogin') }}">
                    <button type="button" class="btn btn-outline-primary">Đăng Nhập</button>
                </a>
            </div>
            @if (Session::has('login-fail'))
                <div class="login-fail">
                    <p class="text-danger">{{ Session::get('login-fail') }}</p>
                </div>
            @endif
            @if (Session::has('not-login'))
                <div class="not-login">
                    <p class="text-danger">{{ Session::get('not-login') }}</p>
                </div>
            @endif
        </div>
    </div>
@endsection
