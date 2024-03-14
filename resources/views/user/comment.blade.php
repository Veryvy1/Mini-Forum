<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content />
    <meta name="keywords" content />
    <title>GetForums | Comment</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('socimo/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('socimo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('socimo/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('socimo/css/responsive.css') }}">
</head>

<body>
    </div>
    <div class="theme-layout">

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
                        <i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round"
                                stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24" height="14" width="14"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg></i> Home
                    </a>

                </li>
                <li class="menu-item-has-children">
                    <a class href="#" title>
                        <i class><svg id="ab7" class="feather feather-zap" stroke-linejoin="round"
                                stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24" height="14" width="14"
                                xmlns="http://www.w3.org/2000/svg">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                            </svg></i> Features
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
                            <svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg></i> Market Place
                    </a>

                </li>
                <li class="menu-item-has-children">
                    <a class href="#" title>
                        <i class><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee">
                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                <line x1="6" y1="1" x2="6" y2="4"></line>
                                <line x1="10" y1="1" x2="10" y2="4"></line>
                                <line x1="14" y1="1" x2="14" y2="4"></line>
                            </svg>
                        </i> Blogs
                    </a>
                    <ul class="submenu">
                        <li><a href="blog.html" title>Blog</a></li>
                        <li><a href="blog-detail.html" title>Blog Detail</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a class href="#" title>
                        <i><svg id="ab8" class="feather feather-file" stroke-linejoin="round"
                                stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24" height="14" width="14"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" />
                                <polyline points="13 2 13 9 20 9" />
                            </svg></i> Featured Pages
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
                            <svg id="ab9" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2">
                                </rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg></i> Authentications
                    </a>
                    <ul class="submenu">
                        <li><a href="sign-in.html" title>Sign In</a></li>
                        <li><a href="signup.html" title>Sign Up</a></li>
                        <li><a href="forgot-password.html" title>Forgot Password</a></li>
                    </ul>
                </li>
                <li class>
                    <a class href="about-university.html" title>
                        <i><svg id="ab1" class="feather feather-users" stroke-linejoin="round"
                                stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24" height="14" width="14"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle r="4" cy="7" cx="9" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg></i> University Profile
                    </a>
                </li>
                <li class>
                    <a class href="messages.html" title>
                        <i class>
                            <svg class="feather feather-message-square" stroke-linejoin="round"
                                stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"
                                id="ab2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                                    style="stroke-dasharray: 68, 88; stroke-dashoffset: 0;" />
                            </svg></i> Live Chat
                    </a>
                </li>
                <li class>
                    <a class href="privacy-n-policy.html" title><i class>
                            <svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg></i> Privacy Polices
                    </a>
                </li>
                <li class>
                    <a class href="settings.html" title><i class>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                </path>
                            </svg></i> Web Settings
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a class="#" href="#" title>
                        <i class>
                            <svg id="team" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                <line x1="15" y1="9" x2="15.01" y2="9"></line>
                            </svg></i> Development Tools
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




        <div class="container"><br><br>
            <a type="button" href="{{ route('home') }}" class="btn btn-primary">
                <i class="icofont-arrow-left"></i>
            </a>
            <h3>Input your comment</h3>
            <form action="{{ route('comment.store', ['contentId' => $content->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <textarea name="comment" id="comment" placeholder="comment..." cols="120" rows="3"
                    style="border-radius: 10px; border: 1px solid #ccc; padding: 5px;">{{ old('comment') }}</textarea>
                <button type="submit" class="btn btn-primary rounded-circle"
                    style="background-color:  rgb(40, 144, 204); width:60px; height:60px; font-size:28px; margin-top:-6%;"><i
                        class="icofont-paper-plane"></i></button>
            </form>

            <br><br>

            <div class="comment-area">
                <h4 class="comment-title">03 comments</h4>
                <ul class="comments">
                    @foreach ($comment as $comments)
                    <li>
                        <style>
                            .commenter-photo img {
                                width: 50px;
                                height: 50px;
                            }
                            </style>
                            @if ($user->profile)
                            <div class="commenter-photo">
                                <img src="{{ asset('storage/'. $user->profile) }}">
                            </div>
                            @else
                            <div class="commenter-photo">
                                <img src="{{ asset('images/LOGO/logo.png') }}">
                            </div>
                            @endif
                            <div class="commenter-meta">
                                <div class="comment-titles">
                                    <h6>{{ $comments->user->name }}</h6>
                                    <span>{{ \Carbon\Carbon::parse($comments->created_at)->isoFormat('D MMMM YYYY') }}</span>

                                </div>
                                <p style="word-break: break-word;">
                                    {{ $comments->comment }}
                                </p>

                            </div>
                            <a href="{{ route('comment.reply',  $comments->id) }}" class="text-primary">Reply</a>

                        </div>
                        <hr>
                        @endforeach

                        {{-- <ul>
                            <li>
                                <div class="comment-box">
                                    <div class="commenter-photo">
                                        <img alt src="images/resources/commenter-2.jpg">
                                    </div>
                                    <div class="commenter-meta">
                                        <div class="comment-titles">
                                            <h6>Qlark Jack</h6>
                                            <span>22 july 2017</span>
                                            <a title href="#" class="reply">reply</a>
                                        </div>
                                        <p>
                                            Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet adipiscing
                                            egetmassa
                                            pulvinar eu aliquet nibh dapibus.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul> --}}
                    </li>
                    {{-- <li>
                        <div class="comment-box">
                            <div class="commenter-photo">
                                <img alt src="images/resources/commenter-3.jpg">
                            </div>
                            <div class="commenter-meta">
                                <div class="comment-titles">
                                    <h6>Olivia Take</h6>
                                    <span>15 jan 2016</span>
                                    <a title href="#" class="reply">reply</a>
                                </div>
                                <p>
                                    Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet adipiscing
                                    egetmassa pulvinar eu aliquet nibh dapibus.
                                </p>
                            </div>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>

<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
    {{-- <div class="tab-pane fade" id="reference">
<h4 class="mb-4">References (15)</h4>
<div class="main-wraper">
<div class="user-post">
<div class="friend-info">
<figure>
<img src="images/resources/user2.jpg" alt>
</figure>
<div class="friend-name">
<div class="more">
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
</div>
<ins><a href="time-line.html" title>Sarah K.</a> added a chapter</ins>
<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
</div>
<div class="post-meta">
<a class="post-title" href="post-detail.html">Supervision as a Personnel Development Device</a>
<p>
Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
</p>
<div class="we-video-info">
<ul>
<li>
<span class="views" title="views">
<i class="icofont-eye"></i>
<ins>1.2k</ins>
</span>
</li>
<li>
<span class="Recommend" title="recomend">
<i class="icofont-id-card"></i>
</span>
</li>
<li>
<span class="Follow" title="follow">
<i class="icofont-star"></i>
</span>
</li>
<li>
<span title="Share" class="share-pst">
<i class="icofont-share-alt"></i>
<ins>20</ins>
</span>
</li>
</ul>
<a class="reply" title href="post-detail.html">Reply <i class="icofont-reply"></i></a>
</div>
</div>
</div>
</div>
</div> --}}
    {{-- <div class="main-wraper">
<div class="user-post">
<div class="friend-info">
<figure>
<img src="images/resources/user1.jpg" alt>
</figure>
<div class="friend-name">
<div class="more">
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
</div>
<ins><a href="time-line.html" title>Jack Carter</a> added a chapter</ins>
<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
</div>
<div class="post-meta">
<a class="post-title" href="post-detail.html">Supervision as a Personnel Development Device</a>
<p>
Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
</p>
<div class="we-video-info">
<ul>
<li>
<span class="views" title="views">
<i class="icofont-eye"></i>
<ins>1.2k</ins>
</span>
</li>
<li>
<span class="Recommend" title="recomend">
<i class="icofont-id-card"></i>
</span>
</li>
<li>
<span class="Follow" title="follow">
<i class="icofont-star"></i>
</span>
</li>
<li>
<span title="Share" class="share-pst">
<i class="icofont-share-alt"></i>
<ins>20</ins>
</span>
</li>
</ul>
<a class="reply" title href="post-detail.html">Reply <i class="icofont-reply"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="main-wraper">
<div class="user-post">
<div class="friend-info">
<figure>
<img src="images/resources/user3.jpg" alt>
</figure>
<div class="friend-name">
<div class="more">
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
</div>
<ins><a href="time-line.html" title>William John</a> added a chapter</ins>
<span><i class="icofont-globe"></i> published: Sep,15 2020</span>
</div>
<div class="post-meta">
<a class="post-title" href="post-detail.html">Supervision as a Personnel Development Device</a>
<p>
Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
</p>
<div class="we-video-info">
<ul>
<li>
<span class="views" title="views">
<i class="icofont-eye"></i>
<ins>1.2k</ins>
</span>
</li>
<li>
<span class="Recommend" title="recomend">
<i class="icofont-id-card"></i>
</span>
</li>
<li>
<span class="Follow" title="follow">
<i class="icofont-star"></i>
</span>
</li>
<li>
<span title="Share" class="share-pst">
<i class="icofont-share-alt"></i>
<ins>20</ins>
</span>
</li>
</ul>
<a class="reply" title href="post-detail.html">Reply <i class="icofont-reply"></i></a>
</div>
</div>
</div>
</div>
</div>
</div> --}}
    </div>

<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
    <figure class="bottom-mockup"><img src="/images/footer.png" alt></figure>
    <div class="bottombar">
        <div class="container">
            <div class="row">
                <div class="col-lg-100">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg></i> Invite Colleagues</h5>
                </div>
                <div class="invitation-meta">
                    <p>
                        Enter an email address to invite a colleague or co-author to join you on GetForums. They will
                        receive an email and, in some cases, up to two reminders.
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
                            <svg class="feather feather-message-square" stroke-linejoin="round"
                                stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none"
                                viewBox="0 0 24 24" height="24" width="24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                            </svg></i> Send Message</h5>
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
                    <a href="#" class="send-mesg" title="New Message" data-toggle="tooltip"><i
                            class="icofont-edit"></i></a>
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
        <div class="popup" style="width: 800px;">
            <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg></i>Create New Post</h5>
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
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="0" value="1" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-globe-alt"></i> Public</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="1" value="2" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-lock"></i> Private</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="2" value="3" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-user"></i> Specific Friend</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="3" value="4" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-star"></i> Only Friends</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="4" value="5" name="Ben" checked="checked" />
                                    <p class="select-box__input-text"><i class="icofont-users-alt-3"></i> Joined
                                        Groups</p>
                                </div>
                                <img class="select-box__icon" src="images/arrow-down.svg" alt="Arrow Icon"
                                    aria-hidden="true" />
                            </div>
                            <ul class="select-box__list">
                                <li><label class="select-box__option" for="0"><i
                                            class="icofont-globe-alt"></i> Public</label></li>
                                <li><label class="select-box__option" for="1"><i class="icofont-lock"></i>
                                        Private</label></li>
                                <li><label class="select-box__option" for="2"><i class="icofont-user"></i>
                                        Specific Friend</label></li>
                                <li><label class="select-box__option" for="3"><i class="icofont-star"></i>
                                        Only Friends</label></li>
                                <li><label class="select-box__option" for="4"><i
                                            class="icofont-users-alt-3"></i> Joined Groups</label></li>
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
    <div class="new-question-popup">
        <div class="popup">
            <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg></i> Ask Question</h5>
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
    <div class="share-wraper">
        <div class="share-options">
            <span class="close-btn"><i class="icofont-close-circled"></i></span>
            <h5><i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-share">
                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                        <polyline points="16 6 12 2 8 6"></polyline>
                        <line x1="12" y1="2" x2="12" y2="15"></line>
                    </svg></i>Share To!</h5>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg></i>
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
                                <time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                    8:10pm</time>
                                <i><img src="images/d-tick.png" alt></i>
                            </span>
                        </div>
                    </li>
                    <li class="me">
                        <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt></div>
                        <div class="notification-event">
                            <span class="chat-message-item">
                                Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts
                                and Jake’s gonna get the drinks
                            </span>
                            <span class="notification-date">
                                <time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                    8:10pm</time>
                                <i><img src="images/d-tick.png" alt></i>
                            </span>
                        </div>
                    </li>
                    <li class="you">
                        <div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt></div>
                        <div class="notification-event">
                            <span class="chat-message-item">
                                Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts
                                and Jake’s gonna get the drinks
                            </span>
                            <span class="notification-date">
                                <time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                    8:10pm</time>
                                <i><img src="images/d-tick.png" alt></i>
                            </span>
                        </div>
                    </li>
                    <li class="me">
                        <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt></div>
                        <div class="notification-event">
                            <span class="chat-message-item">
                                Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts
                                and Jake’s gonna get the drinks
                            </span>
                            <span class="notification-date">
                                <time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                    8:10pm</time>
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
    </div>
    <script src="js/main.min.js" type="10fc43dc7dd9c0a32b534eab-text/javascript"></script>
    <script src="js/sparkline.js" type="10fc43dc7dd9c0a32b534eab-text/javascript"></script>
    <script src="js/chart.js" type="10fc43dc7dd9c0a32b534eab-text/javascript"></script>
    <script src="js/script.js" type="10fc43dc7dd9c0a32b534eab-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="10fc43dc7dd9c0a32b534eab-|49" defer></script>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'85d70ae8ae04836b',t:'MTcwOTI3NDA0MS45MDMwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
</body>

<!-- Mirrored from wpkixx.com/html/socimo/post-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 06:23:47 GMT -->

</html>
