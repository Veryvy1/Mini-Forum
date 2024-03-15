<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums | Profile</title>
<link rel="icon" href="images/LOGO/logo.png" type="image/x-icon">
<link rel="stylesheet" href="socimo/css/main.min.css">
<link rel="stylesheet" href="socimo/css/style.css">
<link rel="stylesheet" href="socimo/css/color.css">
<link rel="stylesheet" href="socimo/css/responsive.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<style>

.group-dp img {
    width: 100%; /* Agar gambar mengisi lingkaran secara penuh */
    height: 100%; /* Agar gambar mengisi lingkaran secara penuh */
    object-fit: cover; /* Membuat gambar sesuai dengan ukuran lingkaran */
}

    .more-opt {
        position: relative;
        display: inline-block;
    }

    .more-opt ul {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .more-opt ul li {
        list-style-type: none;
    }

    .more-opt:hover ul {
        display: block;
    }

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
<a href="{{ route('home') }}" title="Home" data-toggle="tooltip">
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
<a href="{{ route('profile.edit', auth()->user()->id) }}" class="btn btn-primary" style="color: #000; background-color: #fff; border: none;">Edit</a>
<figure class="group-dp" style="width: 200px; height: 200px;">
    @if ($user->profile)
        <img src="{{ asset('storage/' . $user->profile) }}" style="object-fit: cover;">
    @else
        <img id="preview-image" src="{{ asset('images/LOGO/profil.jpeg') }}" alt>
    @endif
</figure>
</div>
<div class="grp-info about">
<h4>{{ $user->name }}<span>{{ $user->email }}</span></h4>
<ul class="joined-info">
<li><span>Joined:</span>{{  \Carbon\Carbon::parse($user->created_at)->isoFormat('D MMMM YYYY') }}</li>
<li><span>Posts:</span> {{ $totalPosts }}</li>
</ul>
<ul class="more-grp-info">
<li>
</li>
</ul>
</div>
<div class="main-wraper">
<div class="grp-about">
<div class="row">
<div class="col-lg-8 col-md-6">
<h4>About Me!</h4>
<p>{{ $user->bio }}</p>
</div>
<div class="col-lg-4 col-md-6">
<div class="share-article">
<span>Social Media</span>
<a href="{{ $user->link_fb }}" title class="facebook"><i class="icofont-facebook"></i></a>
{{-- <a href="#" title class="pinterest"><i class="icofont-pinterest"></i></a> --}}
<a href="{{ $user->link_ig }}" title class="instagram"><i class="icofont-instagram"></i></a>
<a href="{{ $user->link_twt }}" title class="twitter"><i class="icofont-twitter"></i></a>
{{-- <a href="#" title class="google"><i class="icofont-google-plus"></i></a> --}}
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="tab-content">
<div class="tab-pane active fade show " id="posts">
<div class="row merged20">
<div class="col-lg-12">
@forelse ($content as $contents)
@if ($contents->user_id == auth()->id())

<div class="main-wraper">
    <div class="user-post">
        <div class="friend-info">
            <figure>
                <em>
                    <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path></svg></em>

                    @if($contents->user->profile)
                        <img src="{{ asset('storage/' .  $contents->user->profile) }}">
                    @else
                        <img alt src="images/LOGO/profil.jpeg">
                    @endif
            </figure>
<div class="friend-name">
    <ins><a title >{{ $contents->user->name }}</a> Has Posted</ins>
    <span><i class="icofont-globe"></i> published: {{  \Carbon\Carbon::parse($contents->created_at)->isoFormat('D MMMM YYYY') }}</span>

    <div class="more-opt" style="float:right; margin-top: -10px;">
        <span onclick="toggleDropdown({{ $contents->id }})"><i class="fas fa-ellipsis-v"></i></span>
        <ul id="dropdown-{{ $contents->id }}" style="display: none;">
            <li>
                <form action="{{ route('content.destroy', ['content' => $contents->id]) }}" method="POST" style="display:inline" id="delete-{{ $contents->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="font-size: 15px; border: none; background-color: transparent; color: #b91e1e;" onclick="swalpFunction()">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </li>
        </ul>
    </div>

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
        <div class="box">
            <div class="Like">
                @if(isset($likes) && $likes && $likes->user_id == Auth::id() && $likes->content_id == $contents->id)
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
                    border: none;
                     }"><i class="icofont-like"></i> Unlike</button>        </form>
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
                        border: none;
                         }"><i class="icofont-like"></i> Like</button>
                    </form>
                @endif
            </div>
            <a title href="{{ route('content.comment', $contents->id) }}" class="comment-to"><i class="icofont-comment"></i> Comment</a>
        </div>
    <div class="emoji-state">

        <div class="popover_wrapper">
            <div class="we-video-info">

            <ul><li>
                <span title="liked" class="liked">
                   <i class="icofont-heart" style="color: #64a4d4;"></i>
                    <ins>{{ $contents->likes_count }}</ins>
        </span>
        </li></ul>
            </div>
        </div>
    </div>



{{-- <button type="button" title class="comment-to btn" ><i class="icofont-comment"></i> Comment</button> --}}

<div class="emoji-state">

<div class="popover_wrapper">
    <div class="we-video-info">

    <ul><li>
        <span title="liked" class="liked">
           <i class="icofont-like" style="color: #64a4d4;"></i>
            <ins>{{ $contents->likes_count }}</ins>
</span>
</li></ul>
    </div>
</div>

<div class="popover_wrapper">
    <div class="we-video-info">
    <ul>
        <li>
        <span title="Comments" class="Recommend">
            <i>
                {{-- <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" /></svg></i>
                <ins>{{ $commentCount [$contents->id]}}</ins> --}}
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
@endif
@empty

<center>
    <img src="images/LOGO/datakosong.png" alt="" style="width: 60%;">
</center>
@endforelse

</div>
</div>

<div class="modal fade" id="img-comt">
<div class="modal-dialog">
<div class="modal-content">
</div>
    <div class="modal" tabindex="-1" id="tambahModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>ADD CONTENT</h6>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

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

@if (session('warning'))
    <script>
        toastr.warning("{{ session('warning') }}");
    </script>
@endif

@if (Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
@endif

<script>
function swalpFunction(message, type) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: type,
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

@if (Session::has('success'))
    swalpFunction("{{ Session::get('success') }}", "success");
@endif
</script>
<script>
    function toggleDropdown(contentId) {
        var dropdown = document.getElementById("dropdown-" + contentId);
        if (dropdown.style.display === "none") {
            dropdown.style.display = "block";
        } else {
            dropdown.style.display = "none";
        }
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.min.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="js/vivus.min.js" type="text/javascript"></script>

<script data-cfasync="true" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="dd66549c18016e84d7b048a6-|49" defer></script><script>(function(){var js = "window['__CF$cv$params']={r:'85d70aca4bd2836b',t:'MTcwOTI3NDAzNy4wNDIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script>
</body>
</html>
