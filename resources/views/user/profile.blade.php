<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/socimo-panel/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:02 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>socimo | Dashboard</title>
<link rel="icon" href="images/fav.html" type="image/png" sizes="16x16">
<link rel="stylesheet" href="css/main.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/color.css">
<link rel="stylesheet" href="css/responsive.css">

</head>
<body>
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

</div>
<header class>
    <div class="topbar stick">
    <div class="logo"><img src="images/LOGO/logo.png" alt><span>GetForums</span></div>

    <ul class="web-elements">
    <li>
    <div class="user-dp">
    <a href="profile-page2.html" title>
    <img alt src="images/resources/user.jpg">
    <div class="name">
    <h4>Danial Cardos</h4>
    </div>
    </a>
    </div>
    </li>
    <li>
    <a href="#" title>
    <i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
    </i>
    </a>
    <ul class="dropdown">
    <li><a href="{{ route('user_profile') }}" title><i class="icofont-user-alt-3"></i> Your Profile</a></li>
    <li><a href="add-new-course.html" title><i class="icofont-plus"></i>Latest Content</a></li>
    <li><a class="invite-new" href="#" title><i class="icofont-brand-slideshare"></i>Sugestion</a></li>
    <li class="logout">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="icofont-power"></i> Logout
        </a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </ul>
    </div>
    </header>

    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from wpkixx.com/html/socimo-panel/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:02 GMT -->
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content />
    <meta name="keywords" content />
    <title>socimo | Dashboard</title>
    <link rel="icon" href="images/fav.html" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

    </head>
    <body>
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

    </div>
    <header class>
        <div class="topbar stick">
        <div class="logo"><img src="images/LOGO/logo.png" alt><span>GetForums</span></div>

        <ul class="web-elements">
        <li>
        <div class="user-dp">
        <a href="profile-page2.html" title>
        <img alt src="images/resources/user.jpg">
        <div class="name">
        <h4>Danial Cardos</h4>
        </div>
        </a>
        </div>
        </li>
        <li>
        <a href="#" title>
        <i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
        </i>
        </a>
        <ul class="dropdown">
        <li><a href="{{ route('user_profile') }}" title><i class="icofont-user-alt-3"></i> Your Profile</a></li>
        <li><a href="add-new-course.html" title><i class="icofont-plus"></i>Latest Content</a></li>
        <li><a class="invite-new" href="#" title><i class="icofont-brand-slideshare"></i>Sugestion</a></li>
        <li class="logout">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="icofont-power"></i> Logout
            </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </ul>
        </div>
        </header>

        <form action="{{ isset($user) ? route('profile.update', ['id' => $user->id]) : '#' }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
        @csrf

        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-content">
                    <h4 class="main-title">User Profile <i class="icofont-pen-alt-1"></i></h4>
                    <div class="row merged20 mb-4">
                        <div class="col-lg-4">
                            <div class="d-widget text-center">
                                <div class="user-avatar-edit">
                                    <figure><img src="images/resources/user-mockupbg.jpg" alt></figure>
                                    <div class="fileupload">
                                        <span class="btn-text">edit</span>
                                        <input type="file" class="upload">
                                    </div>
                                </div>
                                <div class="user-dp-edit">
                                    <figure>
                                        <img src="images/resources/admin.jpg" alt>
                                        <div class="fileupload">
                                            <span class="btn-text"><i class="icofont-camera"></i></span>
                                            <input type="file" name="profile" id="profile" class="upload">
                                        </div>
                                    </figure>
                                    <div class="users-name">
                                        <h5>Madalyn Rascon</h5>
                                        <span>Developer Geek</span>
                                    </div>
                                </div>
                                <ul class="folowerss">
                                    <li><span>Posts</span> <i>345</i></li>
                                    <li><span>Followers</span> <i>256</i></li>
                                    <li><span>Follow</span> <i>123</i></li>
                                </ul>
                                <a class="button primary circle" href="#" title><i class="icofont-pen-alt-1"></i> Edit</a>
                                <a class="button primary circle danger" href="#" title><i class="icofont-ban"></i> Block</a>
                            </div>
                            <div class="d-widget mt-4">
                                <div class="d-widget-title"><h5>Social Links</h5></div>
                                <div class="social-links">
                                    <i class="icofont-facebook"></i>
                                    <input type="text" placeholder="Facebook Profile">
                                    <em>Add your Facebook username (e.g. johndoe).</em>
                                </div>
                                <div class="social-links">
                                    <i class="icofont-instagram"></i>
                                    <input type="text" placeholder="Instagram Profile">
                                    <em>Add your Instagram username (e.g. johndoe).</em>
                                </div>
                                <div class="social-links">
                                    <i class="icofont-twitter"></i>
                                    <input type="text" placeholder="Twitter Profile">
                                    <em>Add your Twitter username (e.g. johndoe).</em>
                                </div>
                                <div class="social-links">
                                    <i class="icofont-pinterest"></i>
                                    <input type="text" placeholder="Pinterest Profile">
                                    <em>Add your Pinterest username (e.g. johndoe).</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" title class="button primary circle mt-5">Save Changes</a>
    </form>
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
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script src="js/main.min.js" type="fd0c1240374019ed17673e95-text/javascript"></script>
    <script src="js/vivus.min.js" type="fd0c1240374019ed17673e95-text/javascript"></script>
    <script src="js/script.js" type="fd0c1240374019ed17673e95-text/javascript"></script>

    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="fd0c1240374019ed17673e95-|49" defer></script><script>(function(){var js = "window['__CF$cv$params']={r:'85d591f259b79e29',t:'MTcwOTI1ODYwMS41MzIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

    <!-- Mirrored from wpkixx.com/html/socimo-panel/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:31 GMT -->
    </html>
    <script>
        function previewImage(){
            var input = document.getElementById('avatarFile');
            var preview = document.getElementById('avatarPreview');

            if (input,files.length > 0){
                var file = input.files[0];
                var reader = new FileReader();

                reader.onloadend = function(){
                    preview.src = reader.result;
                    preview.style.borderRadius = '50%';
                    preview.style.width = '100%';
                    preview.style.height = '100%';
                }
                reader.readAsDataURL(file);

            }else{
                preview.src = '{{ asset('images/LOGO/logo.png') }}';
                preview.style.borderRadius = '50%';
                preview.style.width = '100%';
                preview.style.height = '100%';
            }

        }
    </script>
<form action="{{ isset($user) ? route('profile.update', ['id' => $user->id]) : '#' }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-content">
                    <h4 class="main-title">User Profile <i class="icofont-pen-alt-1"></i></h4>
                    <!-- Your Profile Content Goes Here -->
                    <div class="d-widget mt-4">
                        <div class="d-widget-title"><h5>Social Links</h5></div>
                        <div class="social-links">
                            <i class="icofont-facebook"></i>
                            <input type="text" name="facebook_link" placeholder="Facebook Profile" value="{{ old('facebook_link') }}">
                            <em>Add your Facebook username (e.g. johndoe).</em>
                        </div>
                        <div class="social-links">
                            <i class="icofont-instagram"></i>
                            <input type="text" name="instagram_link" placeholder="Instagram Profile" value="{{ old('instagram_link') }}">
                            <em>Add your Instagram username (e.g. johndoe).</em>
                        </div>
                        <div class="social-links">
                            <i class="icofont-twitter"></i>
                            <input type="text" name="twitter_link" placeholder="Twitter Profile" value="{{ old('twitter_link') }}">
                            <em>Add your Twitter username (e.g. johndoe).</em>
                        </div>
                        <div class="social-links">
                            <i class="icofont-pinterest"></i>
                            <input type="text" name="pinterest_link" placeholder="Pinterest Profile" value="{{ old('pinterest_link') }}">
                            <em>Add your Pinterest username (e.g. johndoe).</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" title class="button primary circle mt-5">Save Changes</a>
</form>
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
    </div>
</div>
</div>
</div>
</div>
</div>

<script src="js/main.min.js" type="fd0c1240374019ed17673e95-text/javascript"></script>
<script src="js/vivus.min.js" type="fd0c1240374019ed17673e95-text/javascript"></script>
<script src="js/script.js" type="fd0c1240374019ed17673e95-text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="fd0c1240374019ed17673e95-|49" defer></script><script>(function(){var js = "window['__CF$cv$params']={r:'85d591f259b79e29',t:'MTcwOTI1ODYwMS41MzIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

<!-- Mirrored from wpkixx.com/html/socimo-panel/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:31 GMT -->
</html>
<script>
    function previewImage(){
        var input = document.getElementById('avatarFile');
        var preview = document.getElementById('avatarPreview');

        if (input,files.length > 0){
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function(){
                preview.src = reader.result;
                preview.style.borderRadius = '50%';
                preview.style.width = '100%';
                preview.style.height = '100%';
            }
            reader.readAsDataURL(file);

        }else{
            preview.src = '{{ asset('images/LOGO/logo.png') }}';
            preview.style.borderRadius = '50%';
            preview.style.width = '100%';
            preview.style.height = '100%';
        }

    }
</script>

