<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .cover{
            height:100vh;
            background-image: url('images/bgc.png');
        }
        .login{
            width: 450px;
            padding: 10px 20px;
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%, -50%);
        }
        .header{
            height: 100px;
            z-index: 90;
        }
        .form{
            min-height: 100px;
            margin-top: -47px;
            padding: 75px 30px 60px 30px;
        }
        .title{
            background-color: #CC59DB;
            width: 100px;
            height: 100px;
            font-size: 65px;
            color: #fff;
        }
        .form-control{
            border-radius: 50px;
            height: 40px;
        }
        .login-btn{
            background-color: #CC59DB;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container-fluid w-100">
    <div class="row justify-content-center">
        <div class="cover col-md-12 ">
            <div class="login">
                <div class="row">
                    <div class="header col-md-12 d-flex justify-content-center">
                        <div class="title rounded-circle d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/m.png') }}" width="55px" height="55px">
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="w-100">
                        @csrf
                        <div class="form col-md-12  shadow bg-white rounded">
                            <div class="d-flex justify-content-center">
                                <h4>Login to Your Account</h4>
                            </div>
                            <div class="mt-4 d-flex justify-content-center">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-3 d-flex justify-content-center">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-2 d-flex justify-content-end">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password ?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="mt-4 d-flex justify-content-center">
                                <button type="submit" class="login-btn form-control btn">
                                    {{ __('Sign In') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
