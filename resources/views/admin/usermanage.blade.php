<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/socimo-panel/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:34 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums | Dashboard</title>
<link rel="icon" href="images/fav.html" type="image/png" sizes="16x16">
<link rel="stylesheet" href="css/main.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/color.css">
<link rel="stylesheet" href="css/responsive.css">
<link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
</head>
<body>
{{-- <div class="page-loader" id="page-loader"> --}}
<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
<span>Loading...</span>
</div>
<div class="theme-layout">
<div class="responsive-header">
<div class="res-logo"><img src="images/logo.png" alt></div>
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
<h4>All Events</h4>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<ul class="breadcrumb">
<li><a href="#" title>Home</a></li>
<li><a href="#" title>All Events</a></li>
</ul>
</div>
</div>
</div>
</div>
<nav class="sidebar">
    <ul class="menu-slide">
    <li >
    <a class href="/" title>
    <i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /><polyline points="9 22 9 12 15 12 15 22" /></svg></i> Dashboard
    </a>
    </li>
    <li class>
    <a class href="content" title>
    <i class><svg id="ab7" class="feather feather-file" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg></i>Content
    </a>
    </li>
    <li class="active">
    <a class href="#" title>
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
<h4 class="main-title">Users Management</h4>

<div class="row merged20 mb-4">
<div class="col-lg-12">
<div class="d-widget">
<div class="d-widget-title">
<h5>All events</h5>
</div>
<table class="table table-default all-events table-striped table-responsive-lg">
<thead>
<tr>
<th>ID#</th>
<th>Name</th>
<th>Email</th>
<th>Date</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
    @foreach ($users as $key => $use)
<tr>
<td><b>{{ $key + 1 }}</b></td>
<td class="user-pic"><figure>
    <img src="{{ asset('storage/' . auth()->user()->profil) }}" alt="">
</figure> <span>{{ $use->name }}</span></td>
<td>{{ $use->email }}</td>
<td>{{  \Carbon\Carbon::parse($use->created_at)->isoFormat('D MMMM YYYY') }}</td>
<td>
<div class="button soft-danger"><i class="icofont-trash"></i></div>
{{-- <div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div> --}}
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
{{-- <div class="row merged20 mb-4">
<div class="col-lg-6">
<div class="d-widget">
<div class="d-widget-title">
<h5>Events Schedule</h5>
</div>
<ul class="upcoming-event">
<li>
<div class="event-date soft-red">
<i>24 FEB</i>
<span>2021</span>
</div>
<div class="event-deta">
<h5>digital marketing summit</h5>
<ul>
<li><i class="icofont-user"></i> steve Josef</li>
<li><i class="icofont-map-pins"></i> New York City</li>
<li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
</ul>
</div>
</li>
<li>
<div class="event-date soft-green">
<i>10 MAR</i>
<span>2021</span>
</div>
<div class="event-deta">
<h5>digital marketing summit</h5>
<ul>
<li><i class="icofont-user"></i> steve Josef</li>
<li><i class="icofont-map-pins"></i> New York City</li>
<li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
</ul>
</div>
</li>
<li>
<div class="event-date soft-blue">
<i>20 OCT</i>
<span>2021</span>
</div>
<div class="event-deta">
<h5>digital marketing summit</h5>
<ul>
<li><i class="icofont-user"></i> steve Josef</li>
<li><i class="icofont-map-pins"></i> New York City</li>
<li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-6">
<div class="d-widget">
<div class="d-widget-title">
<h5>Web Traffic</h5>
<select class="browser-default custom-select">
<option value="3">last day</option>
<option value="2">week</option>
<option selected>Monthly</option>
<option value="1">Yearly</option>
</select>
</div>
<div class="web-traffic">
<div class="chart-legend">
<p>Today's visitors</p>
<h5>98,300</h5>
</div>
<div id="hybrid_traffic"></div>
</div>
</div>
</div>
</div>
<div class="row merged20 mb-4">
<div class="col-lg-6">
<div class="d-widget">
<div class="d-widget-title">
<h5>Notice Borad</h5>
</div>
<div class="d-Notices">
<ul>
<li>
<p>March 21, 2021</p>
<h6><a href="#" title>Mr. William</a> <span>5 mint ago</span></h6>
<p>
invited to join the meeting in the conference room at 9.45 am
</p>
<div class="action-btns">
<div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
<div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
</div>
</li>
<li>
<p>Feb 15, 2021</p>
<h6><a href="#" title>Andrew </a> <span>35 mint ago</span></h6>
<p>
created a group 'Hencework' in the discussion forum
</p>
<div class="action-btns">
<div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
<div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
</div>
</li>
<li>
<p>Jan 10, 2021</p>
<h6><a href="#" title>Franklyn J.</a> <span>40 mint ago</span></h6>
<p>
Prepare the conference schedule
</p>
<div class="action-btns">
<div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
<div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="d-widget">
<div class="d-widget-title">
<h5>Logs</h5>
</div>
<ul class="recent-log">
<li class="hole-circle red-circle"><span>New User Registration</span> <i>23:13</i></li>
<li class="hole-circle blue-circle"><span>New 14 products added.</span> <i>22:10</i></li>
<li class="hole-circle green-circle"><span>New sale: Napole.</span> <i>21:33</i></li>
<li class="hole-circle yellow-circle"><span>New notifications</span> <i>20:40</i></li>
<li class="hole-circle orange-circle"><span>New Comments</span> <i>19:20</i></li>
<li class="hole-circle blue-circle"><span>New sale: souffle.</span> <i>18:00</i></li>
<li class="hole-circle yellow-circle"><span>New notifications</span> <i>20:40</i></li>
<li class="hole-circle red-circle"><span>New User Registration</span> <i>23:13</i></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>--}}
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
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js" type="0fbf767ee7a90013180ed1b7-text/javascript"></script>
<script src="js/vivus.min.js" type="0fbf767ee7a90013180ed1b7-text/javascript"></script>
<script src="js/script.js" type="0fbf767ee7a90013180ed1b7-text/javascript"></script>
<script src="plugins/apex/apexcharts.min.js" type="0fbf767ee7a90013180ed1b7-text/javascript"></script>
<script src="js/graphs-scripts.js" type="0fbf767ee7a90013180ed1b7-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="0fbf767ee7a90013180ed1b7-|49" defer></script><script>(function(){var js = "window['__CF$cv$params']={r:'85d5924df9cc018b',t:'MTcwOTI1ODYxNi4xNzUwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

<!-- Mirrored from wpkixx.com/html/socimo-panel/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:34 GMT -->
</html>