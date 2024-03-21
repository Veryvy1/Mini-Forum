@extends('layouts.app')
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums | Register</title>
<link rel="icon" href="images/LOGO/logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="socimo/css/main.min.css">
<link rel="stylesheet" href="socimo/css/style.css">
<link rel="stylesheet" href="socimo/css/color.css">
<link rel="stylesheet" href="socimo/css/responsive.css">
</head>
<body>
<div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>
<div class="theme-layout">
<div class="authtication bluesh high-opacity">
<div class="verticle-center">
<div class="welcome-note">
<div class="logo">
    <img src="images/LOGO/logo.png" alt>
    <span>GetForums</span></div>
<h1>Welcome to GetForums</h1>
<p>
    Embark on a journey of knowledge and connection. Join our forum and ignite your passion for learning.</div>
<div class="bg-image" style="background-image: url(images/resources/login-bg.png)"></div>
</div>
</div>
<div class="auth-login">
<div class="verticle-center">
<div class="signup-form">
<h4><i class="icofont-lock"></i> Singup</h4>
<form method="post" class="c-form" action="{{ route('register') }}">
        @csrf
<div class="row merged-10">
<div class="col-lg-6 col-sm-6 col-md-6">
<div class="fileds">
<label class="input-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></label>
<input type="text" name="name" placeholder="Username" value="{{ old('name') }}">
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
</div>
<div class="col-lg-6 col-sm-6 col-md-6">
<div class="fileds">
<label class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg></label>
<input type="email" name="email" placeholder="Email @" value="{{ old('email') }}">
@error('email')
    <div class="text-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-lg-6 col-sm-6 col-md-6">
    <div class="fileds">
        <label class="input-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
        </label>
        <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-lg-6 col-sm-6 col-md-6">
    <div class="fileds">
        <label class="input-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
        </label>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
    </div>
</div>


<div style="margin-bottom:3%;">
    <span>Already have an account? <a href="{{ Route('login') }}">Sign In</a></span>
</div>
<div class="col-lg-12">

<button class="main-btn" type="submit"><i class="icofont-key"></i> Signup</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<script src="js/main.min.js" type="16773e5f207e61722ca6252b-text/javascript"></script>
<script src="js/script.js" type="16773e5f207e61722ca6252b-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="16773e5f207e61722ca6252b-|49" defer></script><script>(function(){var js = "window['__CF$cv$params']={r:'85d70b2c6caa18ca',t:'MTcwOTI3NDA1Mi43MjIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>
