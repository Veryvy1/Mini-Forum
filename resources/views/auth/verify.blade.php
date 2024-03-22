<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content />
    <meta name="keywords" content />
    <title>GetForums</title>
    <link rel="icon" href="/images/LOGO/logo.png" type="/image/png" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    {{-- <div class="page-loader" id="page-loader">
        <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>
    </div> --}}
    <div class="theme-layout gray-bg">
        <div class="container-lg-0">
            <div class="row justify-content-md-center">
                <div class="col-lg-8"><!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta name="description" content />
                        <meta name="keywords" content />
                        <title>Socimo | Social Media Network Template</title>
                        <link rel="icon" href="/images/LOGO/logo.png" type="/image/png" sizes="16x16">
                        <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
                        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
                        <link rel="stylesheet" href="{{ asset('css/color.css') }}">
                        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
                    </head>

                    <body>
                        <div class="page-loader" id="page-loader">
                            <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>
                        </div>
                        <div class="theme-layout gray-bg">
                            <div class="container-lg-0">
                                <div class="row justify-content-md-center">
                                    <div class="col-lg-8">
                                        <div class="forget-password">
                                            <figure class="logo"><img src="/images/LOGO/logo.png" alt><span>GetForums</span></figure>
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>

</div>
</div>
</div>
<figure class="bottom-mockup"><img alt src="/images/footer.png"></figure>
<div class="bottombar">
<div class="container">
<div class="row">
    <div class="col-lg-12">
        <span class>&copy; Copyright All rights reserved by GetForums 2020</span>
    </div>
</div>
</div>
</div>
</div>

<script src="{{ asset('js/main.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/sparkline.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/chart.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="8ffd2f45fdbcbc5fb7939efb-|49" defer></script>

</body>

</html>
