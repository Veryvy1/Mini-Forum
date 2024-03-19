<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums | login</title>
<link rel="icon" href="images/LOGO/logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="socimo/css/main.min.css">
<link rel="stylesheet" href="socimo/css/style.css">
<link rel="stylesheet" href="socimo/css/color.css">
<link rel="stylesheet" href="socimo/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="theme-layout">
<div class="authtication">
    <img src="images/LOGO/bgLogin.png" alt="">

</div>
<div class="auth-login">
<div class="logo"><img src="images/LOGO/logo.png" alt><span>GetForums</span></div>
<div class="verticle-center">
<div class="login-form">
<h4>Welcome back </h4>
<span>GetForums!</span>
    <form method="POST" class="c-form" action="{{ route('login') }}">
        @csrf
<div class="fileds">
<label class="input-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></label>
<input type="text" name="email" placeholder="Email @">
@error('email')
    <div class="text-danger">{{ $message }}</div>
@enderror
</div>
<div class="fileds">
<label class="input-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></label>
<input type="password" name="password" placeholder="xxxxxxxxxx">
@error('password')
    <div class="text-danger">{{ $message }}</div>
@enderror
</div>
<div class="checkbox">
<input type="checkbox" id="checkbox" checked>
<label for="checkbox"><span>Remember Me</span></label>
<a href="{{ route('password.request') }}" title>forgot password</a>
</div>
<button class="main-btn" type="submit">Login</button>
<span class="no-account">If don't have an account? <a href="{{ route('register') }}">Signup</a></span>
</form>

<div class="bottambar2">
</div>
</div>
</div>
<div class="mockup right"><img src="images/star-shape.png" alt></div>
</div>
</div>
<?php if ($errors->any()): ?>
    <script>
        toastr.error("<?php foreach ($errors->all() as $error) echo $error . '\n'; ?>");
    </script>
<?php endif; ?>

<?php if (session('warning')): ?>
    <script>
        toastr.warning("<?php echo session('warning'); ?>");
    </script>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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

<?php if (Session::has('success')): ?>
<script>
    toastr.success("<?php echo Session::get('success'); ?>");
</script>
<?php endif; ?>

<script src="js/main.min.js" type="a2204abaa3f10749f80d57d8-text/javascript"></script>
<script src="js/script.js" type="a2204abaa3f10749f80d57d8-text/javascript"></script>
<foreignObject><script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="a2204abaa3f10749f80d57d8-|49" defer></script></foreignObject><script>(function(){var js = "window['__CF$cv$params']={r:'85d70ae00ca3836b',t:'MTcwOTI3NDA0MC41MjMwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/a0d8959cb7d0/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>
