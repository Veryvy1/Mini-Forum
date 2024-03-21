@extends('summernote')
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content />
<meta name="keywords" content />
<title>GetForums | Social Media </title>
<link rel="icon" href="images/LOGO/logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="socimo/css/main.min.css">
<link rel="stylesheet" href="socimo/css/style.css">
<link rel="stylesheet" href="socimo/css/color.css">
<link rel="stylesheet" href="socimo/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<style>
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
        <a href="{{ route('profile.profil', auth()->user()->id) }}" title="Profile">
            <i class="icofont-user-alt-3"></i> Your Profile
        </a>
    </li>
<li><a href="#" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahModal" type="button">
    <i class="icofont-plus"></i>Add Content</a></a>
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

<section>
<div class="gap">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div id="page-contents" class="row merged20">
<div class="col-lg-3">
<aside class="sidebar static left">
<div class="widget whitish low-opacity">
<img src="images/time-clock.png" alt>
<div class="bg-image" style="background-image: url(images/resources/time-bg.jpg)"></div>
<div class="date-time">
<div class="realtime">
<span id="hours">00</span>
<span id="point">:</span>
<span id="min">00</span>
<span id="point">:</span>
<span id="sec">00</span>
</div>
<span id="date"></span>
</div>
</div>
</aside>
</div>

<div class="col-lg-6">

    <div class="main-wraper">
        <span class="new-title">Create New Post</span>
        <div class="text-center">
            <a href="#" class="btn btn-primary btn-lg rounded-pill" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahModal" type="button" style="background-color: #2ea8dc; width: 200px; border: none;">
                <i class="icofont-plus text-white"></i>
            </a>
        </div>
        <div class="new-post">
        <form method="post">
        </form>

        </div>
        </div>

        @if ($content->isEmpty())
        <center>
            <img src="{{ asset('images/LOGO/datakosong.png') }}" alt="" style="width: 60%;">
        </center>
    @else

    @forelse ($content as $contents)

    <div class="main-wraper">
        <div class="user-post">
            <div class="friend-info">
                <figure style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; position: relative;">
                    @if($contents->user->profile)
                    <img src="{{ asset('storage/' .  $contents->user->profile) }}" style="width: 100%; height: 100%; object-fit: cover;">
                    @else
                    <img src="images/LOGO/profil.jpeg" alt style="width: 100%; height: 100%; object-fit: cover;">
                    @endif
                </figure>
                    {{-- <em>
                        <svg style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                            <path fill="#7fba00" stroke="#7fba00" d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"></path>
                        </svg>
                    </em> --}}
    <div class="friend-name">
        <ins><a title >{{ $contents->user->name }}</a> Has Posted</ins>
        <span><i class="icofont-globe"></i> published: {{  \Carbon\Carbon::parse($contents->created_at)->isoFormat('D MMMM YYYY') }}</span>
    </div>
    <div class="post-meta">
        <figure>
            <a href="{{ route('content.detail', ['content' => $contents->id]) }}">
                <img src="{{ asset('storage/' . $contents->gambar) }}" style="" alt>
            </a>
        </figure>
    <a href="{{ route('content.detail', ['content' => $contents->id]) }}" class="post-title">
        @if(strlen($contents->judul) > 45)
        {{ substr($contents->judul, 0, 45) }}...
    @else
        {{ $contents->judul }}
    @endif</a>
    {{-- <p>
        <div style="height: 100px; width: 100%; overflow: hidden; text-overflow: ellipsis;">
            @if (strlen(strip_tags($contents->deskripsi)) > 60)
             {!! Illuminate\Support\Str::limit(strip_tags($contents->deskripsi), 60, '...') !!}
             @else
             {!! $contents->deskripsi !!}
             @endif
        </div>

    </p> --}}
    <p>Categories: {{ optional($contents->kategori)->kategori }},</p>


<div class="we-video-info">
<div class="stat-tools">
<div class="box">
    <div class="Like">
        @if($likes && $likes->where('user_id', Auth::id())->where('content_id', $contents->id)->count() > 0)
                    <form action="{{ route('like.destroy', $likes->where('user_id', Auth::id())->where('content_id', $contents->id)->first()->id) }}" method="post">
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
                        background: #ff0000;
                        border-radius: 4px;
                        color: #ffffff;
                        display: inline-block;
                        font-size: 13px;
                        padding: 5px 20px;
                        vertical-align: middle;
                        transition: all 0.2s linear 0s;
                        border: none;
                        }"><i class="icofont-like"></i> Unlike</button>
                    </form>
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
                        background: #0099ff;
                        border-radius: 4px;
                        color: #ffffff;
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
</div>

<a title href="{{ route('content.comment', $contents->id) }}" class="comment-to"><i class="icofont-comment"></i> Comment</a>
<div class="emoji-state">

    <div class="popover_wrapper">
        <div class="we-video-info">
        <ul><li>
            <span title="liked" class="liked">
               <i class="icofont-like" style="color: #64a4d4;"></i>
                <ins>{{ $likesCount[$contents->id] }}</ins>
            </span>
        </li></ul>
        </div>
    </div>

<div class="popover_wrapper">
    <div class="we-video-info">
    <ul><li>
        <span title="Comments" class="Recommend">
            <i>
                <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" /></svg></i>
                <ins>{{ $commentCount [$contents->id]}}</ins>
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
@endforeach
@endif

<div class="pagination">
    {{ $content->links('vendor.sweetalert.pagination') }}
</div>

    </div>
    <div class="col-lg-3">
        <div class="main-wraper">
            <span class="new-title">Search Post</span>
            <div class="new-post">
                <form id="searchForm" value="{{ $oldSearch }}" action="{{ route('home.search') }}" method="get">
                    @csrf
                    <i class="icofont-search"></i>
                    <input  type="search" name="search" value="{{ $oldSearch }}" class="form-control" placeholder="Search..." oninput="submitSearch()">
                </form>
            </div>
        </div>

<aside class="sidebar static right">
    <div class="widget">
        <form action="{{ route('home.filter') }}" method="GET">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="widget-title"><b>Category</b></h4>
                <button type="submit" class="btn btn-primary" style="background-color: #2ea8dc; border:none;">Filter</button>
            </div>
            @php
              $kategori_ids = isset($kategori_ids) ? $kategori_ids : [];
            @endphp
            @foreach ($kategori as $key => $category)
                <input type="checkbox" id="category{{ $category->id }}" name="kategori_id[]" value="{{ $category->id }}" @if(in_array($category->id, (array)$kategori_ids)) checked @endif>
                <label for="category{{ $category->id }}" class="large-label">
                    {{ $category->kategori }}
                </label><br>
            @endforeach
        </form>
    </div>
</aside>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<figure class="bottom-mockup"><img src="images/footer.png" alt></figure>
<div class="bottombar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<span class>&copy; copyright All rights reserved by GetForums 2024</span>
</div>
</div>
</div>
</div>

<style>
    .post-new-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }
</style>

<div class="modal" tabindex="-1" id="tambahModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="m-0 font-weight-bold">Add Content</h6>
            </div>
            <div class="modal-body">
                <div id="searchResultsContainer"></div>
                <form action="{{ route('user.content.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="judul" class="form-label">Title</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}">
                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Description</label>
                        <textarea name="deskripsi" id="summernote" class="custom-summernote" aria-label="With textarea">{{ old('deskripsi') }}</textarea>
                    @section('scripts')
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
                    });
                    </script>
                    @endsection
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Image</label>
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{ old('gambar') }}">
                        @error('gambar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategoris" class="form-label">Category</label><br>
                        <select class="form-control @error('kategori_id') is-invalid @enderror" id="kategoris" name="kategori_id" aria-label="Default select example">
                            <option value="" selected>Select Category</option>
                            @foreach ($kategori as $kat)
                                <option value="{{ $kat->id }}" {{ old('kategori_id') == $kat->id ? 'selected' : '' }}>
                                    {{ $kat->kategori }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-primary">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="addContactModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContactModalLabel">Add Contact</h5>
            </div>
            <div class="modal-body">
                <div id="searchResultsContainer"></div>
                <form id="addContactForm" action="{{ route('contact.index') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="messages" class="form-label">Messages</label>
                        <textarea type="text" class="form-control @error('messages') is-invalid @enderror" id="messages" name="messages" >{{ old('messages') }}</textarea>
                        @error('messages')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" form="addContactForm" class="btn btn-primary">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
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

<script>
    function submitSearch() {
        document.getElementById("searchForm").submit();
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        console.log("Script is executing!");
        document.getElementById('createPostInput').addEventListener('click', function() {
            console.log("Input clicked!");
            document.getElementById('postPopup').style.display = 'block';
        });
    });
</script>

<script>
    function showLogoutAlert() {
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Anda yakin ingin keluar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Keluar!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {

            Swal.fire(
                'Logout Berhasil',
                'Anda telah berhasil logout.',
                'success'
            );
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire(
                'Logout Dibatalkan',
                'Anda membatalkan logout.',
                'error'
            );
        }
        });
    }
</script>

<script>
    function submitSearch() {
        document.getElementById("searchForm").submit();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.min.js" type="text/javascript"></script>
<script src="js/date-time.js" type="text/javascript"></script>
<script src="js/script.js" type="b792af529d8fc78a3581caf5-text/javascript"></script>

<script>
    $(document).ready(function() {
    $('.btn-like').on('click', function() {
        var contentId = $(this).closest('.like-button').data('content-id');

        $.ajax({
            url: '/content/' + contentId + '/like',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log('Like berhasil');
            },
            error: function(xhr, status, error) {
                console.error('Gagal melakukan like:', error);
            }
        });
    });
});
</script>
<script>
    let posts = [];

    function submitPost() {
        const postInput = document.getElementById('postInput').value;

        if (postInput.trim() !== '') {
            const post = {
                content: postInput,
                likes: 0,
                liked: false
            };

            posts.push(post);
            renderPosts();
            document.getElementById('postInput').value = '';
        }
    }

    function toggleLike(index) {
        posts[index].liked = !posts[index].liked;

        if (posts[index].liked) {
            posts[index].likes++;
        } else {
            posts[index].likes--;
        }

        renderPosts();
    }

    function renderPosts() {
        const postList = document.getElementById('postList');
        postList.innerHTML = '';

        posts.forEach((post, index) => {
            const postElement = document.createElement('div');
            postElement.classList.add('post');
            postElement.innerHTML = `
                <p>${post.content}</p>
                <div class="like" onclick="toggleLike(${index})">
                    <a class="like__link"><i class="icofont-like${post.liked ? ' liked' : ''}"></i> <span>${post.likes}</span> Like</a>
                </div>
            `;
            postList.appendChild(postElement);
        });
    }
</script>
</body>
</html>
