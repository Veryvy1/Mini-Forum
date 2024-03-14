    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from wpkixx.com/html/socimo-panel/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2024 02:04:02 GMT -->
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content />
    <meta name="keywords" content />
    <title>Getforums | Profile</title>
    <link rel="icon" href="images/LOGO/logo.html" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .container-fluid {
    height: 100vh;
    margin-top: 8%;
}

.row {
    display: flex;
}

.justify-content-center {
    justify-content: center;
}

.align-items-center {
    align-items: center;
}
input[type="text"] {
    align-items: center;
        width: 75%;
        padding: 10px;
        box-sizing: border-box;
}
</style>
    </head>
    <body>
    {{-- <div class="theme-layout">
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

    </div> --}}
    <header class>
        <div class="topbar stick">
        <div class="logo"><img src="{{ asset('images/LOGO/logo.png') }}" alt><span>GetForums</span></div>

        <ul class="web-elements">
        <li>
         @if(auth()->check())
        <div class="user-dp">
            <a href="#" title="View Profile">
                @if(auth()->user()->profile)
                    <img src="{{ asset('storage/' . auth()->user()->profile) }}" alt="{{ auth()->user()->name }} Profile">
                @else
                    <img src="{{ asset('images/LOGO/profile.jpeg') }}" alt="{{ auth()->user()->name }} Profile">
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
        <li><a href="#" title><i class="icofont-user-alt-3"></i> Your Profile</a></li>
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

        <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">
            <h4 class="main-title">User Profile <i class="icofont-pen-alt-1"></i></h4>
            <div class="row merged20 mb-4">
            <div class="col-lg-4">
            <div class="d-widget text-center" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);">
            <div class="user-avatar-edit">
            <figure>
            @if ($user->bgprofile)
                <img src="{{ asset('storage/' . $user->bgprofile) }}" alt="">
            @else
                <img id="preview-bgimage" src="{{ asset('images/LOGO/bguser.jpg') }}" alt="Preview Image">
            @endif
            </figure>
            <div class="fileupload">
            <span class="btn-text">edit</span>
            <input type="file" class="upload" name="bgprofile" id="bgprofile-input">
        </div>
            </div>
            <div class="user-dp-edit">
            <figure>
            @if ($user->profile)
                <img src="{{ asset('storage/' . $user->profile) }}" alt="">
            @else
                <img id="preview-image" src="{{ asset('images/LOGO/profil.jpeg') }}" alt>
            @endif
            <div class="fileupload">
            <span class="btn-text"><i class="icofont-camera"></i></span>
            <input type="file" class="upload" name="profile" id="profile-input">
        </div>
            </figure>
            <div class="users-name">
                <h5 style="text-align: center;">
                    <input type="text" id="name" name="name" value="{{ $user->name }}" style="border: none; text-align: center;  margin-bottom:-20px;">
                </h5>
            <span style="text-align: center;">
                <input type="text" id="email" name="email" value="{{ $user->email }}" style="border: none; text-align: center; margin-bottom:-20px;">
            </span>
            </div>
            </div>
            <ul class="folowerss">
            <li><span>Posts</span> <i>345</i></li>
            {{-- <li><span>Followers</span> <i>256</i></li>
            <li><span>Follow</span> <i>123</i></li> --}}
            </ul>
            {{-- <a class="button primary circle" href="#" title><i class="icofont-pen-alt-1"></i> Edit</a>
            <a class="button primary circle	danger" href="#" title><i class="icofont-ban"></i> Block</a> --}}
            </div>

            </div>
            <div class="col-lg-8" >
                <div class="d-widget mt-6" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);">
                    <div class="d-widget-title"><h5>Social Links</h5></div>
                    <div class="social-links">
                        <i class="icofont-facebook"></i>
                        <input type="text" name="link_fb" placeholder="Facebook Profile" value="{{ old('link_fb', $user->link_fb) }}">
                        <em>Add your Facebook username (e.g. johndoe).</em>
                    </div>
                    <div class="social-links">
                        <i class="icofont-instagram"></i>
                        <input type="text" name="link_ig" placeholder="Instagram Profile" value="{{ old('link_ig', $user->link_ig) }}">
                        <em>Add your Instagram username (e.g. johndoe).</em>
                    </div>
                    <div class="social-links">
                        <i class="icofont-twitter"></i>
                        <input type="text" name="link_twt" placeholder="Twitter Profile" value="{{ old('link_twt', $user->link_twt) }}">
                        <em>Add your Twitter username (e.g. johndoe).</em>
                    </div>
                </div>

                    <button type="submit" title class="button primary circle mt-3" style="margin-bottom: -5px; margin-right: auto;">Save Changes</button>
                </div>
            </div>
            </div>
            </div>
            </div>
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

    <script src="js/main.min.js" type="text/javascript"></script>
    <script src="js/vivus.min.js" type="text/javascript"></script>
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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('profile-input').addEventListener('change', function() {
            const file = this.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-image').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(file);
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('bgprofile-input').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-bgimage').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>


