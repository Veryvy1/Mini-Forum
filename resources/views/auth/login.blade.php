@extends('layouts.app')

<!-- Mirrored from wpkixx.com/html/socimo/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 06:23:05 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums | Social Media Network</title>
<link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="socimo/css/main.min.css">
<link rel="stylesheet" href="socimo/css/style.css">
<link rel="stylesheet" href="socimo/css/color.css">
<link rel="stylesheet" href="socimo/css/responsive.css">
</head>
<body>
{{-- <div class="page-loader" id="page-loader">
<div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>
</div> --}}
<div class="theme-layout">
<div class="authtication animated-circ">
{{-- <div class="mockups"> --}}
    {{-- <img src="images/resources/login-1.png" alt></div> --}}
{{-- <ul class="welcome-caro">
<li class="welcome-box">
<figure><img src="images/resources/login-1.png" alt></figure>
</li>
<li class="welcome-box">
<figure><img src="images/resources/login-2.png" alt></figure>
</li>
<li class="welcome-box">
<figure><img src="images/resources/login-3.png" alt></figure>
</li>
</ul> --}}
</div>
<div class="auth-login">
<div class="logo"><img src="images/logo.png" alt><span>GetForums</span></div>
<div class="verticle-center">
<div class="login-form">
<h4>Welcome back </h4>
<span>GetForums!</span>
    <form method="POST" class="c-form" action="{{ route('login') }}">
        @csrf
<div class="fileds">
<label class="input-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></label>
<input type="text" name="email" placeholder="Email @">
@error('email')
    <div class="text-danger">{{ $message }}</div>
@enderror
</div>
<div class="fileds">
<label class="input-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></label>
<input type="password" name="password" placeholder="xxxxxxxxxx">
@error('password')
    <div class="text-danger">{{ $message }}</div>
@enderror
</div>
<div class="checkbox">
<input type="checkbox" id="checkbox" checked>
<label for="checkbox"><span>Remember Me</span></label>
<a href="#" title>forgot password</a>
</div>
<button class="main-btn" type="submit">Login</button>
<span class="no-account">If don't have an account? <a href="{{ route('register') }}">Signup</a></span>
</form>
{{--<div class="login-with">
<h5>Login With</h5>
<a class="google-svg" href="#" title><i><svg width="16px" height="16px" viewBox="-3 0 262 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" fill="#000000">
<g id="SVGRepo_bgCarrier" stroke-width="0" />
<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
<g id="SVGRepo_iconCarrier">
<path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4" />
<path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853" />
<path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05" />
<path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335" />
</g>
 </svg></i> Continue with Google</a>
<a class="dark-bg" href="#" title><i class="icofont-brand-apple"></i> Continue with Apple</a>
</div>
<div class="download-app">
<h5>Download Apps</h5>
<a href="#" title><img src="images/google-play.svg" alt></a>
<a href="#" title><img src="images/apple-store.svg" alt></a>
</div> --}}
<div class="bottambar2">
<p>By Signing up you are accepting the Service Terms <a href="#" title> Privacy Policy</a> and use of <a href="#" title> Cookies</a>.</p>
</div>
</div>
</div>
<div class="mockup right"><img src="images/star-shape.png" alt></div>
</div>
</div>
<script src="js/main.min.js" type="a2204abaa3f10749f80d57d8-text/javascript"></script>
<script src="js/script.js" type="a2204abaa3f10749f80d57d8-text/javascript"></script>
<foreignObject><script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="a2204abaa3f10749f80d57d8-|49" defer></script></foreignObject><script>(function(){var js = "window['__CF$cv$params']={r:'85d70ae00ca3836b',t:'MTcwOTI3NDA0MC41MjMwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>
{{--
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
