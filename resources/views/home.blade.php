<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums | Social Media </title>
<link rel="icon" href="images/LOGO/logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="socimo/css/main.min.css">
<link rel="stylesheet" href="socimo/css/style.css">
<link rel="stylesheet" href="socimo/css/color.css">
<link rel="stylesheet" href="socimo/css/responsive.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .large-label {
        font-size: 16px;
    }
    .emoji-state {
    position: relative;
    top: -20px;
    }
    .post-new-popup {
        display: none;
    }
    .like {
            display: inline-block;
            cursor: pointer;
        }

    .like i {
            color: #000;
        }
</style>
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

<ul class="web-elements">
<li>
 @if(auth()->check())
<div class="user-dp">
    <a href="{{ route('profile.edit', auth()->user()->id) }}" title="Edit Profile">
        @if(auth()->user()->profil)
            <img src="{{ asset('storage/' . auth()->user()->profil) }}" alt="{{ auth()->user()->name }} Profile">
        @else
            <img src="{{ asset('images/LOGO/profil.jpeg') }}" alt="{{ auth()->user()->name }} Profile">
        @endif
    </a>
    <div class="name">
        <h4>{{ auth()->user()->name }}</h4>
    </div>
</div>
@endif
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
    <form  action="{{ route('logout') }}" method="POST" >
        @csrf
        <button class="btn btn-outline-primary w-100" onclick="showLogoutAlert()" >
            <i class="icofont-power"></i> Logout
        </button>
        </script>
    </form>
</li>
<li>

</li>
</ul>
</div>
</header>

<nav class="sidebar">
<ul class="menu-slide">
<li class="active menu-item-has-children">
<a class href="#" title>
<i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /><polyline points="9 22 9 12 15 12 15 22" /></svg></i> Home
</a>
<ul class="submenu">
<li><a href="index-2.html" title>Newsfeed</a></li>
<li><a href="company-home.html" title>Company Home</a></li>
<li><a href="profile-page2.html" title>User Profile</a></li>
<li><a href="profile.html" title>Student User Profile</a></li>
<li><a href="groups.html" title>Groups</a></li>
<li><a href="group-detail.html" title>Group Detail</a></li>
<li><a href="post-detail.html" title>Social Post Detail</a></li>
<li><a href="messages.html" title>Chat/Messages</a></li>
<li><a href="notifications.html" title>Notificatioins</a></li>
<li><a href="search-result.html" title>Search Result</a></li>
</ul>
</li>
<li class="menu-item-has-children">
<a class href="#" title>
<i class><svg id="ab7" class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg></i> Features
</a>
<ul class="submenu">
<li><a href="videos.html" title>Videos</a></li>
<li><a href="live-stream.html" title>Live Stream</a></li>
<li><a href="event-page.html" title>Events Page</a></li>
<li><a href="event-detail.html" title>Event Detail</a></li>
<li><a href="Q-A.html" title>QA</a></li>
<li><a href="Q-detail.html" title>QA Detail</a></li>
<li><a href="help-faq.html" title>Support Help</a></li>
<li><a href="help-faq-detail.html" title>Support Detail</a></li>
</ul>
</li>
<li class="menu-item-has-children">
<a class href="#" title>
<i class>
<svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></i> Market Place
</a>
<ul class="submenu">
<li><a href="books.html" title>Books</a></li>
<li><a href="book-detail.html" title>Books Detail</a></li>
<li><a href="courses.html" title>Course</a></li>
<li><a href="course-detail.html" title>course Detail</a></li>
<li><a href="add-new-course.html" title>Add New Course</a></li>
<li><a href="product-cart.html" title>Cart Page</a></li>
<li><a href="product-checkout.html" title>Checkout</a></li>
<li><a href="add-credits.html" title>Add Credit</a></li>
<li><a href="pay-out.html" title>Payouts</a></li>
<li><a href="price-plan.html" title>Pricing Plans</a></li>
<li><a href="invoice.html" title>Invoice</a></li>
<li><a href="thank-you.html" title>Thank you Page</a></li>
</ul>
</li>
<li class="menu-item-has-children">
<a class href="#" title>
<i class><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
</i> Blogs
</a>
<ul class="submenu">
<li><a href="blog.html" title>Blog</a></li>
<li><a href="blog-detail.html" title>Blog Detail</a></li>
</ul>
</li>
<li class="menu-item-has-children">
<a class href="#" title>
<i><svg id="ab8" class="feather feather-file" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" /><polyline points="13 2 13 9 20 9" /></svg></i> Featured Pages
</a>
<ul class="submenu">
<li><a href="404.html" title>Error 404</a></li>
<li><a href="coming-soon.html" title>Coming Soon</a></li>
<li><a href="send-feedback.html" title>Send Feedback</a></li>
<li><a href="badges.html" title>Badges</a></li>
<li><a href="thank-you.html" title>Thank You</a></li>
</ul>
</li>
<li class="menu-item-has-children">
<a class href="#" title>
<i class>
<svg id="ab9" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></i> Authentications
</a>
<ul class="submenu">
<li><a href="sign-in.html" title>Sign In</a></li>
<li><a href="signup.html" title>Sign Up</a></li>
<li><a href="forgot-password.html" title>Forgot Password</a></li>
</ul>
</li>
<li class>
<a class href="about-university.html" title>
<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle r="4" cy="7" cx="9" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg></i> University Profile
</a>
</li>
<li class>
<a class href="messages.html" title>
<i class>
<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg" id="ab2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" style="stroke-dasharray: 68, 88; stroke-dashoffset: 0;" /></svg></i> Live Chat
</a>
</li>
<li class>
<a class href="privacy-n-policy.html" title><i class>
<svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></i> Privacy Polices
</a>
</li>
<li class>
<a class href="settings.html" title><i class>
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></i> Web Settings
</a>
</li>
<li class="menu-item-has-children">
<a class="#" href="#" title>
<i class>
<svg id="team" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></i> Development Tools
</a>
<ul class="submenu">
<li><a href="widgets.html" title>Widgets Collection</a></li>
<li><a href="development-component.html" title>Web Component</a></li>
<li><a href="development-elements.html" title>Web Elements</a></li>
<li><a href="loader-spiners.html" title>Loader Spiners</a></li>
</ul>
</li>
</ul>
</nav>

<section>
<div class="gap">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div id="page-contents" class="row merged20">
<div class="col-lg-3">
<aside class="sidebar static left">
<div class="widget whitish low-opacity">
<img src="images/time-clock.png" alt>
<div class="bg-image" style="background-image: url(images/resources/time-bg.jpg)"></div>
<div class="date-time">
<div class="realtime">
<span id="hours">00</span>
<span id="point">:</span>
<span id="min">00</span>
</div>
<span id="date"></span>
</div>
</div>

</aside>
</div>

<div class="col-lg-6">

    <div class="main-wraper">
        <span class="new-title">Create New Post</span>
        <div class="text-center">
            <a href="#" class="btn btn-primary rounded-circle" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahModal" type="button">
                <i class="icofont-plus text-white"></i>
            </a>
        </div>
        <div class="new-post">
        <form method="post">
        </form>

        </div>
        </div>

@if ($content->isEmpty())
    <center>
        <img src="{{ asset('images/LOGO/datakosong.png') }}" alt="" style="width: 60%;">
    </center>
@else

@foreach ($content as $contents)

<div class="main-wraper">
    <div class="user-post">
        <div class="friend-info">
            <figure>
                <em>
                    <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>
<img alt src="images/LOGO/logo.png">
</figure>
<div class="friend-name">
    <h6>{{ $contents->user->name }}</h6>
    <span><i class="icofont-globe"></i> published: {{ \Carbon\Carbon::parse($contents->created_at)->isoFormat('D MMMM YYYY') }}</span>
</div>
<div class="post-meta">
    <figure>
        <a data-toggle="#" data-target="#" href="#">
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
        @if($likes && $likes->user_id == Auth::user()->id && $likes->content_id == $contents->id)
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
            <button type="submit" class="" style="
            background: #eae9ee;
            border-radius: 4px;
            color: #82828e;
            display: inline-block;
            font-size: 13px;
            padding: 5px 20px;
            vertical-align: middle;
            transition: all 0.2s linear 0s;
             }"><i class="icofont-like"></i> Like</button>        </form>
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
                <button type="submit" class="" style="
                background: #eae9ee;
                border-radius: 4px;
                color: #82828e;
                display: inline-block;
                font-size: 13px;
                padding: 5px 20px;
                vertical-align: middle;
                transition: all 0.2s linear 0s;
                 }"><i class="icofont-like"></i> Like</button>
            </form>
        @endif
    </div>
</div>

<a title href="{{ route('content.comment', $contents->id) }}" class="comment-to"><i class="icofont-comment"></i> Comment</a>
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
{{-- @empty

<center>
    <img src="images/LOGO/datakosong.png" alt="" style="width: 60%;">
</center> --}}
@endforeach
@endif



{{-- <div class="loadmore">
    <div class="sp sp-bars"></div>
    <a href="#" title data-ripple>Load More..</a>
    </div> --}}
    </div>
    <div class="col-lg-3">
        <div class="main-wraper">
        <span class="new-title">Search Post</span>
        <form id="searchForm" action="{{ route('home.search') }}" method="get">
            @csrf
        <div class="d-flex justify-content-between align-items-center">

        <div class="new-post">
            <div class="input-group">
                <input type="search" name="search" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-primary" style="background-color: #2ea8dc; border:none;"><i class="icofont-search"></i></button>
            </div>
        </div>
    </div>
</form>
</div>


    <aside class="sidebar static right">
        <div class="widget">
            <form action="{{ route('home.filter') }}" method="GET">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="widget-title"><b>Category</b></h4>
                    <button type="submit" class="btn btn-primary" style="background-color: #2ea8dc; border:none;">Filter</button>
                </div>
                @php
                  $kategori_ids = isset($kategori_ids) ? $kategori_ids : [];
                @endphp
                @foreach ($kategori as $key => $category)
                    <input type="checkbox" id="category{{ $category->id }}" name="kategori_id[]" value="{{ $category->id }}" @if(in_array($category->id, (array)$kategori_ids)) checked @endif>
                    <label for="category{{ $category->id }}" class="large-label">
                        {{ $category->kategori }}
                    </label><br>
                @endforeach
            </form>
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
</section>
<figure class="bottom-mockup"><img src="images/footer.png" alt></figure>
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
<div class="send-message">
<form method="post" class="c-form">
<input type="text" placeholder="Enter Name..">
<input type="text" placeholder="Subject">
<textarea placeholder="Write Message"></textarea>
<div class="uploadimage">
<i class="icofont-file-jpg"></i>
<label class="fileContainer">
<input type="file">Attach file
</label>
</div>
<button type="submit" class="main-btn">Send</button>
</form>
</div>
</div>
</div>
</div>
<div class="side-slide">
<span class="popup-closed"><i class="icofont-close"></i></span>
<div class="slide-meta">
<ul class="nav nav-tabs slide-btns">
<li class="nav-item"><a class="active" href="#messages" data-toggle="tab">Messages</a></li>
<li class="nav-item"><a class href="#notifications" data-toggle="tab">Notifications</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active fade show" id="messages">
<h4><i class="icofont-envelope"></i> messages</h4>
<a href="#" class="send-mesg" title="New Message" data-toggle="tooltip"><i class="icofont-edit"></i></a>
<ul class="new-messages">
<li>
<figure><img src="images/resources/user1.jpg" alt></figure>
<div class="mesg-info">
<span>Ibrahim Ahmed</span>
<a href="#" title>Helo dear i wanna talk to you</a>
</div>
</li>
<li>
<figure><img src="images/resources/user2.jpg" alt></figure>
<div class="mesg-info">
<span>Fatima J.</span>
<a href="#" title>Helo dear i wanna talk to you</a>
</div>
</li>
<li>
<figure><img src="images/resources/user3.jpg" alt></figure>
<div class="mesg-info">
<span>Fawad Ahmed</span>
<a href="#" title>Helo dear i wanna talk to you</a>
</div>
</li>
<li>
<figure><img src="images/resources/user4.jpg" alt></figure>
<div class="mesg-info">
<span>Saim Turan</span>
<a href="#" title>Helo dear i wanna talk to you</a>
</div>
</li>
<li>
<figure><img src="images/resources/user5.jpg" alt></figure>
<div class="mesg-info">
<span>Alis wells</span>
<a href="#" title>Helo dear i wanna talk to you</a>
</div>
</li>
</ul>
<a href="#" title class="main-btn" data-ripple>view all</a>
</div>
<div class="tab-pane fade" id="notifications">
<h4><i class="icofont-bell-alt"></i> notifications</h4>
<ul class="notificationz">
<li>
<figure><img src="images/resources/user5.jpg" alt></figure>
<div class="mesg-info">
<span>Alis wells</span>
<a href="#" title>recommend your post</a>
</div>
</li>
<li>
<figure><img src="images/resources/user4.jpg" alt></figure>
<div class="mesg-info">
<span>Alis wells</span>
<a href="#" title>share your post <strong>a good time today!</strong></a>
</div>
</li>
<li>
<figure><img src="images/resources/user2.jpg" alt></figure>
<div class="mesg-info">
<span>Alis wells</span>
<a href="#" title>recommend your post</a>
</div>
</li>
<li>
<figure><img src="images/resources/user1.jpg" alt></figure>
<div class="mesg-info">
<span>Alis wells</span>
<a href="#" title>share your post <strong>a good time today!</strong></a>
</div>
</li>
<li>
<figure><img src="images/resources/user3.jpg" alt></figure>
<div class="mesg-info">
<span>Alis wells</span>
<a href="#" title>recommend your post</a>
</div>
</li>
</ul>
<a href="#" title class="main-btn" data-ripple>view all</a>
</div>
</div>
</div>
</div>

<div class="post-new-popup"  id="postPopup">
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
<div class="select-box_value"><input class="select-box_input" type="radio" id="0" value="1" name="Ben" checked="checked" />
<p class="select-box__input-text"><i class="icofont-globe-alt"></i> Public</p>
</div>
<div class="select-box_value"><input class="select-box_input" type="radio" id="1" value="2" name="Ben" checked="checked" />
<p class="select-box__input-text"><i class="icofont-lock"></i> Private</p>
</div>
<div class="select-box_value"><input class="select-box_input" type="radio" id="2" value="3" name="Ben" checked="checked" />
<p class="select-box__input-text"><i class="icofont-user"></i> Specific Friend</p>
</div>
<div class="select-box_value"><input class="select-box_input" type="radio" id="3" value="4" name="Ben" checked="checked" />
<p class="select-box__input-text"><i class="icofont-star"></i> Only Friends</p>
</div>
<div class="select-box_value"><input class="select-box_input" type="radio" id="4" value="5" name="Ben" checked="checked" />
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


<style>
    .post-new-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }
</style>



<div class="new-question-popup">
<div class="popup">
<span class="popup-closed"><i class="icofont-close"></i></span>
<div class="popup-meta">
<div class="popup-head">
<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></i> Ask Question</h5>
</div>
<div class="post-new">
<form method="post" class="c-form">
<input type="text" placeholder="Question Title">
<textarea placeholder="Write Question"></textarea>
<select>
<option>Select Your Question Type</option>
<option>Article</option>
<option>Book</option>
<option>Chapter</option>
<option>Code</option>
<option>conference Paper</option>
<option>Cover Page</option>
<option>Data</option>
<option>Exprement Finding</option>
<option>Method</option>
<option>Poster</option>
<option>Preprint</option>
<option>Technicial Report</option>
<option>Thesis</option>
<option>Research</option>
</select>
<div class="uploadimage">
<i class="icofont-eye-alt-alt"></i>
<label class="fileContainer">
<input type="file">Upload File
</label>
</div>
<button type="submit" class="main-btn">Post</button>
</form>
</div>
</div>
</div>
</div>
<div class="auto-popup">
<div class="popup-innner">
<div class="popup-head">
<h4>We want to hear from you!</h4>
</div>
<div class="popup-meta">
<span>What are you struggling with right now? what we can help you with?</span>
<form method="post" class="inquiry-about">
<input type="text" placeholder="Your Answer">
<h5>How did you hear about us?</h5>
<label><input type="radio" name="hear"> Facebook</label>
<label><input type="radio" name="hear"> instagram</label>
<label><input type="radio" name="hear"> Google Search</label>
<label><input type="radio" name="hear"> Twitter</label>
<label><input type="radio" name="hear"> Whatsapp</label>
<label><input type="radio" name="hear"> Other</label>
<input type="text" placeholder="Writh Other">
<button type="submit" class="primary button">Submit</button>
<button class="canceled button outline-primary" type="button">Cancel</button>
</form>
</div>
</div>
</div>
<div class="share-wraper">
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
</div>
<div class="chat-box">
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
</div>
<div class="createroom-popup">
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
</div>
<div class="modal fade" id="img-comt">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
</div>

<div class="modal-body">
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
</div>
</div>

<div class="modal" tabindex="-1" id="tambahModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>ADD CONTENT</h6>
            </div>
            <div class="modal-body">
                <div id="searchResultsContainer"></div>
                <form action="{{ route('user.content.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="judul" class="form-label">Title</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}">
                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Description</label>
                        <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Image</label>
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{ old('gambar') }}">
                        @error('gambar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategoris" class="form-label">Category</label><br>
                        <select class="form-control @error('kategori_id') is-invalid @enderror" id="kategoris" name="kategori_id" aria-label="Default select example">
                            <option value="" selected>Select Category</option>
                            @foreach ($kategori as $kat)
                                <option value="{{ $kat->id }}" {{ old('kategori_id') == $kat->id ? 'selected' : '' }}>
                                    {{ $kat->kategori }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-undo me-1"></i>CANCEL</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle me-1"></i>SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="addContactModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContactModalLabel">Add Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="searchResultsContainer"></div>
                <form id="addContactForm" action="{{ route('contact.index') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="messages" class="form-label">Messages</label>
                        <textarea type="text" class="form-control @error('messages') is-invalid @enderror" id="messages" name="messages" >{{ old('messages') }}</textarea>
                        @error('messages')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-undo me-1"></i>CANCEL</button>
                        <button type="submit" form="addContactForm" class="btn btn-primary"><i class="fas fa-check-circle me-1"></i>SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function submitSearch() {
        document.getElementById("searchForm").submit();
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        console.log("Script is executing!");
        document.getElementById('createPostInput').addEventListener('click', function() {
            console.log("Input clicked!");
            document.getElementById('postPopup').style.display = 'block';
        });
    });
</script>

<script>
    function showLogoutAlert() {
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Anda yakin ingin keluar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Keluar!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {

            Swal.fire(
                'Logout Berhasil',
                'Anda telah berhasil logout.',
                'success'
            );
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire(
                'Logout Dibatalkan',
                'Anda membatalkan logout.',
                'error'
            );
        }
        });
    }

</script>


<script>
    @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
    function swalpFunction() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                console.log("Data dihapus");
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.min.js" type="text/javascript"></script>
<script src="js/date-time.js" type="text/javascript"></script>
<script src="js/script.js" type="b792af529d8fc78a3581caf5-text/javascript"></script>

<script>
    $(document).ready(function() {
    $('.btn-like').on('click', function() {
        var contentId = $(this).closest('.like-button').data('content-id');

        $.ajax({
            url: '/content/' + contentId + '/like',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Update tampilan jika diperlukan
                console.log('Like berhasil');
            },
            error: function(xhr, status, error) {
                console.error('Gagal melakukan like:', error);
            }
        });
    });
});
</script>
<script>
    let posts = [];

    function submitPost() {
        const postInput = document.getElementById('postInput').value;

        if (postInput.trim() !== '') {
            const post = {
                content: postInput,
                likes: 0,
                liked: false
            };

            posts.push(post);
            renderPosts();
            document.getElementById('postInput').value = '';
        }
    }

    function toggleLike(index) {
        posts[index].liked = !posts[index].liked;

        if (posts[index].liked) {
            posts[index].likes++;
        } else {
            posts[index].likes--;
        }

        renderPosts();
    }

    function renderPosts() {
        const postList = document.getElementById('postList');
        postList.innerHTML = '';

        posts.forEach((post, index) => {
            const postElement = document.createElement('div');
            postElement.classList.add('post');
            postElement.innerHTML = `
                <p>${post.content}</p>
                <div class="like" onclick="toggleLike(${index})">
                    <a class="like__link"><i class="icofont-like${post.liked ? ' liked' : ''}"></i> <span>${post.likes}</span> Like</a>
                </div>
            `;
            postList.appendChild(postElement);
        });
    }
</script>
</body>


</html>
