<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums | Admin</title>
<link rel="icon" href="images/fav.ico" type="image/x-icon">
<link rel="stylesheet" href="css/main.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/color.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<style>
.dropdown-custom {
    font-size: 16px;
}
    </style>
</head>
<body>
{{-- <div class="page-loader" id="page-loader"> --}}
<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
<span>Loading...</span>
</div>
<div class="theme-layout">
<div class="responsive-header">
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
<li>
    <a title href="{{ route('logout') }}" class="logout"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     <i class="icofont-logout"></i>
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</li>


{{-- <li><a title href="login-register.html" class="logout"><i class="icofont-logout"></i>Logout</a></li> --}}
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
<h4>Dashboard</h4>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<ul class="breadcrumb">
<li><a href="#" title>Home</a></li>
<li><a href="#" title>Dashboard</a></li>
</ul>
</div>
</div>
</div>
</div>
<nav class="sidebar">
<ul class="menu-slide">
<li class="active">
<a class href="#" title>
<i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /><polyline points="9 22 9 12 15 12 15 22" /></svg></i> Dashboard
</a>
</li>
<li class>
<a class href="content" title>
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
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="panel-content">
<h4 class="main-title">Data Management</h4>
<div class="row merged20 mb-4">
<div class="col-lg-4 col-md-4 col-sm-4">
<div class="d-widget soft-red">
<div class="d-widget-title">
<h5>Total Users</h5>
</div>
<div class="d-widget-content">
<span class="realtime-ico pulse"></span>
<h6>Updating</h6>
<h5>{{ $totalUsers }}</h5>
<i class="icofont-users-alt-3"></i>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4">
<div class="d-widget soft-blue">
<div class="d-widget-title">
<h5>Total Category</h5>
</div>
<div class="d-widget-content">
<span class="realtime-ico pulse"></span>
<h6>Updating </h6>
<h5>{{ $jkategori }}</h5>
<i class="icofont-optic"></i>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4">
<div class="d-widget soft-green">
<div class="d-widget-title">
<h5>Total Content</h5>
</div>
<div class="d-widget-content">
<span class="realtime-ico pulse"></span>
<h6>Updating </h6>
<h5>{{ $jcontent }}</h5>
<i class="icofont-computer"></i>
</div>
</div>
</div>
</div>
<div class="row merged20 mb-4">
<div class="col-lg-12">
<div class="d-widget">
<div class="d-widget-title">
<h5>Most Liked Posts</h5>
</div>
<table class="table-default table table-striped table-responsive-md">
<thead>
<tr>
<th class="wd-10p">No.</th>
<th class="wd-25p">Title</th>
<th class="wd-35p">Description</th>
<th class="wd-20p">Total Liked</th>
</tr>
</thead>
<tbody>
    @foreach ($content as $key => $contents)
<tr>
    <td>{{ $key + 1 }}</td>
<td style="width: 25%">
<div class="d-flex align-items-center">
<div class="avatar avatar-xs">
    <span class="avatar-initial rounded-circle bg-secondary">
        <img src="{{ asset('storage/'.  $contents->gambar ) }}" alt="" style="border-radius: 50%;">
    </span>
</div>
{{-- <span class="tx-medium mg-l-10">{{ $contents->judul }}</span> --}}
@if(strlen($contents->judul) > 15)
        {{ substr($contents->judul, 0, 15) }}...
    @else
        {{ $contents->judul }}
    @endif
</div>
</td>
<td>
    @if(strlen($contents->deskripsi) > 70)
        {{ substr($contents->deskripsi, 0, 70) }}...
    @else
        {{ $contents->deskripsi }}
    @endif
<td style="width: 10%">
<center><span>1</span></center>
</td>
</tr>
@endforeach
</tbody>
</table>
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
</div>
<script src="js/main.min.js" type="text/javascript"></script>
<script src="js/vivus.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/graphs-scripts.js" type="text/javascript"></script>
</html>
