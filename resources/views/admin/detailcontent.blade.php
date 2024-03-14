<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums | Detail Content</title>
<link rel="icon" href="{{ asset('images/LOGO/logo.png') }}" type="image/png" sizes="16x16">
<link rel="stylesheet" href="{{ asset('socimo/css/main.min.css') }}">
<link rel="stylesheet" href="{{ asset('socimo/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('socimo/css/color.css') }}">
<link rel="stylesheet" href="{{ asset('socimo/css/responsive.css') }}">
</head>
<body>

<div class="theme-layout">
<div class="responsive-header">
    <div class="logo"><img src="{{ asset('images/LOGO/logo.png') }}" alt><span>GetForums</span></div>
    <div class="user-avatar mobile">
<a href="profile.html" title="View Profile"><img alt src="images/resources/user.jpg"></a>
<div class="name">
<h4>Danial Cardos</h4>
<span>Ontario, Canada</span>
</div>
</div>
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
    <div class="logo"><img alt src="{{ asset('images/LOGO/logo.png') }}"><span>GetForums</span></div>

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

<section>
<div class="white-bg">
<div class="container-fluid">
<div class="menu-caro">
<div class="row">
<div class="col-lg-2">
<div class="sidemenu">
<i>
<svg id="side-menu" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section>
<div class="gap">
<div class="container">
<div class="row">
<div class="offset-lg-1 col-lg-10">
<div class="blog-detail">
<div class="blog-title">
<h2>{{ $content->judul }}</h2>
</div>
<div class="blog-details-meta">
<figure><img src="{{ asset('storage/'. $content->gambar) }}" alt></figure>
<ul>
<li><i class="icofont-heart" style="color: #64a4d4;"></i> 907</li>
<li><i class>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></i> Jan 20, 2021</li>
</ul>
<p>{{ $content->deskripsi }}
</p>
<div class="tag-n-cat">
<div class="tags">
<span><i class>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg></i> Post Categories:</span>
<a title href="#">{{ $content->kategori->kategori }}</a>
</div>
</div>
</div>



<table class="table table-default all-events table-striped table-responsive-lg">
    <thead>
    <tr>
    <th style="width: 10%;">No</th>
    <th style="width: 20%;">Name</th>
    <th style="width: %;">Comment</th>
    <th style="width: 10%;">Delete</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($comments ?? [] as $key => $comment)
        <tr>
            <td style="width: 10%;">{{ $key + 1}}</td>
            <td style="width: 20%">{{ $comment->user->name }}</td>
            <td style="width: 50%;">{{ $comment->comment }}</td>
            <td style="width: 10%;">
                {{-- <form action="{{ route('comment.destroy', ['comment' => $comment->id]) }}" method="POST" style="display:inline" id="deleteForm_{{ $comment->id }}"> --}}
                @csrf
                    @method('DELETE')
                    <button type="submit" title class="button soft-danger"  onclick="swalpFunction()">
                        <i class="icofont-trash" style="color: #ff0000;"></i>Delete
                    </button>
                {{-- </form>     --}}
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>


</div>
</div>
</div>
</div>
</div>
</section>
<figure class="bottom-mockup"><img src="/images/footer.png" alt></figure>
<div class="bottombar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<span class>&copy; copyright All rights reserved by GetForums 2024</span>
</div>
</div>
</div>
</div>
</div>
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/sparkline.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</html>
