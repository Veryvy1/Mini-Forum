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
                <div class="col-lg-8">
                    <div class="forget-password">
                        <figure class="logo"><img src="/images/LOGO/logo.png" alt><span>GetForums</span></figure>
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #2ea8dc; margin-right: 10px;">
                                    {{ __('Send Password Reset Link') }}
                                </button><span>Go back to <a href="{{ route('login') }}"><span style="color: #2ea8dc;">Sign In</span></a></span>

                            </div>
                        </div>

                    </form>

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
                    <span class>&copy; Copyright All rights reserved by GetForums 2023</span>
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
