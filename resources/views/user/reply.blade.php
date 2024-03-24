@extends('summernote')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content />
    <meta name="keywords" content />
    <title>GetForums | Reply</title>
    <link rel="icon" href="/images/LOGO/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('socimo/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('socimo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('socimo/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('socimo/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .comment-area {
            margin-top: 20px;
        }
        .comment-title {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .comments {
            list-style-type: none;
            padding: 0;
        }
        .comment {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }
        .commenter-photo img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .comment-content {
            margin-left: 50px;
            margin-top: -30px;
        }
        .comment-content1 {
            margin-left: 30px;
            margin-top: -30px;
        }
        .comment-options {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }
        .comment-options1 {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }
        .comment-options a,
        .comment-options button {
            text-decoration: underline;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }
        .comment-options a {
            margin-right: 10px;
            margin-left: 50px;
        }
        .comment-options1 a,
        .comment-options1 button {
            text-decoration: underline;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }
        .comment-options1 a {
            margin-right: 10px;
            margin-left: 20px;
        }
        h5{
            height: auto;
            max-width: 25%;
        }
    </style>
</head>

<body>
    </div>
    <div class="theme-layout">
        <header class>
            <div class="topbar stick">
                <div class="logo"><img alt src="/images/LOGO/logo.png"><span>GetForums</span></div>

            <ul class="web-elements">
            <li>
             @if(auth()->check())
            <div class="user-dp">
                <div style="display: flex; align-items: center;">
                    <div style="width: 25px; height: 25px; border-radius: 50%; overflow: hidden; margin-right: 10px;">
                        <a href="{{ route('profile.profil', auth()->user()->id) }}" title="Edit Profile">
                            @if(auth()->user()->profile)
                                <img src="{{ asset('storage/' . auth()->user()->profile) }}" alt="{{ auth()->user()->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <img src="{{ asset('images/LOGO/profil.jpeg') }}" alt="{{ auth()->user()->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @endif
                        </a>
                    </div>
                <div class="name">
                    <h4>{{ auth()->user()->name }}</h4>
                </div>
            </div>
            @endif
            </li>
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
            <li class="logout">
                <form  action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <button class="btn btn-outline-primary w-100" onclick="showLogoutAlert()" >
                        <i class="icofont-power"></i> Logout
                    </button>
                    </script>
                </form>
            </li>
            </ul>
            </div>
            </header>
        <div class="container"><br><br>
            <a href="{{ route('content.comment', $comment->content_id) }}" class="btn btn-primary" style="background-color: #2ea8dc;">
                <i class="icofont-arrow-left"></i>
            </a>
            <br>
            <br>
                <style>
                    .commenter-photo img {
                        width: 40px;
                        height: 40px;
                    }
                </style>
                <div class="commenter-photo">
                    @if ($comment->user->profile)
                        <img src="{{ asset('storage/'. $comment->user->profile) }}">
                    @else
                        <img src="{{ asset('images/LOGO/profil.jpeg') }}">
                    @endif
                </div>
                <div class="comment-content1">
                    <div class="commenter-meta">
                        <div class="comment-titles">
                            <h6>{{ $comment->user->name }}</h6>
                            <span>
                                @if($comment->created_at->diffInWeeks() >= 1)
                                {{  \Carbon\Carbon::parse($comment->created_at)->isoFormat('D MMMM YYYY') }}
                                @else
                                {{ $comment->created_at->diffForHumans() }}
                            @endif
                            </span>
                        </div>
                        <p style="word-break: break-word;">
                            {!! $comment->comment !!}
                        </p>
                    </div>
                </div>


            <h3><i class="icofont-reply"></i>Input your reply comment</h3>
            <br>
            <form action="{{ route('reply.store', ['commentId' => $comment->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div style="position: relative;">
                    <textarea name="reply" id="summernote" placeholder="Input your reply........" cols="120" rows="2"
                        style="border-radius: 50px; border: 2px solid #ccc; padding: 12px;">{{ old('reply') }}
                    </textarea>
                    <button type="submit" class="btn btn-primary"
                    style="background-color: rgb(40, 144, 204); width: 100px; height: 50px; font-size: 25px; position: absolute; bottom: -58px; right: 1px;">
                    <i class="icofont-paper-plane"></i>
                </button>
                </div>
            </form>
            <br><br>
            <div class="comment-area">
                <h4 class="comment-title">{{ $replyAll }} <i class="icofont-ui-text-loading"></i>  Replies</h4>
                <ul class="comments">
                    @foreach ($reply as $replies)
                    @if ($replies->picture)
                    <li>
                        <style>
                            .commenter-photo img {
                                width: 40px;
                                height: 40px;
                            }
                        </style>
                        <div class="commenter-photo">
                            @if ($replies->user->profile)
                                <img src="{{ asset('storage/'. $replies->user->profile) }}">
                            @else
                                <img src="{{ asset('images/LOGO/profil.jpeg') }}">
                            @endif
                        </div>
                        <div class="comment-content">
                        <div class="commenter-meta">
                            <div class="comment-titles">
                                <h6>{{ $replies->user->name }}</h6>
                                <span>
                                    @if($replies->created_at->diffInWeeks() >= 1)
                                    {{  \Carbon\Carbon::parse($replies->created_at)->isoFormat('D MMMM YYYY') }}
                                    @else
                                    {{ $replies->created_at->diffForHumans() }}
                                @endif
                                </span>
                            </div>
                            <p style="word-break: break-word;">
                                {!! $replies->reply !!}
                            </p>
                        </div>
                            <div class="comment-options1">
                                <a href="#" class="reply-btn text-primary">Reply</a>
                                @if ($replies->user_id == Auth::user()->id)
                            <form action="{{ route('reply.destroy',['reply' => $replies]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-danger" style="border: none; background-color: #ffff" onclick="swalpFunction()">Delete</button>
                            </form>
                        </div>
                        </div>
                        </div>
                            @endif
                        </div>
                    </li>
                    <hr>
                    @else
                    <li>
                        <style>
                            .commenter-photo img {
                                width: 40px;
                                height: 40px;
                            }
                        </style>
                        <div class="commenter-photo">
                            @if ($replies->user->profile)
                                <img src="{{ asset('storage/'. $replies->user->profile) }}">
                            @else
                                <img src="{{ asset('images/LOGO/profil.jpeg') }}">
                            @endif
                        </div>
                        <div class="commenter-meta">
                            <div class="comment-titles">
                                <h6>{{ $replies->user->name }}</h6>
                                <span>
                                    @if($replies->created_at->diffInWeeks() >= 1)
                                    {{  \Carbon\Carbon::parse($replies->created_at)->isoFormat('D MMMM YYYY') }}
                                    @else
                                    {{ $replies->created_at->diffForHumans() }}
                                @endif
                                </span>
                            </div>
                            <p style="word-break: break-word;">
                                <h5>{!! $replies->reply !!}</h5>
                            </p>
                        </div>
                        <div class="comment-options1">
                            <a href="#" class="reply-btn text-primary" data-reply="{{ $replies->reply }}"
                                data-username="{{ $replies->user->name }}">Reply</a>
                            @if ($replies->user_id == Auth::user()->id)
                            <form action="{{ route('reply.destroy',['reply' => $replies]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-danger" style="border: none; background-color: #ffff" onclick="swalpFunction()"><i class="icofont-ui-delete"></i>Delete</button>
                            </form>
                            @endif

                    </li>
                    <hr>
                    @endif
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


    @section('scripts')
    @parent
    <script>
        $(document).ready(function() {

            $('#summernote').summernote({
                placeholder: 'Isi content...',
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            // Set nilai Summernote dengan data lama jika ada
            var oldIsiValue = {!! json_encode(old('isi')) !!};
            $('#summernote').summernote('code', oldIsiValue);

            $('.reply-btn').click(function(event) {
                event.preventDefault();
                var replyText = $(this).data('reply');
                var username = $(this).data('username');
                var currentText = $('#summernote').summernote('code');
                $('#summernote').summernote('code', "@" + username + " " + currentText);
                $('#summernote').summernote('focus');
            });
        });
    </script>
    @endsection


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

    <script src="{{ asset('js/main.min.js') }}"></script>
    <script src="{{ asset('js/sparkline.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        function deleteReply(replyId) {
            if (confirm('Are you sure you want to delete this comment?')) {
                window.location.href = '{{ route("reply.destroy", ["reply" => ":reply"]) }}'.replace(':reply', replyId);
            }
        }
    </script>

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
