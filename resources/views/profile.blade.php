@extends('summernote')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>GetForums | Profile</title>
        <link rel="icon" href="images/LOGO/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
        <link rel="stylesheet" href="socimo/css/style.css">
        <link rel="stylesheet" href="socimo/css/color.css">
        <link rel="stylesheet" href="socimo/css/responsive.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .friend-info em {
            position: absolute;
            bottom: 11rem;
            left: 38px;
            transform: translateX(-50%);
        }
        .friend-info em svg {
            vertical-align: middle;
        }
        .group-dp {
            width: 137px;
            height: 137px;
            border-radius: 50%;
            overflow: hidden;
        }
        .group-dp img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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
                <i class="icofont-user-alt-3"></i> Edit Profile
            </a>
        </li>
        <li><a href="#" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahModal" type="button">
            <i class="icofont-plus"></i>Latest Content</a></a>
        </li>
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
        @if ($user->bgprofile)
    <img style="object-fit: cover; width:1000px; height:300px;" src="{{ asset('storage/' . $user->bgprofile) }}">
    @else
    <img style="object-fit: cover; width:1000px; height:300px;" src="{{ asset('images/LOGO/bguser.jpg') }}" alt >
    @endif
    <a href="{{ route('profile.edit', auth()->user()->id) }}" class="btn btn-primary" style="color: #000; background-color: #fff; border: none;">Edit</a>
    <figure class="group-dp">
        @if ($user->profile)
        <img src="{{ asset('storage/' . $user->profile) }}"  alt="Profile Image">
    @else
        <img id="preview-image" src="{{ asset('images/LOGO/profil.jpeg') }}" alt="Default Profile Image">
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
    @if ($user->link_fb)
    <a href="{{ $user->link_fb }}" title class="facebook"><i class="icofont-facebook"></i></a>
    @endif
    @if ($user->link_ig)
    <a href="{{ $user->link_ig }}" title class="instagram"><i class="icofont-instagram"></i></a>
    @endif
    @if ($user->link_twt )
    <a href="{{ $user->link_twt }}" title class="twitter"><i class="icofont-twitter"></i></a>
    @endif
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
                <figure style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; position: relative;">
                    @if($contents->user->profile)
                    <img src="{{ asset('storage/' .  $contents->user->profile) }}" style="width: 100%; height: 100%; object-fit: cover;">
                    @else
                    <img src="images/LOGO/profil.jpeg" alt style="width: 100%; height: 100%; object-fit: cover;">
                    @endif
                </figure>
    <div class="friend-name">
        <ins><a title >{{ $contents->user->name }}</a> Has Posted</ins>
        <span><i class="icofont-globe"></i> published:
            @if($contents->created_at->diffInWeeks() >= 1)
            {{  \Carbon\Carbon::parse($contents->created_at)->isoFormat('D MMMM YYYY') }}
            @else
            {{ $contents->created_at->diffForHumans() }}
        @endif        </span>
            <div class="more-opt" style="float:right; margin-top: -10px;">
            <span onclick="toggleDropdown({{ $contents->id }})"><i class="fas fa-ellipsis-v"></i></span>
            <ul id="dropdown-{{ $contents->id }}" style="display: none;">
                <button type="button" title  style="font-size: 15px;  background-color:#fff; border:none;" data-bs-toggle="modal" data-bs-target="#editModal{{ $contents->id }}">
                    <i class="icofont-pen-alt-1" style="color: #dca02f"></i> Edit
                </button>
                <li>
                    <form action="{{ route('content.destroy', ['content' => $contents->id]) }}" method="POST" style="display:inline" id="delete-{{ $contents->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" style="font-size: 15px; border: none; background-color: transparent; color: #b91e1e;" onclick="deleteContent('{{ $contents->id }}')">
                        <button type="button" style="font-size: 15px; border: none; background-color: transparent; color: #b91e1e;" onclick="deleteContent('{{ $contents->id }}')">
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
        <a href="{{ route('content.detail', ['content' => $contents->id]) }}" class="post-title">
    @if(strlen($contents->judul) > 45)
       {{ substr($contents->judul, 0, 45) }}...
    @else
       {{ $contents->judul }}
    @endif</a>
    <p>
    @if (strlen(strip_tags($contents->deskripsi)) > 60)
    {!! Illuminate\Support\Str::limit(strip_tags($contents->deskripsi), 60, '...') !!}
    @else
    {!! $contents->deskripsi !!}
    @endif
    </p>
    <p>Categories: {{ optional($contents->kategori)->kategori }},</p>
    <div class="we-video-info">
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
                <a title href="{{ route('content.comment', $contents->id) }}" class="comment-to" style="  background: #eae9ee;
                    border-radius: 4px;
                    color: #82828e;
                    display: inline-block;
                    font-size: 13px;
                    padding: 5px 20px;
                    vertical-align: middle;
                    transition: all 0.2s linear 0s;
                    border: none;"><i class="icofont-comment"></i> Comment</a>
            </div>
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
                            <i class="icofont-comment" style="color: #64a4d4"></i>
                            <ins>{{ $contents->comment_count }}</ins>
                    </span>
                </li>
            </ul>
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
    <div class="pagination">
        {{ $content->links('vendor.sweetalert.pagination') }}
    </div>

    @foreach ($content as $contents)
<div class="modal fade" id="editModal{{ $contents->id }}" tabindex="-1" aria-labelledby="editModal{{ $contents->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="m-0 font-weight-bold">Edit Content</h6>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.content.update', $contents->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Title</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $contents->judul) }}">
                        @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">
                            Fill Content</label>
                        <textarea name="deskripsi" class="custom-summernote" class="custom-summernote" aria-label="With textarea">{{ old('deskripsi', $contents->deskripsi) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Image</label>
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                        @if ($contents->gambar)
                        <img src="{{ asset('storage/' . $contents->gambar) }}" alt="" width="50" height="50">
                        @else
                        No Image
                        @endif
                        @error('gambar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategoris" class="form-label">Category</label>
                        <select class="form-control @error('kategori_id') is-invalid @enderror" id="kategoris" name="kategori_id" aria-label="Default select example">
                            <option value="" {{old('kategori_id',  $contents->kategori_id) ? '' : 'selected' }}>Select Category</option>
                            @foreach ($kategori as $kat)
                            <option value="{{ $kat->id }}" {{ old('kategori_id', $contents->kategori_id) == $kat->id ? 'selected' : '' }}>
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
@endforeach

@section('scripts')
<script>
 $(document).ready(function() {

    $('.custom-summernote').summernote({
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

    $('#summernoteModal1').summernote({
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
                                <label for="deskripsi" class="form-label">
                                    Fill Content</label>
                                <textarea name="deskripsi" id="summernoteModal1" class="custom-summernote" aria-label="With textarea">{{ old('deskripsi') }}</textarea>
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"></i>CANCEL</button>
                                <button type="submit" form="addContactForm" class="btn btn-primary"></i>SAVE</button>
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
        async function deleteContent(id) {
            try {
                const result = await Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                });

        async function deleteContent(id) {
            try {
                const result = await Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                });

                if (result.isConfirmed) {

                    document.getElementById('delete-' + id).submit();
                    await Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            } catch (error) {
                console.error("Error:", error);
            }
            } catch (error) {
                console.error("Error:", error);
            }
        }
    </script>

    <?php if (Session::has('success')): ?>
    <script>
        toastr.success("<?php echo Session::get('success'); ?>");
    </script>
    <?php endif; ?>

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

    <script src="js/vivus.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    </body>
    </html>
