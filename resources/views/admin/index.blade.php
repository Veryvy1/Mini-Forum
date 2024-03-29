<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>Dashboard | Admin</title>
<link rel="icon" href="/images/LOGO/logo.png" type="image/x-icon">
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

/* .table-default tr {
  height: 50px;
}

.table-default td div {
    width: 100%;
    height: 50px;
    overflow: hidden;
    text-overflow: ellipsis;
} */
    </style>
</head>
<body>
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
    <form id="searchForm" action="{{ route('dashboard.index') }}" method="get">
        @csrf
        <input type="search" name="search"  class="form-control" placeholder="Search..." oninput="submitSearch()">
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
<li><a href="dashboard" title>Dashboard</a></li>
</ul>
</div>
</div>
</div>
</div>
<nav class="sidebar">
    <ul class="menu-slide">
        <li class="active">
        <a class href="/dashboard" title>
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
        <a class href="contact" title>
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
        <a href="{{ route('usermanage.index') }}" class="d-widget soft-red">
            <div class="d-widget-title">
                <h5>Total Users</h5>
            </div>
            <div class="d-widget-content">
                <h5>{{ $totalUsers }}</h5>
                <i class="icofont-users-alt-3"></i>
            </div>
        </a>
    </div>
<div class="col-lg-4 col-md-4 col-sm-4">
    <a href="{{ route('kategori.index') }}" class="d-widget soft-blue">
        <div class="d-widget-title">
            <h5>Total Category</h5>
        </div>
        <div class="d-widget-content">
            <h5>{{ $jkategori }}</h5>
            <i class="icofont-optic"></i>
        </div>
    </a>
</div>

<div class="col-lg-4 col-md-4 col-sm-4">
    <a href="{{ route('content.index') }}" class="d-widget soft-green">
        <div class="d-widget-title">
            <h5>Total Content</h5>
        </div>
        <div class="d-widget-content">
            <h5>{{ $jcontent }}</h5>
            <i class="icofont-computer"></i>
        </div>
    </a>
</div>
</div>
<div class="row merged20 mb-4">
<div class="col-lg-12">
<div class="d-widget">
<div class="d-widget-title">
<h5>Most Liked Posts</h5>
</div>
<div id="searchResultsContainer"></div>

<table class="table-default table table-striped table-responsive-md">
<thead>
<tr>
<th class="wd-10p">No.</th>
<th class="wd-25p">Title</th>
<th class="wd-35p">Category</th>
<th class="wd-20p">Total Liked</th>
</tr>
</thead>
<tbody>
    @if ($content->isEmpty())
    <tr>
        <td colspan="5" class="text-center">
            <img src="{{ asset('images/LOGO/datakosong.png') }}" alt="No Data" style="width: 30%;">
        </td>
    </tr>
@else
@foreach ($content as $key => $contents)
<tr style="width: 600px; height: 30px;">
    <td style="width: 10%;">{{ $key + 1 }}</td>
<td style="width: 30%;">
<div class="d-flex align-items-center">
<div class="avatar avatar-xs" style="border-radius: 50%; width: 30px; height: 30px; overflow: hidden;">
    <span class="avatar-initial rounded-circle bg-secondary">
        <img src="{{ asset('storage/'.  $contents->gambar ) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
    </span>
</div>
@if(strlen($contents->judul) > 15)
        {{ substr($contents->judul, 0, 15) }}...
    @else


        {{ $contents->judul }}
    @endif
</div>
</td>
<td style="width: 30%">
    {{ $contents->kategori->kategori }}
</td>
<td style="width: 10%">
<center><span>{{ $contents->likes_count }}</span></center>
</td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>
</div>

<script src="js/main.min.js" type="text/javascript"></script>
<script src="js/vivus.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="plugins/apex/apexcharts.min.js" type="text/javascript"></script>
</html>
