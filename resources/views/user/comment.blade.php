@extends('summernote')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content />
    <meta name="keywords" content />
    <title>GetForums | Comment</title>
    <link rel="icon" href="/images/LOGO/logo.png" type="image/x-icon">
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
            font-size: 19px;
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
    /* Sesuaikan ukuran gambar sesuai keinginan */
        width: 9%; /* Misalnya, gambar akan memiliki lebar 10% dari lebar kontainer */
        height: auto; /* Otomatis menghitung tinggi gambar agar proporsi gambar tidak terdistorsi */
        border-radius: 50%; /* Mengatur border-radius untuk gambar bulat */
        }
        .comment-content {
            margin-left: 50px;
            margin-top: -30px; /* mengatur jarak antara foto dan konten komentar */
        }
        .comment-content1 {
            margin-left: 30px;
            margin-top: -30px; /* mengatur jarak antara foto dan konten komentar */
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
            margin-right: 10px; /* Jarak antara tombol Reply dan Delete */
            margin-left: 50px; /* Geser tombol Reply ke kanan */
        }

        .comment-options1 a,
        .comment-options1 button {
            text-decoration: underline;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }
        .comment-options1 a {
            margin-right: 10px; /* Jarak antara tombol Reply dan Delete */
            margin-left: 20px; /* Geser tombol Reply ke kanan */
        }

p {
    height: auto;
    max-width: 25%;
    margin-right: 20%;
    display: flex;
}


    </style>
</head>

<body>
    </div>
    <div class="theme-layout">

        <header class>
            <div class="topbar stick">
                <div class="logo res"><img src="/images/LOGO/logo.png" alt><span>GetForums</span></div>

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
            <a href="#" title>
            <i>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
            </i>
            </a>
            <ul class="dropdown">
                <li>
                    <a href="{{ route('profile.profil', auth()->user()->id) }}" title="Edit Profile">
                        <i class="icofont-user-alt-3"></i> Your Profile
                    </a>
                </li>
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
            <a type="button" href="{{ route('home') }}" class="btn btn-primary" style="background-color: #2ea8dc;">
                <i class="icofont-arrow-left"></i>
            </a>
            <section>
                <div class="gap">
                <div class="container">
                <div class="row">
                <div class="offset-lg-1 col-lg-10">
                <div class="blog-detail">
                <div class="blog-title">
                <h2>{{ $content->judul }}</h2>
                </div>
                <div class="blog-details-meta">
                <figure><img src="{{ asset('storage/'. $content->gambar) }}" alt="Image"></figure>
                <div class="deskripsi" style="word-wrap: break-word; margin-top: 100px;">
                    {!! $content->deskripsi !!}
                </div>
            </p>
                <ul style="margin-top: 50px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></i>
                {{  \Carbon\Carbon::parse($content->created_at)->isoFormat('D MMMM YYYY') }}</li>

                </ul>
                <div class="tag-n-cat">
                <div class="tags">
                <span><i>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg></i> Post Categories:</span>
                <a href="#">{{ $content->kategori->kategori }}</a>
                </div>
                </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        <h3><i class="icofont-comment"></i> Input your comment</h3>
            <br>
        </br>
            <form action="{{ route('comment.store', ['contentId' => $content->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div style="position: relative;">
                    <textarea name="comment" id="summernote" placeholder="Input your comment........" cols="120" rows="2"
                        style="border-radius: 50px; border: 2px solid #ccc; padding: 12px;">
                    </textarea>
                </button>
                <button type="submit" class="btn btn-primary"
                        style="background-color: rgb(40, 144, 204); width: 100px; height: 50px; font-size: 25px; position: absolute; bottom: -58px; right: 1px;">
                        <i class="icofont-paper-plane"></i>
                    </button>
                </div>


            </form>

            <br><br>

            <div class="comment-area">
                <h4 class="comment-title">{{ $commentAll }} <i class="icofont-duotone icofont-comment"></i> comments</h4>
                <ul class="comments">
                    @foreach ($comment as $comments)
                        @if ($comments->picture)
                            <li class="comment">
                                <div class="commenter-photo">
                                    @if ($comments->user->profile)
                                        <img src="{{ asset('storage/'. $comments->user->profile) }}" width="40" height="40">
                                    @else
                                        <img src="{{ asset('images/LOGO/profil.jpeg') }}" width="40" height="40">
                                    @endif
                                </div>
                                <div class="comment-content">
                                    <div class="comment-titles">
                                        <h6>{{ $comments->user->name }}</h6>
                                        <span>{{ \Carbon\Carbon::parse($comments->created_at)->isoFormat('D MMMM YYYY') }}</span>
                                    </div>
                                    <p style="word-break: break-word;">
                                        {!! $comments->comment !!}
                                    </p>
                                </div>
                                <div class="comment-options">
                                    <a href="{{ route('comment.reply',  $comments->id) }}" class="text-primary"><i class="icofont-reply"></i>Reply</a>
                                    @if ($comments->user_id == Auth::user()->id)
                                        <form action="{{ route('comment.destroy', ['comment' => $comments->id]) }}" method="post" id="deleteForm_{{ $comments->id }}" >
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-danger"><i class="icofont-ui-delete"></i> Delete</button>
                                        </form>
                                    @endif
                                </div>
                    </li>
                    </li>

                            </li>

                        @else
                            <li>
                                <div class="commenter-photo">
                                    @if ($comments->user->profile)
                                        <img src="{{ asset('storage/'. $comments->user->profile) }}" width="40" height="40">
                                    @else
                                        <img src="{{ asset('images/LOGO/profil.jpeg') }}" width="40" height="40">
                                    @endif
                                </div>
                                <div class="comment-content1">
                                    <div class="commenter-meta">
                                        <div class="comment-titles">
                                            <h6>{{ $comments->user->name }}</h6>
                                            <span>{{ \Carbon\Carbon::parse($comments->created_at)->isoFormat('D MMMM YYYY') }}</span>
                                        </div>
                                        <p style="word-break: break-word;">
                                            {!! $comments->comment !!}
                                        </p>
                                    </div>
                                    <div class="comment-options1">
                                        <a href="{{ route('comment.reply',  $comments->id) }}" class="text-primary"><i class="icofont-reply"></i> Reply</a>
                                        @if ($comments->user_id == Auth::user()->id)
                                            <form action="{{ route('comment.destroy', ['comment' => $comments->id]) }}" method="post" id="deleteForm_{{ $comments->id }}" >
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="text-danger" style="border: none; background-color: #ffff">
                                                    <i class="icofont-ui-delete"></i> Delete
                                                </button>
                                </form>
                                </form>
                            {{-- <button onclick="deleteComment({{ $comments->id }})" type="button" class="text-danger" style="border: none; background-color: #ffff">Delete</button> --}}
                                            </form>
                            {{-- <button onclick="deleteComment({{ $comments->id }})" type="button" class="text-danger" style="border: none; background-color: #ffff">Delete</button> --}}
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <hr> <!-- Buat baris pemisah antar komentar -->
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
    <script>
        $(document).ready(function() {
            // Initialize Summernote
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

            // Set old value
            var oldIsiValue = {!! json_encode(old('isi')) !!};
            $('#summernote').summernote('code', oldIsiValue);

            // Function to handle form submission
            function submitForm() {
                var content = $('#summernote').summernote('code');
                // Perform any actions needed with the content, like form submission
                // Example: sending content via AJAX
                $.ajax({
                    url: '/submit-url',
                    method: 'POST',
                    data: { content: content },
                    success: function(response) {
                        // Handle success response
                        console.log('Content submitted successfully');
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error('Error submitting content:', error);
                    }
                });
            }

            // Attach submitForm function to the submit button click event
            $('#submitBtn').click(function() {
                submitForm();
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

    <script>
        function deleteComment(commentId) {
            if (confirm('Are you sure you want to delete this comment?')) {
                window.location.href = '{{ route("comment.destroy", ["comment" => ":comment"]) }}'.replace(':comment', commentId);
            }
        }
    </script>

    <script>
        function handleFileUpload() {
            document.getElementById('fileInput').click();
        }
    </script>

    <script src="{{ asset('js/main.min.js') }}"></script>
    <script src="{{ asset('js/sparkline.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
            function submitForm(button) {
                form.submit();
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
