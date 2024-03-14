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
                <div class="logo"><img alt src="images/LOGO/logo.png"><span>GetForums</span></div>

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

        <div class="container"><br><br>
            <a type="button" href="{{ route('home') }}" class="btn btn-primary">
                <i class="icofont-arrow-left"></i>
            </a>
            <h3>Input your comment</h3>
            <form action="{{ route('comment.store', ['contentId' => $content->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <textarea name="comment" id="comment" placeholder="....." cols="120" rows="3"
                    style="border-radius: 10px; border: 1px solid #ccc; padding: 5px;">{{ old('comment') }}</textarea>
                <button type="submit" class="btn btn-primary rounded-circle"
                    style="background-color:  rgb(40, 144, 204); width:60px; height:60px; font-size:28px; margin-top:-6%;"><i
                        class="icofont-paper-plane"></i></button>
            </form>

            <br><br>

            <div class="comment-area">
                <h4 class="comment-title">{{ $commentAll }} comments</h4>
                <ul class="comments">
                    @foreach ($comment as $comments)
                    <li>
                        <style>
                            .commenter-photo img {
                                width: 40px;
                                height: 40px;
                            }
                        </style>
                        <div class="commenter-photo">
                            @if ($user->profile)
                                <img src="{{ asset('storage/'. $user->profile) }}">
                            @else
                                <img src="{{ asset('images/LOGO/logo.png') }}">
                            @endif
                        </div>
                        <div class="commenter-meta">
                            <div class="comment-titles">
                                <h6>{{ $comments->user->name }}</h6>
                                <span>{{ \Carbon\Carbon::parse($comments->created_at)->isoFormat('D MMMM YYYY') }}</span>
                            </div>
                            <p style="word-break: break-word;">
                                {{ $comments->comment }}
                            </p>
                            <a href="{{ route('comment.reply',  $comments->id) }}" class="text-primary">Reply</a>
                        </div>
                    </li>
                    <hr>
                    @endforeach
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
    <script src="{{ asset('js/main.min.js') }}"></script>
    <script src="{{ asset('js/sparkline.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
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
</html>
