<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/socimo-panel/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:31 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
{{-- <meta name="keywords" content /> --}}
<title>socimo | Dashboard</title>
<link rel="icon" href="images/fav.html" type="image/png" sizes="16x16">
<link rel="stylesheet" href="css/main.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/color.css">
<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
{{-- <div class="page-loader" id="page-loader"> --}}
{{-- <div class="lds-ellipsis"><div> --}}
    </div><div></div><div></div><div></div></div>
{{-- <span>Loading...</span> --}}
</div>
<div class="theme-layout gray-bg vh-100">
<div class="container">
<div class="row justify-content-md-center">
<div class="col-lg-8">
<div class="logo-up">
<figure class="logo"><img alt src="images/logo.png"><span>Socimo</span></figure>
</div>
<div class="box">
<input type="checkbox" id="toggle" class="box__toggle" hidden>
<img src="images/resources/login-top.jpg" alt="Picture by Autumn Studio" class="box__image">
<form class="form form--register" method="POST" action="{{ route('register') }}">
@csrf
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg></span>
<h1 class="form__title">Sign up</h1>
<div class="form__helper">
<input type="text" name="name" id="new-name" placeholder="name" class="form__input @error('name') is-invalid @enderror" />
<label class="form__label" for="new-name">{{__('Username') }}</label>
@error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form__helper">
<input type="email" name="email" id="email" placeholder="Email" class="form__input @error('email') is-invalid @enderror" />
<label class="form__label" for="email">{{ __('Email') }}</label>
@error('email')
    <div class="text-danger">{{ $message }}</div>
@enderror
</div>
<div class="form__helper">
<input type="password" name="password" id="new-user-password" placeholder="Password" class="form__input @error('password') is-invalid @enderror" />
<label class="form__label" for="new-user-password" name="password">{{ __('Password') }}</label>
@error('password')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form__helper">
<input type="password" name="password_confirmation" id="confirm-password" Placeholder="Confirm password" class="form__input" />
<label class="form__label" for="confirm-password">{{ __('Confirm Password') }}</label>
</div>
<button type="submit" class="form__button">{{ __('Register') }}</button>
<p class="form__text">Already have an account?
<label for="toggle" class="form__link">Sign in!</label>
</p>
</form>




<form method="POST" action="{{ route('login') }}" class="form form--login">
    @csrf
<span><svg id="login" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg></span>
<h1 class="form__title">Sign in</h1>
<div class="form__helper">
<input type="text" name="name" id="name" placeholder="name" class="form__input @error('name') is-invalid @enderror" />
<label class="form__label" for="name">{{ __('Username') }}</label>
@error('name')
    <div class="text-danger">{{ $message }}</div>
@enderror
</div>
<div class="form__helper">
<input type="password" name="password" id="password" placeholder="Password" class="form__input" />
<label class="form__label" for="password">{{__('Password') }}</label>
@error('password')
    <div class="text-danger">{{ $message }}</div>
@enderror
</div>
<button type="submit" class="form__button">Login</button>
<p class="form__text">Don't have an account?
<label for="toggle" class="form__link">Sign up!</label>
</p>
</form>
</div>
</div>
</div>
</div>
<figure class="bottom-mockup"><img alt src="images/footer.png"></figure>
<div class="bottombar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<span class>&copy; Copyright All rights reserved by socimo 2020</span>
</div>
</div>
</div>
</div>
</div>
<script src="js/main.min.js" type="ce0bac946b4e46c6e4f95c34-text/javascript"></script>
<script src="js/vivus.min.js" type="ce0bac946b4e46c6e4f95c34-text/javascript"></script>
<script src="js/script.js" type="ce0bac946b4e46c6e4f95c34-text/javascript"></script>
{{-- <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ce0bac946b4e46c6e4f95c34-|49" defer></script><script>(function(){var js = "window['__CF$cv$params']={r:'85d591fb3d6c9e29',t:'MTcwOTI1ODYwMi45NDkwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body> --}}

<!-- Mirrored from wpkixx.com/html/socimo-panel/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:32 GMT -->
</html>
