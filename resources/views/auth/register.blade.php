@extends('layouts.app')

<!-- Mirrored from wpkixx.com/html/socimo/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 06:24:49 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums </title>
<link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="socimo/css/main.min.css">
<link rel="stylesheet" href="socimo/css/style.css">
<link rel="stylesheet" href="socimo/css/color.css">
<link rel="stylesheet" href="socimo/css/responsive.css">
</head>
<body>
{{-- <div class="page-loader" id="page-loader"> --}}
<div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>
{{-- </div> --}}
<div class="theme-layout">
<div class="authtication bluesh high-opacity">
<div class="verticle-center">
<div class="welcome-note">
<div class="logo">
    {{-- <img src="images/logo.png" alt> --}}
    <span>GetForums</span></div>
<h1>Welcome to GetForums</h1>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus iste, ad excepturi cum ipsam odit doloremque velit sunt temporibus ea! Laboriosam?</div>
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
{{-- <div class="col-lg-12"><h4>What type of researcher are you?</h4></div> --}}
<div class="col-lg-6 col-sm-6 col-md-6">
<div class="fileds">
<label class="input-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></label>
<input type="text" name="name" placeholder="Username">
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
</div>
{{-- <div class="col-lg-6 col-sm-6 col-md-6">
<div class="fileds">
<label class="input-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></label>
<input type="text" placeholder="Last Name">
</div>
</div> --}}
<div class="col-lg-6 col-sm-6 col-md-6">
<div class="fileds">
<label class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg></label>
<input type="email" name="email" placeholder="Email @">
@error('email')
    <div class="text-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-lg-6 col-sm-6 col-md-6">
<div class="fileds">
<label class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></label>
<input type="password" name="password" placeholder="Password">
@error('password')
    <div class="text-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-lg-6 col-sm-6 col-md-6">
<div class="fileds">
<label class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></label>
<input type="password" name="password_confirmation" placeholder="Confirm Password">
</div>
</div>
{{--<div class="col-lg-6 col-sm-6 col-md-6">
<input type="radio" id="student" name="acdamic" value="student">
<label for="student">Academic Or Student</label>
</div>
 <div class="col-lg-6 col-sm-6 col-md-6">
<input type="radio" id="ngo" name="acdamic" value="ngo">
<label for="ngo">Corporate, Govt, Or NGO Person</label>
</div>
<div class="col-lg-6 col-sm-6 col-md-6">
<input type="radio" id="medical" name="acdamic" value="medical">
<label for="medical">Medical</label>
</div>
<div class="col-lg-6 col-sm-6 col-md-6">
<input type="radio" id="other" name="acdamic" value="other">
<label for="other">Not a Rsearcher</label>
</div>
<div class="col-lg-6 col-sm-6 col-md-6">
<div class="fileds">
<label class="input-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg></label>
<input type="text" placeholder="Institute, Company">
</div>
</div>
<div class="col-lg-6 col-sm-6 col-md-6">
<div class="fileds">
<label class="input-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></label>
<input type="text" placeholder="Department">
</div>
</div>
<div class="col-lg-12 col-sm-6 col-md-6">
<div class="fileds">
<label class="input-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg></label>
<input type="text" placeholder="Your Position">
</div>
</div>
<div class="col-lg-12">
<div class="gender">
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
</div>
</div>--}}
<div class="col-lg-12">
<div class="checkbox">
<input type="checkbox" id="checkbox" checked>
<label for="checkbox"><span>I agree the terms of Services and acknowledge the privacy policy</span></label>
</div>
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
