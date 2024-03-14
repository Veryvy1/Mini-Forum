<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>Profile | Profile</title>
<link rel="icon" href="images/LOGO/logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="socimo/css/main.min.css">
<link rel="stylesheet" href="socimo/css/style.css">
<link rel="stylesheet" href="socimo/css/color.css">
<link rel="stylesheet" href="socimo/css/responsive.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="theme-layout">
<div class="responsive-header">
<div class="logo res"><img src="images/LOGO/logo.png" alt><span>GetForums</span></div>

<div class="right-compact">
<div class="sidemenu">
<i>
<svg id="side-menu2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
</div>
<div class="res-search">
<span>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
</div>
</div>
<div class="restop-search">
<span class="hide-search"><i class="icofont-close-circled"></i></span>
<form method="post">
<input type="text" placeholder="Search...">
</form>
</div>
</div>
<header class>
<div class="topbar stick">
<div class="logo"><img src="images/LOGO/logo.png" alt><span>GetForums</span></div>
{{-- <div class="searches"> --}}
{{-- <form method="post">
<input type="text" placeholder="Search...">
<button type="submit"><i class="icofont-search"></i></button>
<span class="cancel-search"><i class="icofont-close"></i></span>
<div class="recent-search">
<h4 class="recent-searches">Your's Recent Search</h4>
<ul class="so-history">
<li>
<span class="trash"><i class="icofont-close-circled"></i></span>
</li>
<li>
<div class="searched-user">
<figure><img src="images/resources/user2.jpg" alt></figure>
<span>Maria K</span>
</div>
<span class="trash"><i class="icofont-close-circled"></i></span>
</li>
<li>
<div class="searched-user">
<figure><img src="images/resources/user3.jpg" alt></figure>
<span>Fawad Khan</span>
</div>
<span class="trash"><i class="icofont-close-circled"></i></span>
</li>
<li>
<div class="searched-user">
<figure><img src="images/resources/user4.jpg" alt></figure>
<span>Danial Sandos</span>
</div>
<span class="trash"><i class="icofont-close-circled"></i></span>
</li>
<li>
<div class="searched-user">
<figure><img src="images/resources/user5.jpg" alt></figure>
<span>Jack Carter</span>
</div>
<span class="trash"><i class="icofont-close-circled"></i></span>
</li>
</ul>
</div>
</form> --}}
{{-- </div> --}}
<ul class="web-elements">

<li>
<a href="index-2.html" title="Home" data-toggle="tooltip">
<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></i>
</a>
</li>
<li>
<a href="#" title>
<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
</i>
</a>
<ul class="dropdown">
    <li>
        <a href="{{ route('profile.edit', auth()->user()->id) }}" title="Edit Profile">
            <i class="icofont-user-alt-3"></i> Your Profile
        </a>
    </li>
<li><a href="add-new-course.html" title><i class="icofont-plus"></i>Latest Content</a></li>
<li><a type="button" class="invite-new" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#addContactModal"><i class="icofont-envelope"></i> Messages</a></li>

<li class="logout">
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="icofont-power"></i> Logout
    </a>
</li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
</ul>
</li>
</ul>
</div>
</header>


<section>
<div class="gap" style="
width: 130%;
margin: 0 auto;
padding: 80px 0;
">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div id="page-contents" class="row merged20">


<div class="col-lg-9">
<div class="group-feed">
<div class="group-avatar">
    @if ($user->profile)
<img style="object-fit: cover; width:1000px; height:300px;" src="{{ asset('storage/' . $user->bgprofile) }}" alt >
@else
<img style="object-fit: cover; width:1000px; height:300px;" src="{{ asset('images/LOGO/bguser.jpg') }}" alt >
@endif
{{-- <a href="{{ route('profile.edit', auth()->user()->id) }}" class="btn btn-primary"><i class="fa-solid fa-ellipsis"></i></a> --}}
<a href="{{ route('profile.edit', auth()->user()->id) }}" class="btn btn-primary" style="color: #000; background-color: #fff; border: none;">Edit</a>
<figure class="group-dp">
    @if ($user->profile)
        <img src="{{ asset('storage/' . $user->profile) }}" alt="">
    @else
        <img id="preview-image" src="{{ asset('images/LOGO/profil.jpeg') }}" alt>
    @endif
</figure>
</div>
<div class="grp-info about">
<h4>{{ $user->name }}<span>{{ $user->email }}</span></h4>
<ul class="joined-info">
<li><span>Joined:</span> {{ $user->created_at }}</li>
<li><span>Posts:</span> XXX</li>
</ul>
{{-- <ul class="nav nav-tabs about-btn">
<li class="nav-item"><a class="active" href="#posts" data-toggle="tab">Posts</a></li>
<li class="nav-item"><a class href="#pictures" data-toggle="tab">Pictures</a></li>
<li class="nav-item"><a class href="#videos" data-toggle="tab">Videos</a></li>
<li class="nav-item"><a class href="#friends" data-toggle="tab">Friends</a></li>
<li class="nav-item"><a class href="#about" data-toggle="tab">About</a></li>
</ul> --}}
<ul class="more-grp-info">
{{-- <li>
<form class="c-form" method="post">
<input type="text" placeholder="Search...">
<i class="icofont-search-1"></i>
</form>
</li> --}}
<li>

{{-- <div class="more">
<div class="more-post-optns">
<i class>
<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12" /><circle r="1" cy="12" cx="19" /><circle r="1" cy="12" cx="5" /></svg></i>
<ul>
<li>
<i class="icofont-pen-alt-1"></i>Edit Post
<span>Edit This Post within a Hour</span>
</li>
<li>
<i class="icofont-ban"></i>Hide Post
<span>Hide This Post</span>
</li>
<li>
<i class="icofont-ui-delete"></i>Delete Post
<span>If inappropriate Post By Mistake</span>
</li>
<li>
<i class="icofont-flag"></i>Report
<span>Inappropriate content</span>
</li>
</ul>
</div>
</div> --}}

</li>
</ul>
</div>
<div class="main-wraper">
<div class="grp-about">
<div class="row">
<div class="col-lg-8 col-md-6">
<h4>About Me!</h4>
<p>{{ $user->bio }}</p>
{{-- <ul class="badges">
<li><img src="images/badges/badge2.png" alt></li>
<li><img src="images/badges/badge3.png" alt></li>
<li><img src="images/badges/badge4.png" alt></li>
<li><img src="images/badges/badge5.png" alt></li>
<li><img src="images/badges/badge7.png" alt></li>
<li><img src="images/badges/badge8.png" alt></li>
</ul> --}}
</div>
{{-- <div class="col-lg-4 col-md-6">
<div class="share-article">
<span>Share Profile</span>
<a href="#" title class="facebook"><i class="icofont-facebook"></i></a>
<a href="#" title class="pinterest"><i class="icofont-pinterest"></i></a>
<a href="#" title class="instagram"><i class="icofont-instagram"></i></a>
<a href="#" title class="twitter"><i class="icofont-twitter"></i></a>
<a href="#" title class="google"><i class="icofont-google-plus"></i></a>
</div>
</div> --}}
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="tab-content">
<div class="tab-pane active fade show " id="posts">
<div class="row merged20">
<div class="col-lg-8">

{{-- <div class="main-wraper">
<span class="new-title">Create New Post</span>
<div class="new-post">
<form method="post">
<i class="icofont-pen-alt-1"></i>
<input type="text" placeholder="Create New Post">
</form>
<ul class="upload-media">
<li>
<a href="#" title>
<i><img src="images/image.png" alt></i>
<span>Photo/Video</span>
</a>
</li>
<li>
<a href="#" title>
<i><img src="images/activity.png" alt></i>
<span>Feeling/Activity</span>
</a>
</li>
<li>
<a href="live-stream.html" title>
<i><img src="images/live-stream.png" alt></i>
<span>Live Stream</span>
</a>
</li>
</ul>
</div>
</div> --}}

@forelse ($content as $contents)

<div class="main-wraper">
    <div class="user-post">
        <div class="friend-info">
            <figure>
                <em>
                    <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
<img alt src="images/LOGO/logo.png">
</figure>
<div class="friend-name">
    <ins><a title href="time-line.html">{{ $contents->user->name }}</a> Has Posted</ins>
    <span><i class="icofont-globe"></i> published: {{  \Carbon\Carbon::parse($contents->created_at)->isoFormat('D MMMM YYYY') }}</span>
</div>
<div class="post-meta">
    <figure>
        <a data-toggle="modal" data-target="#img-comt" href="#">
            <img src="{{ asset('storage/'.  $contents->gambar ) }}" style="" alt>
</a>
</figure>
<a href="post-detail.html" class="post-title">
    @if(strlen($contents->judul) > 45)
    {{ substr($contents->judul, 0, 45) }}...
@else
    {{ $contents->judul }}
@endif</a>
<p>

    @if(strlen($contents->deskripsi) > 70)
    {{ substr($contents->deskripsi, 0, 70) }}...
@else
    {{ $contents->deskripsi }}
@endif
</p>

<div class="we-video-info">
    <div class="stat-tools">
        <div class="box">
            <div class="Like">
                <!-- Tombol Like -->
                {{-- @if($likes && $likes->user_id == Auth::user()->id && $likes->content_id == $contents->id)
                    <form action="{{ route('like.destroy', $likes->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        @error('like')
                            {{ $message }}
                        @enderror
                        @error('user_id')
                            {{ $message }}
                        @enderror
                        @error('content_id')
                            {{ $message }}
                        @enderror
                        <input type="hidden" name="content_id" value="{{$contents->id}}">
                        <button type="submit" class="Like__link btn" style="background-color: #82b7d1"><i class="icofont-like"></i> Unlike</button>
                    </form>
                @else
                    <form action="/like" method="post">
                        @csrf
                        @method('POST')
                        @error('like')
                            {{ $message }}
                        @enderror
                        @error('user_id')
                            {{ $message }}
                        @enderror
                        @error('content_id')
                            {{ $message }}
                        @enderror
                        <input type="hidden" name="content_id" value="{{$contents->id}}">
                        <button type="submit" class="Like__link btn" style="background-color: #db8989"><i class="icofont-like"></i> Like</button>
                    </form>
                @endif --}}
            </div>
            <!-- Tombol Comment -->
            <div class="Comment">
                <!-- Ganti bagian ini sesuai dengan kode HTML untuk tombol komentar -->
                <!-- Saya asumsikan Anda memiliki tombol komentar dengan kelas .Comment__link -->
                <button class="Comment__link btn"><i class="icofont-comment"></i> Comment</button>
            </div>
        </div>
    </div>



{{-- <button type="button" title class="comment-to btn" ><i class="icofont-comment"></i> Comment</button> --}}

<div class="emoji-state">

<div class="popover_wrapper">
    <div class="we-video-info">

    <ul><li>
        <span title="liked" class="liked">
           <i class="icofont-heart" style="color: #64a4d4;"></i>
            <ins>{{ $likesCount[$contents->id] }}</ins>
</span>
</li></ul>
    </div>
</div>

<div class="popover_wrapper">
    <div class="we-video-info">
    <ul><li>
        <span title="Comments" class="Recommend">
            <i>
                <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" /></svg></i>
                <ins>54</ins>
            </span>
        </li></ul>
    </div>
</div>

</div>
</div>
<div class="new-comment" style="display: none;">
    <form method="post">
        <input type="text" placeholder="write comment">
        <button type="submit"><i class="icofont-paper-plane"></i></button>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
@empty

<center>
    <img src="images/LOGO/datakosong.png" alt="" style="width: 60%;">
</center>
@endforelse

<div class="sp sp-bars"></div>
</div>

</div>
</div>
<div class="tab-pane fade" id="pictures">
<h5 class="tab-title">Pictures <span>87</span></h5>
<ul class="pix-filter">
<li><a class="active" href="#" title>All Photos</a></li>
<li><a href="#" title>Profile Pictures</a></li>
<li><a href="#" title>Albums</a></li>
<li><a href="#" title>from Mobile</a></li>
</ul>
<div class="row merged-10">
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic1.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic2.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic3.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic4.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic5.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic6.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic7.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic8.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic9.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic10.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic11.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic12.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic13.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic14.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic15.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic5.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic12.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic4.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic6.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="uzr-pictures">
<a href="#" data-target="#img-comt" data-toggle="modal">
<img alt src="images/resources/user-pic7.jpg">
</a>
<ul class="hover-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-12 mt-3">
<div class="sp sp-bars"></div>
</div>
</div>
</div>
<div class="tab-pane fade" id="videos">
<h5 class="tab-title">Videos <span>55</span></h5>
<ul class="pix-filter">
<li><a title href="#" class="active">All Videos</a></li>
<li><a title href="#">Most views</a></li>
<li><a title href="#">Newest</a></li>
<li><a title href="#">Mobile videos</a></li>
</ul>
<div class="row merged-10">
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video1.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Miami Beach Party</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video2.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Spring Break Party</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video3.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Pool Party 2020</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video4.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>baby girls Entry at beach</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video5.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Spring Party 2021</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video6.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Biggest Part of the Pool Party</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video7.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Party games in the water</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video8.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Water party with GF</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video9.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Super hot party in summer</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video10.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Summer Party in Bikini</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video11.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Miami Bikini English</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6">
<div class="user-video">
<figure>
<img alt src="images/resources/user-video12.jpg">
<a href="https://www.youtube.com/embed/vP-l9L3Ku5Y" data-fancybox class="play-btn"><i class="icofont-play"></i></a>
</figure>
<span>Super Summer 2021</span>
<ul class="vid-action">
<li><a href="#" title><i class="icofont-like"></i> 3</a></li>
<li><a href="#" title><i class="icofont-chat"></i> 5</a></li>
</ul>
</div>
</div>
<div class="col-lg-12">
<div class="sp sp-bars"></div>
</div>
</div>
</div>
<div class="tab-pane fade" id="friends">
<h5 class="tab-title">Friends <span>102</span></h5>
<ul class="pix-filter">
<li><a title href="#" class="active">All Friends</a></li>
<li><a title href="#">Family Friends</a></li>
<li><a title href="#">Close Friends</a></li>
<li><a title href="#">Mutual Friends</a></li>
</ul>
<div class="row merged-10 col-xs-6">
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-10.jpg" alt></figure>
<span><a href="#" title>Amy Watson</a></span>
<ins>Bz University, Pakistan</ins>
<a href="#" title data-ripple><i class="icofont-star"></i>Unfollow</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-11.jpg" alt></figure>
<span><a href="#" title>Muhammad Khan</a></span>
<ins>Oxford University, UK</ins>
<a href="#" title data-ripple><i class="icofont-star"></i> Unfollow</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-12.jpg" alt></figure>
<span><a href="#" title>Sadia Gill</a></span>
<ins>WB University, USA</ins>
<a href="#" title data-ripple><i class="icofont-star"></i> Unfollow</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-4.jpg" alt></figure>
<span><a href="#" title>Rjapal</a></span>
<ins>Km University, India</ins>
<a href="#" title data-ripple><i class="icofont-star"></i> Unfollow</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-1.jpg" alt></figure>
<span><a href="#" title>Amy watson</a></span>
<ins>Oxford University, UK</ins>
<a href="#" title data-ripple><i class="icofont-star"></i> Unfollow</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-2.jpg" alt></figure>
<span><a href="#" title>Bob Frank</a></span>
<ins>WB University, Canada</ins>
<a href="#" title data-ripple><i class="icofont-star"></i> Unfollow</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-5.jpg" alt></figure>
<span><a href="#" title>Amy Watson</a></span>
<ins>Bz University, Pakistan</ins>
<a href="#" title data-ripple><i class="icofont-star"></i> Unfollow</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-7.jpg" alt></figure>
<span><a href="#" title>Muhammad Khan</a></span>
<ins>Oxford University, UK</ins>
<a href="#" title data-ripple><i class="icofont-star"></i> Unfollow</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-10.jpg" alt></figure>
<span><a href="#" title>Sadia Gill</a></span>
<ins>WB University, USA</ins>
<a href="#" title data-ripple><i class="icofont-star"></i> Unfollow</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-2.jpg" alt></figure>
<span><a href="#" title>Bob Frank</a></span>
<ins>WB University, Canada</ins>
<a href="#" title data-ripple><i class="icofont-star"></i> Unfollow</a>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="friendz">
<figure><img src="images/resources/speak-11.jpg" alt></figure>
<span><a href="#" title>Muhammad Khan</a></span>
<ins>Oxford University, UK</ins>
<a href="#" title data-ripple><i class="icofont-star"></i> Unfollow</a>
</div>
</div>
<div class="col-lg-12">
<div class="sp sp-bars"></div>
</div>
</div>
</div>
<div class="tab-pane fade" id="about">
<div class="row merged20">
<div class="col-lg-8">
<div class="main-wraper">
<h5 class="main-title">Personal</h5>
<div class="info-block-list">
<ul>
<li>Date of Birth: <span>Dec, 17 1980</span></li>
<li>Location: <span>Los Angeles, California</span></li>
<li>Web: <span>www.sample.com</span></li>
<li>Email: <span><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1360727e637f76222120536a7c66617e727a7f3d707c7e">[email&#160;protected]</a></span></li>
<li>Location: <span>Los Angeles, California</span></li>
<li>Occupation: <span>Doctor</span></li>
<li>Location: <span>Los Angeles, California</span></li>
</ul>
</div>
</div>
<div class="main-wraper">
<h5 class="main-title">Interests</h5>
<div class="info-block-list">
<div class="info-block">
<h6>Favourite TV Shows</h6>
<p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy, The Last Windbender, Game of Wars.</p>
</div>
<div class="info-block">
<h6>Favourite Music Bands / Artists</h6>
<p>Iron Maid, DC/AC, Megablow, Kung Fighters, System of a Revenge, Rammstown.</p>
</div>
<div class="info-block">
<h6>Favourite Movies</h6>
<p>The Revengers Saga, The Scarred Wizard and the Fire Crown, Crime Squad, Metal Man, The Dark Rider, Watchers, The Impossible Heist.</p>
</div>
<div class="info-block">
<h6>Favourite Books</h6>
<p>The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</p>
</div>
<div class="info-block">
<h6>Favourite Games</h6>
<p>The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<aside class="sidebar">
<div class="widget">
<h4 class="widget-title">Complete Your Profile</h4>
<span>Complete your profile by filling profile info fields, completing quests & unlocking badges</span>
<div data-progress="tip" class="progress__outer" data-value="0.67">
<div class="progress__inner">82%</div>
</div>
<ul class="prof-complete">
<li><i class="icofont-plus-square"></i> <a href="#" title>Upload Your Picture</a><em>10%</em></li>
<li><i class="icofont-plus-square"></i> <a href="#" title>Your University?</a><em>20%</em></li>
<li><i class="icofont-plus-square"></i> <a href="#" title>Invite to 10+ members</a><em>20%</em></li>
</ul>
</div>
<div class="widget">
<h4 class="widget-title">User stats</h4>
<ul class="user-stat">
<li><i class="icofont-lollipop"></i><span>Last Post <em>2 hours ago</em></span></li>
<li><i class="icofont-spotify"></i><span>Last comment <em>6 hours ago</em></span></li>
<li><i class="icofont-like"></i><span>Most Liked Post<em>540 Likes</em></span></li>
<li><i class="icofont-user-alt-4"></i><span>Last Friend Added <em>2 days ago</em></span></li>
</ul>
</div>
</aside>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<figure class="bottom-mockup"><img alt src="/images/footer.png"></figure>

<div class="bottombar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<span class>&copy; copyright All rights reserved by GetForums 2024</span>
</div>
</div>
</div>
</div>
<div class="wraper-invite">
<div class="popup">
<span class="popup-closed"><i class="icofont-close"></i></span>
<div class="popup-meta">
<div class="popup-head">
<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></i> Invite Colleagues</h5>
</div>
<div class="invitation-meta">
<p>
Enter an email address to invite a colleague or co-author to join you on socimo. They will receive an email and, in some cases, up to two reminders.
</p>
<form method="post" class="c-form">
<input type="text" placeholder="Enter Email">
<button type="submit" class="main-btn">Invite</button>
</form>
</div>
</div>
</div>
</div>
<div class="popup-wraper">
<div class="popup">
<span class="popup-closed"><i class="icofont-close"></i></span>
<div class="popup-meta">
<div class="popup-head">
<h5><i>
<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" /></svg></i> Send Message</h5>
</div>
</div>
</div>
</div>



<div class="post-new-popup">
<div class="popup" style="width: 800px;">
<span class="popup-closed"><i class="icofont-close"></i></span>
<div class="popup-meta">
<div class="popup-head">
<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></i>Create New Post</h5>
</div>
<div class="post-new">
<div class="post-newmeta">
<ul class="post-categoroes">
<li><i class="icofont-camera"></i> Photo / Video</li>
<li><i class="icofont-google-map"></i> Post Location</li>
<li><i class="icofont-file-gif"></i> Post Gif</li>
<li><i class="icofont-ui-tag"></i> Tag to Friend</li>
<li><i class="icofont-users"></i> Share in Group</li>
<li><i class="icofont-link"></i> Share Link</li>
<li><i class="icofont-video-cam"></i> Go Live</li>
<li><i class="icofont-sale-discount"></i> Post Online Course</li>
<li><i class="icofont-read-book"></i> Post A Book</li>
<li><i class="icofont-globe"></i> Post an Ad</li>
</ul>
<form method="post" class="dropzone" action="https://wpkixx.com/upload-target">
<div class="fallback">
<input name="file" type="file" multiple />
</div>
</form>
</div>
<form method="post" class="c-form">
<textarea id="emojionearea1" placeholder="What's On Your Mind?"></textarea>
<div class="activity-post">
<div class="checkbox">
<input type="checkbox" id="checkbox" checked>
<label for="checkbox"><span>Activity Feed</span></label>
</div>
<div class="checkbox">
<input type="checkbox" id="checkbox2" checked>
<label for="checkbox2"><span>My Story</span></label>
</div>
</div>
<div class="select-box">
<div class="select-box__current" tabindex="1">
<div class="select-box__value"><input class="select-box__input" type="radio" id="0" value="1" name="Ben" checked="checked" />
<p class="select-box__input-text"><i class="icofont-globe-alt"></i> Public</p>
</div>
<div class="select-box__value"><input class="select-box__input" type="radio" id="1" value="2" name="Ben" checked="checked" />
<p class="select-box__input-text"><i class="icofont-lock"></i> Private</p>
</div>
<div class="select-box__value"><input class="select-box__input" type="radio" id="2" value="3" name="Ben" checked="checked" />
<p class="select-box__input-text"><i class="icofont-user"></i> Specific Friend</p>
</div>
<div class="select-box__value"><input class="select-box__input" type="radio" id="3" value="4" name="Ben" checked="checked" />
<p class="select-box__input-text"><i class="icofont-star"></i> Only Friends</p>
</div>
<div class="select-box__value"><input class="select-box__input" type="radio" id="4" value="5" name="Ben" checked="checked" />
<p class="select-box__input-text"><i class="icofont-users-alt-3"></i> Joined Groups</p>
</div>
<img class="select-box__icon" src="images/arrow-down.svg" alt="Arrow Icon" aria-hidden="true" />
</div>
<ul class="select-box__list">
<li><label class="select-box__option" for="0"><i class="icofont-globe-alt"></i> Public</label></li>
<li><label class="select-box__option" for="1"><i class="icofont-lock"></i> Private</label></li>
<li><label class="select-box__option" for="2"><i class="icofont-user"></i> Specific Friend</label></li>
<li><label class="select-box__option" for="3"><i class="icofont-star"></i> Only Friends</label></li>
<li><label class="select-box__option" for="4"><i class="icofont-users-alt-3"></i> Joined Groups</label></li>
</ul>
</div>
<input class="schedule-btn" type="text" id="datetimepicker" readonly>
<input type="text" placeholder="https://www.youtube.com/watch?v=vgvsuiFlA-Y&amp;t=56s">
<button type="submit" class="main-btn">Publish</button>
</form>
</div>
</div>
</div>
</div>



{{-- <div class="share-wraper">
<div class="share-options">
<span class="close-btn"><i class="icofont-close-circled"></i></span>
<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg></i>Share To!</h5>
<form method="post">
<textarea placeholder="Write Something"></textarea>
</form>
<ul>
<li><a title href="#">Your Timeline</a></li>
<li class="friends"><a title href="#">To Friends</a></li>
<li class="socialz"><a class="active" title href="#">Social Media</a></li>
</ul>
<div style="display: block;" class="social-media">
<ul>
<li><a title href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
<li><a title href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
<li><a title href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
<li><a title href="#" class="pinterest"><i class="icofont-pinterest"></i></a></li>
<li><a title href="#" class="youtube"><i class="icofont-youtube"></i></a></li>
<li><a title href="#" class="dribble"><i class="icofont-dribbble"></i></a></li>
<li><a title href="#" class="behance"><i class="icofont-behance-original"></i></a></li>
</ul>
</div>
<div style="display: none;" class="friends-to">
<div class="follow-men">
<figure><img class="mCS_img_loaded" src="images/resources/user1.jpg" alt></figure>
<div class="follow-meta">
<h5><a href="#" title>Jack Carter</a></h5>
<span>family member</span>
</div>
<a href="#" title>Share</a>
</div>
<div class="follow-men">
<figure><img class="mCS_img_loaded" src="images/resources/user2.jpg" alt></figure>
<div class="follow-meta">
<h5><a href="#" title>Xang Ching</a></h5>
<span>Close Friend</span>
</div>
<a href="#" title>Share</a>
</div>
<div class="follow-men">
<figure><img class="mCS_img_loaded" src="images/resources/user3.jpg" alt></figure>
<div class="follow-meta">
<h5><a href="#" title>Emma Watson</a></h5>
<span>Matul Friend</span>
</div>
<a href="#" title>Share</a>
</div>
</div>
<button type="submit" class="main-btn">Publish</button>
</div>
</div> --}}

{{-- <div class="chat-box">
<div class="chat-head">
<h4>New Messages</h4>
<span class="clozed"><i class="icofont-close-circled"></i></span>
<form Method="post">
<input type="text" placeholder="To..">
</form>
</div>
<div class="user-tabs">
<ul class="nav nav-tabs">
<li class="nav-item"><a class="active" href="#link1" data-toggle="tab">All Friends</a></li>
<li class="nav-item"><a class href="#link2" data-toggle="tab">Active</a><em>3</em></li>
<li class="nav-item"><a class href="#link3" data-toggle="tab">Groups</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active fade show " id="link1">
<div class="friend">
<a href="#" title>
<figure>
<img src="images/resources/user1.jpg" alt>
<span class="status online"></span>
</figure>
<span>Oliver</span>
<i class><img src="images/resources/user1.jpg" alt></i>
</a>
<a href="#" title>
<figure>
<img src="images/resources/user2.jpg" alt>
<span class="status away"></span>
</figure>
<span>Amelia</span>
<i class="icofont-check-circled"></i>
</a>
<a href="#" title>
<figure>
<img src="images/resources/user3.jpg" alt>
<span class="status offline"></span>
</figure>
<span>George</span>
<i class><img src="images/resources/user3.jpg" alt></i>
</a>
<a href="#" title>
<figure>
<img src="images/resources/user4.jpg" alt>
<span class="status online"></span>
</figure>
<span>Jacob</span>
<i class="icofont-check-circled"></i>
</a>
<a href="#" title>
<figure>
<img src="images/resources/user5.jpg" alt>
<span class="status away"></span>
</figure>
<span>Poppy</span>
<i class="icofont-check-circled"></i>
</a>
<a href="#" title>
<figure>
<img src="images/resources/user6.jpg" alt>
<span class="status online"></span>
</figure>
<span>Sophia</span>
<i class><img src="images/resources/user6.jpg" alt></i>
</a>
<a href="#" title>
<figure>
<img src="images/resources/user7.jpg" alt>
<span class="status away"></span>
</figure>
<span>Leo king</span>
<i class><img src="images/resources/user7.jpg" alt></i>
</a>
</div>
</div>
<div class="tab-pane fade" id="link2">
<div class="friend">
<a href="#" title>
<figure>
<img src="images/resources/user1.jpg" alt>
<span class="status online"></span>
</figure>
<span>Samu Jane</span>
<i class><img src="images/resources/user1.jpg" alt></i>
</a>
<a href="#" title>
<figure>
<img src="images/resources/user6.jpg" alt>
<span class="status online"></span>
</figure>
<span>Tina Mark</span>
<i class><img src="images/resources/user6.jpg" alt></i>
</a>
<a href="#" title>
<figure>
<img src="images/resources/user7.jpg" alt>
<span class="status online"></span>
</figure>
<span>Ak William</span>
<i class><img src="images/resources/user7.jpg" alt></i>
</a>
</div>
</div>
<div class="tab-pane fade" id="link3">
<div class="friend">
<a href="#" title>
<figure class="group-chat">
<img src="images/resources/user5.jpg" alt>
<img class="two" src="images/resources/user3.jpg" alt>
<span class="status online"></span>
</figure>
<span>Boys World</span>
<i class="icofont-check-circled"></i>
</a>
<a href="#" title>
<figure class="group-chat">
<img src="images/resources/user2.jpg" alt>
<img class="two" src="images/resources/user3.jpg" alt>
<span class="status online"></span>
</figure>
<span>KK university Fellows</span>
<i class="icofont-check-circled"></i>
</a>
<a href="#" title>
<figure class="group-chat">
<img src="images/resources/user3.jpg" alt>
<img class="two" src="images/resources/user2.jpg" alt>
<span class="status away"></span>
</figure>
<span>Education World</span>
<i class="icofont-check-circled"></i>
</a>
</div>
</div>
</div>
</div>
<div class="chat-card">
<div class="chat-card-head">
<img src="images/resources/user13.jpg" alt>
<h6>George Floyd</h6>
<div class="frnd-opt">
<div class="more">
<div class="more-post-optns">
<i class>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></i>
<ul>
<li>
<i class="icofont-pen-alt-1"></i>Edit Post
<span>Edit This Post within a Hour</span>
</li>
<li>
<i class="icofont-ban"></i>Hide Chat
<span>Hide This Post</span>
</li>
<li>
<i class="icofont-ui-delete"></i>Delete Chat
<span>If inappropriate Post By Mistake</span>
</li>
<li>
<i class="icofont-flag"></i>Report
<span>Inappropriate Chat</span>
</li>
</ul>
</div>
</div>
<span class="close-mesage"><i class="icofont-close"></i></span>
</div>
</div>
<div class="chat-list">
<ul>
<li class="me">
<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt></div>
<div class="notification-event">
<div class="chat-message-item">
<figure><img src="images/resources/album5.jpg" alt></figure>
<div class="caption">4.5kb <i class="icofont-download" title="Download"></i></div>
</div>
<span class="notification-date">
<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
<i><img src="images/d-tick.png" alt></i>
</span>
</div>
</li>
<li class="me">
<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt></div>
<div class="notification-event">
<span class="chat-message-item">
Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
</span>
<span class="notification-date">
<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
<i><img src="images/d-tick.png" alt></i>
</span>
</div>
</li>
<li class="you">
<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt></div>
<div class="notification-event">
<span class="chat-message-item">
Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
</span>
<span class="notification-date">
<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
<i><img src="images/d-tick.png" alt></i>
</span>
</div>
</li>
<li class="me">
<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt></div>
<div class="notification-event">
<span class="chat-message-item">
Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
</span>
<span class="notification-date">
<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>
<i><img src="images/d-tick.png" alt></i>
</span>
</div>
</li>
</ul>
<form class="text-box">
<textarea placeholder="Write Mesage..."></textarea>
<div class="add-smiles">
<span><img src="images/smiles/happy-3.png" alt></span>
</div>
<div class="smiles-bunch">
<i><img src="images/smiles/thumb.png" alt></i>
<i><img src="images/smiles/angry-1.png" alt></i>
<i><img src="images/smiles/angry.png" alt></i>
<i><img src="images/smiles/bored-1.png" alt></i>
<i><img src="images/smiles/confused-1.png" alt></i>
<i><img src="images/smiles/wink.png" alt></i>
<i><img src="images/smiles/weep.png" alt></i>
<i><img src="images/smiles/tongue-out.png" alt></i>
<i><img src="images/smiles/suspicious.png" alt></i>
<i><img src="images/smiles/crying-1.png" alt></i>
<i><img src="images/smiles/crying.png" alt></i>
<i><img src="images/smiles/embarrassed.png" alt></i>
<i><img src="images/smiles/emoticons.png" alt></i>
<i><img src="images/smiles/happy-2.png" alt></i>
</div>
<button type="submit"><i class="icofont-paper-plane"></i></button>
</form>
</div>
</div>
</div> --}}

{{-- <div class="createroom-popup">
<div class="popup">
<span class="popup-closed"><i class="icofont-close"></i></span>
<div class="popup-meta">
<div class="popup-head text-center">
<h5 class="only-icon"><i class="icofont-video-cam"></i></h5>
</div>
<div class="room-meta">
<h4>Create Your Room</h4>
<ul>
<li>
<i class="icofont-hand"></i>
<div>
<h6>Room Activity</h6>
<span>Jack's Room</span>
</div>
<div class="checkbox">
<input type="checkbox" id="checkbox3">
<label for="checkbox3"></label>
</div>
</li>
<li>
<i class="icofont-clock-time"></i>
<div>
<h6>Start Time</h6>
<span>Now</span>
</div>
<div class="checkbox">
<input type="checkbox" id="checkbox4">
<label for="checkbox4"></label>
</div>
</li>
<li>
<i class="icofont-users-alt-4"></i>
<div>
<h6>Invite to All Friends</h6>
<span>Allow All friends to see this room</span>
</div>
<div class="checkbox">
<input type="checkbox" id="checkbox5">
<label for="checkbox5"></label>
</div>
</li>
</ul>
<span>Your room isn't visible until you invite people after you've created it.</span>
<a href="#" title class="main-btn full-width">Create Room</a>
</div>
</div>
</div>
</div> --}}

<div class="modal fade" id="img-comt">
<div class="modal-dialog">
<div class="modal-content">

{{-- <div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
</div> --}}

{{-- <div class="modal-body">
<div class="row merged">
<div class="col-lg-9">
<div class="pop-image">
<div class="pop-item">
<div class="action-block">
<a class="action-button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" /><line x1="7" y1="7" x2="7.01" y2="7" /></svg>
</a>
<a class="action-button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" /><circle cx="12" cy="10" r="3" /></svg>
</a>
<a class="action-button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19" /><polyline points="19 12 12 19 5 12" /></svg>
</a>
<a class="action-button">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1" /><circle cx="12" cy="5" r="1" /><circle cx="12" cy="19" r="1" /></svg>
</a>
</div>
<figure><img src="images/resources/blog-detail.jpg" alt></figure>
<div class="stat-tools">
<div class="box">
<div class="Like"><a class="Like__link"><i class="icofont-like"></i> Like</a>
<div class="Emojis">
<div class="Emoji Emoji--like">
<div class="icon icon--like"></div>
</div>
<div class="Emoji Emoji--love">
<div class="icon icon--heart"></div>
</div>
<div class="Emoji Emoji--haha">
<div class="icon icon--haha"></div>
</div>
<div class="Emoji Emoji--wow">
<div class="icon icon--wow"></div>
</div>
<div class="Emoji Emoji--sad">
<div class="icon icon--sad"></div>
</div>
<div class="Emoji Emoji--angry">
<div class="icon icon--angry"></div>
</div>
</div>
</div>
</div>
<div class="box">
<div class="Emojis">
<div class="Emoji Emoji--like">
<div class="icon icon--like"></div>
</div>
<div class="Emoji Emoji--love">
<div class="icon icon--heart"></div>
</div>
<div class="Emoji Emoji--haha">
<div class="icon icon--haha"></div>
</div>
<div class="Emoji Emoji--wow">
<div class="icon icon--wow"></div>
</div>
<div class="Emoji Emoji--sad">
<div class="icon icon--sad"></div>
</div>
<div class="Emoji Emoji--angry">
<div class="icon icon--angry"></div>
</div>
</div>
</div>
<a title href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a>
<div class="emoji-state">
<div class="popover_wrapper">
<a class="popover_title" href="#" title><img alt src="images/smiles/thumb.png"></a>
<div class="popover_content">
<span><img alt src="images/smiles/thumb.png"> Likes</span>
<ul class="namelist">
<li>Jhon Doe</li>
<li>Amara Sin</li>
<li>Sarah K.</li>
<li><span>20+ more</span></li>
</ul>
</div>
</div>
<div class="popover_wrapper">
<a class="popover_title" href="#" title><img alt src="images/smiles/heart.png"></a>
<div class="popover_content">
<span><img alt src="images/smiles/heart.png"> Love</span>
<ul class="namelist">
<li>Amara Sin</li>
<li>Jhon Doe</li>
<li><span>10+ more</span></li>
</ul>
</div>
</div>
<div class="popover_wrapper">
<a class="popover_title" href="#" title><img alt src="images/smiles/smile.png"></a>
<div class="popover_content">
<span><img alt src="images/smiles/smile.png"> Happy</span>
<ul class="namelist">
<li>Sarah K.</li>
<li>Jhon Doe</li>
<li>Amara Sin</li>
<li><span>100+ more</span></li>
</ul>
</div>
</div>
<div class="popover_wrapper">
<a class="popover_title" href="#" title><img alt src="images/smiles/weep.png"></a>
<div class="popover_content">
<span><img alt src="images/smiles/weep.png"> Dislike</span>
<ul class="namelist">
<li>Danial Carbal</li>
<li>Amara Sin</li>
<li>Sarah K.</li>
<li><span>15+ more</span></li>
</ul>
</div>
</div>
<p>10+</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="commentbar">
<div class="user">
<figure><img src="images/resources/user1.jpg" alt></figure>
<div class="user-information">
<h4><a href="#" title>Danile Walker</a></h4>
<span>2 hours ago</span>
</div>
<a href="#" title="Follow" data-ripple>Follow</a>
</div>
<div class="we-video-info">
<ul>
<li>
<span title="Comments" class="liked">
<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg></i>
<ins>52</ins>
</span>
</li>
<li>
<span title="Comments" class="comment">
<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></i>
<ins>52</ins>
</span>
</li>
<li>
<span>
<a title="Share" href="#" class>
<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
</a>
<ins>20</ins>
</span>
</li>
</ul>
<div class="users-thumb-list">
<a href="#" title data-toggle="tooltip" data-original-title="Anderw">
<img src="images/resources/userlist-1.jpg" alt>
</a>
<a href="#" title data-toggle="tooltip" data-original-title="frank">
<img src="images/resources/userlist-2.jpg" alt>
</a>
<a href="#" title data-toggle="tooltip" data-original-title="Sara">
<img src="images/resources/userlist-1.jpg" alt>
</a>
<a href="#" title data-toggle="tooltip" data-original-title="Amy">
<img src="images/resources/userlist-2.jpg" alt>
</a>
<span><strong>You</strong>, <b>Sarah</b> and <a title href="#">24+ more</a> liked</span>
</div>
</div>
<div class="new-comment" style="display: block;">
<form method="post">
<input type="text" placeholder="write comment">
<button type="submit"><i class="icofont-paper-plane"></i></button>
</form>
<div class="comments-area">
<ul>
<li>
<figure><img alt src="images/resources/user1.jpg"></figure>
<div class="commenter">
<h5><a title href="#">Jack Carter</a></h5>
<span>2 hours ago</span>
<p>
i think that some how, we learn who we really are and then live with that decision, great post!
</p>
<span>you can view the more detail via link</span>
<a title href="#">https://www.youtube.com/watch?v=HpZgwHU1GcI</a>
</div>
<a title="Like" href="#"><i class="icofont-heart"></i></a>
<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
</li>
<li>
<figure><img alt src="images/resources/user2.jpg"></figure>
<div class="commenter">
<h5><a title href="#">Ching xang</a></h5>
<span>2 hours ago</span>
<p>
i think that some how, we learn who we really are and then live with that decision, great post!
</p>
</div>
<a title="Like" href="#"><i class="icofont-heart"></i></a>
<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
</li>
<li>
<figure><img alt src="images/resources/user3.jpg"></figure>
<div class="commenter">
<h5><a title href="#">Danial Comb</a></h5>
<span>2 hours ago</span>
<p>
i think that some how, we learn who we really are and then live with that decision, great post!
</p>
</div>
<a title="Like" href="#"><i class="icofont-heart"></i></a>
<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
</li>
<li>
<figure><img alt src="images/resources/user4.jpg"></figure>
<div class="commenter">
<h5><a title href="#">Jack Carter</a></h5>
<span>2 hours ago</span>
<p>
i think that some how, we learn who we really are and then live with that decision, great post!
</p>
</div>
<a title="Like" href="#"><i class="icofont-heart"></i></a>
<a title="Reply" href="#" class="reply-coment"><i class="icofont-reply"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> --}}

</div>





    <div class="modal" tabindex="-1" id="tambahModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>ADD CONTENT</h6>
                </div>
                <div class="modal-body">
                    {{-- <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                    <div class="container-fluid">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-8">
                        <h4 class="main-title">User Profile <i class="icofont-pen-alt-1"></i></h4>
                        <div class="row merged20 mb-4">
                        <div class="col-lg-4">
                        <div class="d-widget text-center" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);">
                        <div class="user-avatar-edit">
                        <figure>
                        @if ($user->bgprofil)
                            <img src="{{ asset('storage/' . $user->bgprofil) }}" alt="">
                        @else
                            <img id="preview-bgimage" src="{{ asset('images/LOGO/bguser.jpg') }}" alt="Preview Image">
                        @endif
                        </figure>
                        <div class="fileupload">
                        <span class="btn-text">edit</span>
                        <input type="file" class="upload" name="bgprofile" id="bgprofile-input">
                    </div>
                        </div>
                        <div class="user-dp-edit">
                        <figure>
                        @if ($user->profil)
                            <img src="{{ asset('storage/' . $user->profil) }}" alt="">
                        @else
                            <img id="preview-image" src="{{ asset('images/LOGO/profil.jpeg') }}" alt>
                        @endif
                        <div class="fileupload">
                        <span class="btn-text"><i class="icofont-camera"></i></span>
                        <input type="file" class="upload" name="profile" id="profile-input">
                    </div>
                        </figure>
                        <div class="users-name">
                            <h5 style="text-align: center;">
                                <input type="text" id="name" name="name" value="{{ $user->name }}" style="border: none; text-align: center;  margin-bottom:-20px;">
                            </h5>
                        <span style="text-align: center;">
                            <input type="text" id="email" name="email" value="{{ $user->email }}" style="border: none; text-align: center; margin-bottom:-20px;">
                        </span>
                        </div>
                        </div>
                        <ul class="folowerss">
                        <li><span>Posts</span> <i>345</i></li>
                        </ul>
                        </div>

                        </div>
                        <div class="col-lg-8" >
                            <div class="d-widget mt-6" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);">
                                <div class="d-widget-title"><h5>Social Links</h5></div>
                                <div class="social-links">
                                <i class="icofont-facebook"></i>
                                <input type="text" name="link_fb" placeholder="Facebook Profile" value="{{ old('link_fb', $user->link_fb) }}">
                                <em>Add your Facebook username (e.g. johndoe).</em>
                                </div>
                                <div class="social-links">
                                <i class="icofont-instagram"></i>
                                <input type="text" name="link_ig" placeholder="Instagram Profile" value="{{ old('link_ig', $user->link_ig) }}">
                                <em>Add your Facebook username (e.g. johndoe).</em>
                                </div>
                                <div class="social-links">
                                <i class="icofont-twitter"></i>
                                <input type="text" name="link_twt" placeholder="Twitter Profile" value="{{ old('link_twt', $user->link_twt) }}">
                                <em>Add your Facebook username (e.g. johndoe).</em>
                                </div>
                                </div>
                                <button type="submit" title class="button primary circle mt-3" style="margin-bottom: -5px; margin-right: auto;">Save Changes</button>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                </form> --}}
                </div>
            </div>
        </div>
    </div>

{{--
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('profile-input').addEventListener('change', function() {
            const file = this.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-image').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(file);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('bgprofile-input').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-bgimage').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

<script data-cfasync="true" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="dd66549c18016e84d7b048a6-|49" defer></script><script>(function(){var js = "window['__CF$cv$params']={r:'85d70aca4bd2836b',t:'MTcwOTI3NDAzNy4wNDIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script>
</body>
</html>
