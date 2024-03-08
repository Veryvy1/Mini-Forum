@include('sweetalert::alert')

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/socimo-panel/analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:32 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums | Admin Content</title>
<link rel="icon" href="images/LOGO/logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="css/main.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/color.css">
<link rel="stylesheet" href="css/responsive.css">
<link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
 <link href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
 <style>
    .prod-meta {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        word-wrap: break-word;
    }
</style>


</head>
<body>
{{-- <div class="page-loader" id="page-loader"> --}}
{{-- <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
<span>Loading...</span>
</div> --}}
<div class="theme-layout">
<div class="responsive-header">
<div class="res-logo"><img src="images/LOGO/logo.png" alt></div>
<div class="user-avatar mobile">
<a href="profile.html" title="View Profile"><img alt src="images/resources/user.jpg"></a>
<div class="name">
<h4>Saim Turan</h4>
<span>Antalaya, Turky</span>
</div>
</div>
<div class="right-compact">
<div class="menu-area">
<div id="nav-icon3">
<i>
<svg class="feather feather-grid" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><rect height="7" width="7" y="3" x="3" /><rect height="7" width="7" y="3" x="14" /><rect height="7" width="7" y="14" x="14" /><rect height="7" width="7" y="14" x="3" /></svg>
</i>
</div>
<ul class="drop-menu">
<li><a title="profile.html" href="profile.html"><i class="icofont-user-alt-1"></i>Your Profile</a></li>
<li><a title href="#"><i class="icofont-question-circle"></i>Help</a></li>
<li><a title href="#"><i class="icofont-gear"></i>Setting</a></li>
<li><a class="dark-mod" title href="#"><i class="icofont-moon"></i>Dark Mode</a></li>
<li><a title href="login-register.html" class="logout"><i class="icofont-logout"></i>Logout</a></li>
</ul>
</div>
<div class="res-search">
<span><i>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i></span>
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
    <div class="logo"><img alt src="images/LOGO/logo.png"><span>GetForums</span></div>
    <div class="searches">
    <form method="post">
    <input type="text" placeholder="Search...">
    <button type="submit"><i class="icofont-search"></i></button>
    </form>
    </div>
    <ul class="web-elements">
    <li>
        <a title href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                         <i class="icofont-power"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
    </ul>
    </div>
    </header>


<div class="top-sub-bar">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="menu-btn">
<i class>
<svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
</div>
<div class="page-title">
<h4>Content</h4>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<ul class="breadcrumb">
<li><a href="#" title>Home</a></li>
<li><a href="#" title>Content</a></li>
</ul>
</div>
</div>
</div>
</div>
<nav class="sidebar">
    <ul class="menu-slide">
    <li class>
    <a class href="/" title>
    <i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /><polyline points="9 22 9 12 15 12 15 22" /></svg></i> Dashboard
    </a>
    </li>
    <li class="active">
    <a class href="#" title>
    <i class><svg id="ab7" class="feather feather-file" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg></i>Content
    </a>
    </li>
    <li class>
    <a class href="usermanage" title>
    <i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle r="4" cy="7" cx="9" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg></i>Manage User
    </a>
    </li>
    <li class>
    <a class href="kategori" title>
    <i class>
    <svg id="ab3" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>Category
    </a>
    </li>
    <li class>
    <a class href="#" title><i class>
    <svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></i>Manage Content
    </a>
    </li>
    <li class>
    <a class href="#" title>
    <i class>
    <svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></i>Contact Message
    </a>
    </li>
    </ul>
    </nav>


{{--<div class="main-wraper">
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
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">

<div class="panel-content">
<h3 class="main-title">Content to GetForums</h3>
<a type="button" class="btn btn-primary" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahModal" style="margin-left: 90%; background-color:rgb(40, 144, 204); color:#fff;"><b>add content</b></a>
<br><br>
{{-- <div class="row merged20 mb-4"> --}}

    <div class="row merged-10">
        @forelse($content as $contents)
        <div class="col-lg-3">
                <div class="mb-4 prod-item" style="border: 1px solid #cacaca;">
                    <div class="overflow-hidden" style="height: 300px; display: flex; max-width: 100%; align-items: center; justify-content: center;">
            <img src="{{ asset('storage/'.  $contents->gambar ) }}" alt="Deskripsi gambar"  style="object-fit: cover; height: auto;">
                    </div>
            <div class="more-opt">
        <span><i class="icofont-dotted-down"></i></span>
        <ul>
        <li><a href="#" title  style="font-size: 15px; margin-left:7%;"><i class="icofont-eye" style="color: #1e76b9"></i> Detail</a></li>
        <button type="button" title  style="font-size: 15px;  background-color:#fff; border:none;" data-bs-toggle="modal" data-bs-target="#editModal{{ $contents->id }}">
            <i class="icofont-pen-alt-1" style="color: #dca02f"></i> Edit
        </button></li>
        <li>
        <form action="{{ route('content.destroy', ['content' => $contents->id]) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" title style="font-size: 15px; background-color:#fff; border:none;"  onclick="return confirm('Are you sure you want to delete this?');">
                <i class="icofont-trash" style="color: #b91e1e"></i> Delete
            </button>
        </form></li>
        </ul>
        </div>
        <div class="prod-meta">
        <h4 title>
        @if(strlen($contents->judul) > 15)
            {{ substr($contents->judul, 0, 15) }}...
        @else
            {{ $contents->judul }}
        @endif</h4>
        <p>{{ $contents->deskripsi }}</p>
        </div>
        </div>
    </div>
    @empty
    <center>
        <img src="images/LOGO/datakosong.png" alt="" style="width: 50%;">
    </center>
    @endforelse
        </div>
{{--<div class="col-lg-4 col-md-6">
<div class="w-chart-section">
<div class="w-detail">
<p class="w-title">Total Visits</p>
<p class="w-stats">423,964</p>
<span>
<svg id="user-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg></span>
</div>
<div class="w-chart-render-one">
<div id="total-users"></div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="w-chart-section">
<div class="w-detail">
<p class="w-title">Total Orders</p>
<p class="w-stats">7,929</p>
<span>
<svg id="bag" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg></span>
</div>
<div class="w-chart-render-one">
<div id="paid-visits"></div>
</div>
</div>
</div>
 <div class="col-lg-4 col-md-12">
<div class="w-chart-section">
<div class="w-detail">
<p class="w-title">Total Downloads</p>
<p class="w-stats">7,929</p>
<span>
<svg id="download" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download-cloud"><polyline points="8 17 12 21 16 17"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path></svg></span>
</div>
<div class="w-chart-render-one">
<div id="total-downloads"></div>
</div>
</div>
</div>
</div>
<div class="row merged20 mb-4">
<div class="col-lg-8 col-md-6 col-sm-12">
<div class="d-widget">
<div class="d-widget-title">
<h5 class>Revenue</h5>
<select class="browser-default custom-select">
<option value="3">last day</option>
<option value="2">week</option>
<option selected>Monthly</option>
<option value="1">Yearly</option>
</select>
</div>
<div class="d-widget-content">
<div class="tabs tab-content">
<div id="content_1" class="tabcontent">
<div id="revenueMonthly"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="d-widget blue-bg pd-0">
<div class="d-widget-content">
<div class="w-numeric-value">
<div class="w-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
</div>
<div class="d-content">
<span class="w-numeric-title">This Month Orders</span>
<span class="w-value">3,192</span>
</div>
</div>
<div class="w-chart">
<div id="total-orders"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row merged20 mb-4">
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="d-widget">
<div class="d-widget-title"><h5 class>Revenue</h5></div>
<div class="d-widget-content">
<div class="w-content">
<p>Daily sales Go to columns for details.</p>
</div>
<div class="d-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
<span>201</span>
</div>
<div class="w-chart">
<div id="daily-sales"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="d-widget pd-0 soft-blue">
<div class="d-widget-meta">
<div class="w-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
</div>
<h5 class>Followers</h5>
<p class="w-value">31.6K</p>
</div>
<div class="d-widget-content">
<div class="w-chart">
<div id="hybrid_followers"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="d-widget pd-0 soft-red">
<div class="d-widget-meta">
<div class="w-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
</div>
<h5 class>Referral</h5>
<p class="w-value">1,900</p>
</div>
<div class="d-widget-content">
<div class="w-chart">
<div id="hybrid_followers1"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="d-widget pd-0 soft-green">
<div class="d-widget-meta">
<div class="w-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
</div>
<h5 class>Engagement</h5>
<p class="w-value">18.2%</p>
</div>
<div class="d-widget-content">
<div class="w-chart">
<div id="hybrid_followers3"></div>
</div>
</div>
</div>
</div>
</div>
<div class="row merged20">
<div class="col-lg-3 col-md-6">
<div class="d-widget">
<div class="d-widget-title"><h5>Monthly Product Sales</h5></div>
<div id="chart-2" class></div>
</div>
</div>
<div class="col-lg-9 col-md-6">
<div class="d-widget">
<div class="d-widget-title"><h5>Monthly Visitors</h5></div>
<div id="uniqueVisits"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="popup-wraper">
<div class="popup">
<span class="popup-closed"><i class="icofont-close"></i></span>
<div class="popup-meta">
<div class="popup-head">
<h5><i class="icofont-envelope"></i> Send Message</h5>
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
</div>--}}
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
<div class="post-new-popup">
<div class="popup">
<span class="popup-closed"><i class="icofont-close"></i></span>
<div class="popup-meta">
<div class="popup-head">
<h5><i class="icofont-envelope"></i> Post New</h5>
</div>
<div class="post-new">
<form method="post" class="c-form">
<input type="text" placeholder="Title">
<textarea placeholder="Post Something"></textarea>
<select>
<option>Select Your Publication Type</option>
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
<i class="icofont-eye-alt"></i>
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
</div>


<div class="modal" tabindex="-1" id="tambahModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>ADD CONTENT</h6>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <form action="{{ route('content.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="kategoris" class="form-label">Category</label>
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


@foreach ($content as $contents)
<div class="modal" tabindex="-1" id="editModal{{ $contents->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>EDIT CONTENT</h6>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <form action="{{ route('content.update', $contents->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="judul" class="form-label">Title</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $contents->judul) }}">
                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Description</label>
                        <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi">{{ old('deskripsi', $contents->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Image</label>
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{ old('gambar') }}">
                        @if ($contents->gambar)
                        <img src="{{ asset('storage/' . $contents->gambar) }}" alt="gambar" width="50" height="50">
                    @else
                        No Image
                    @endif

                    @error('gambar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategoris" class="form-label">Category</label>
                        <select class="form-control @error('kategori_id') is-invalid @enderror" id="kategoris" name="kategori_id" aria-label="Default select example">
                            <option value="" {{old('kategori_id',  $contents->kategori_id) ? '' : 'selected' }}>Select Category</option>
                            @foreach ($kategori as $kat)
                                <option value="{{ $kat->id }}" {{ old('kategori_id', $contents->kategori_id) == $kat->id ? 'selected' : '' }}>
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

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-undo me-1"></i>CANCEL</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle me-1"></i>SAVE</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


  <!-- SweetAlert2 JavaScript -->
  {{-- <script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script> --}}

  {{-- @if(session('success'))
      <script>
          Swal.fire({
              title: 'Success!',
              text: '{{ session('success') }}',
              icon: 'success',
              confirmButtonText: 'OK'
          });
      </script>
  @elseif(session('error'))
      <script>
          Swal.fire({
              title: 'Error!',
              text: '{{ session('error') }}',
              icon: 'error',
              confirmButtonText: 'OK'
          });
      </script>
  @endif --}}

@if(session('warning'))
<div class="alert alert-warning">
  {{ session('warning') }}
</div>
@endif

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
  crossorigin="anonymous"></script>

<script src="js/main.min.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="js/vivus.min.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="js/script.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="plugins/apex/apexcharts.min.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="js/graphs-scripts.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="101cca6ef11d27050cf841ef-|49" defer></script><script>(function(){var js = "window['__CF$cv$params']={r:'85d5924a5f8c018b',t:'MTcwOTI1ODYxNS41OTYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

<!-- Mirrored from wpkixx.com/html/socimo-panel/analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:32 GMT -->
</html>
<script src="js/main.min.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="js/vivus.min.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="js/script.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="plugins/apex/apexcharts.min.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="js/graphs-scripts.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="101cca6ef11d27050cf841ef-|49" defer></script><script>(function(){var js = "window['__CF$cv$params']={r:'85d5924a5f8c018b',t:'MTcwOTI1ODYxNS41OTYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script>
</body>

<!-- Mirrored from wpkixx.com/html/socimo-panel/analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:32 GMT -->
</html>
