@extends('summernote')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Content | Admin</title>
    <link rel="icon" href="/images/LOGO/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .deskripsi img {
            max-width: 20px;
            height: auto;
        }
        .large-label {
            font-size: 16px;
        }
        .prod-meta {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
<div class="responsive-header">
<div class="right-compact">
<div class="menu-area">
<div id="nav-icon3">
<i>
<svg class="feather feather-grid" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><rect height="7" width="7" y="3" x="3" /><rect height="7" width="7" y="3" x="14" /><rect height="7" width="7" y="14" x="14" /><rect height="7" width="7" y="14" x="3" /></svg>
</i>
</div>
</div>
<div class="res-search">
<span><i>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i></span>
</div>
</div>
<div class="restop-search">
<span class="hide-search"><i class="icofont-close-circled"></i></span>
{{-- <form id="searchForm"  action="{{ route('content.search') }}" method="get">
    @csrf
   <input type="search" name="search"  class="form-control" placeholder="Search..." oninput="submitSearch()">
</form> --}}
</div>
</div>
<header class>
    <div class="topbar stick">
    <div class="logo"><img alt src="images/LOGO/logo.png"><span>GetForums</span></div>
    <div class="searches">
        <form id="searchForm" action="{{ route('content.search') }}" method="get">
            @csrf
            {{-- <i class="icofont-search"></i> --}}
           <input type="search"  name="search" class="form-control" placeholder="Search..." oninput="submitSearch()">
        </form>
    </div>
    <ul class="web-elements">
    <li>
        <a title href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                         <i class="icofont-power"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
    </ul>
    </div>
</header>
<div class="top-sub-bar">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="menu-btn">
<i class>
<svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
</div>
<div class="page-title">
<h4>Content</h4>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<ul class="breadcrumb">
<li><a href="dashboard" title>Dashboard</a></li>
<li><a href="content" title>Content</a></li>
</ul>
</div>
</div>
</div>
</div>
<nav class="sidebar">
    <ul class="menu-slide">
        <li>
        <a class href="/dashboard" title>
        <i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /><polyline points="9 22 9 12 15 12 15 22" /></svg></i> Dashboard
        </a>
        </li>
        <li class="active">
        <a class href="content" title>
        <i class><svg id="ab7" class="feather feather-file" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" /></svg></i>Content
        </a>
        </li>
        <li class>
        <a class href="usermanage" title>
        <i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle r="4" cy="7" cx="9" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg></i>Manage User
        </a>
        </li>
        <li class>
        <a class href="kategori" title>
        <i class>
        <svg id="ab3" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>Category
        </a>
        </li>
        <li class>
        <a class href="contact" title>
        <i class>
        <svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></i>Contact Message
        </a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="panel-content">
<h3 class="main-title">Content to GetForums</h3>
<a type="button" class="btn btn-primary" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahModal" style="margin-left: 90%; background-color:rgb(40, 144, 204); color:#fff;"><b>add content</b></a>
<br><br>

<div class="row merged-10">
    <div class="col-lg-9">
        <div class="row">
            @forelse($content as $key => $contents)
                <div class="col-lg-4 mb-4">
                    <div class="prod-item" style="border: 1px solid #cacaca;">
                        <div class="overflow-hidden" style="height: 300px; display: flex; max-width: 100%; align-items: center; justify-content: center;">
                            <img src="{{ asset('storage/'.  $contents->gambar ) }}" alt="Deskripsi gambar" style="object-fit: cover; height: auto;">
                        </div>
                        <div class="more-opt">
                            <span><i class="icofont-dotted-down"></i></span>
                            <ul>
                                <li><a href="{{ route('content.detail', ['content' => $contents->id]) }}" title style="font-size: 15px; margin-left:7%;"><i class="icofont-eye" style="color: #1e76b9"></i> Detail</a></li>
                                <button type="button" title  style="font-size: 15px;  background-color:#fff; border:none;" data-bs-toggle="modal" data-bs-target="#editModal{{ $contents->id }}">
                                    <i class="icofont-pen-alt-1" style="color: #dca02f"></i> Edit
                                </button>
                                <li>
                                    <form action="{{ route('content.destroy', ['content' => $contents->id]) }}" method="POST" style="display:inline" id="deleteForm">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" title style="font-size: 15px; background-color:#fff; border:none;" onclick="deleteContent()">
                                            <i class="icofont-trash" style="color: #b91e1e"></i> Delete
                                        </button>
                                    </form>

                                </li>
                            </ul>
                        </div>
                        <center>
                            <div class="prod-meta" style="width: 100px; height: 100px; overflow: hidden;">
                                <h4 title>
                                    @if(strlen($contents->judul) > 15)
                                        {{ substr($contents->judul, 0, 15) }}...
                                    @else
                                        {{ $contents->judul }}
                                    @endif
                                </h4>
                            </div>
                        </center>
                        <span title="liked" style="margin-right: 10px;">
                            <i class="icofont-like" style="color: #64a4d4;"></i>
                            <ins>{{ $contents->likes_count }}</ins>
                        </span>
                        <span title="comment">
                            <i class="icofont-comment" style="color: #64a4d4;"></i>
                            <ins>{{ $contents->comment_count }}</ins>
                        </span>
                        <div style="display: flex; justify-content: flex-end; margin-top: -15px;">
                            <span>
                        @if($contents->created_at->diffInWeeks() >= 1)
                            {{  \Carbon\Carbon::parse($contents->created_at)->isoFormat('D MMMM YYYY') }}
                        @else
                            {{ $contents->created_at->diffForHumans() }}
                        @endif
                </span>
                </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12">
                    <center>
                        <img src="images/LOGO/datakosong.png" alt="" style="width: 50%;">
                    </center>
                </div>
            @endforelse
        </div>
    </div>

    <aside class="sidebar static right col-lg-3">
        <div class="widget card">
            <div class="card-body">
                <form action="{{ route('content.filter') }}" method="GET">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="widget-title"><b>Category</b></h4>
                        <button type="submit" class="btn btn-primary" style="background-color:rgb(40, 144, 204); border:none;">Filter</button>
                    </div>
                    @php
                      $kategori_ids = isset($kategori_ids) ? $kategori_ids : [];
                    @endphp
                    @foreach ($kategori as $key => $category)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="category{{ $category->id }}" name="kategori_id[]" value="{{ $category->id }}" @if(in_array($category->id, (array)$kategori_ids)) checked @endif>
                            <label class="form-check-label" for="category{{ $category->id }}">
                                {{ $category->kategori }}
                            </label>
                        </div>
                    @endforeach
                </form>
            </div>
        </div>
    </aside>
</div>
@foreach ($content as $contents)
<div class="modal fade" id="editModal{{ $contents->id }}" tabindex="-1" aria-labelledby="editModal{{ $contents->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="m-0 font-weight-bold">Edit Content</h6>
            </div>
            <div class="modal-body">
                <form action="{{ route('content.update', $contents->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Title</label>
                        <input type="text" class="form-control @error('judul_update') is-invalid @enderror" id="judul" name="judul_update" value="{{ old('judul_update', $contents->judul) }}">
                        @error('judul_update')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">
                            Fill Content</label>
                            @error('deskripsi_update')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        <textarea name="deskripsi_update" class="custom-summernote" class="custom-summernote" aria-label="With textarea">{{ old('deskripsi_update', $contents->deskripsi) }}</textarea>
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
                        <select class="form-control @error('kategori_id_update') is-invalid @enderror" id="kategoris" name="kategori_id_update" aria-label="Default select example">
                            <option value="" {{old('kategori_id_update',  $contents->kategori_id) ? '' : 'selected' }}>Select Category</option>
                            @foreach ($kategori as $kat)
                            <option value="{{ $kat->id }}" {{ old('kategori_id_update', $contents->kategori_id) == $kat->id ? 'selected' : '' }}>
                                {{ $kat->kategori }}
                            </option>
                            @endforeach
                        </select>
                        @error('kategori_id_update')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

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
                <form action="{{ route('content.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Title Input -->
                    <div class="mb-3">
                        <label for="judul" class="form-label">Title</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}">
                        @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Description Input -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">
                            Fill Content</label>
                            @error('deskripsi')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        <textarea name="deskripsi" id="summernoteModal1" class="custom-summernote" aria-label="With textarea">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Image Input -->
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Image</label>
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{ old('gambar') }}">
                        @error('gambar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Category Input -->
                    <div class="mb-3">
                        <label for="kategoris" class="form-label">Category</label>
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
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-primary">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<script>
    function submitSearch() {
        document.getElementById("searchForm").submit();
    }
</script>

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
    async function deleteContent() {
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
                // Submit the form
                document.getElementById('deleteForm').submit();
                await Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
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

<script src="js/main.min.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
<script src="js/vivus.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="plugins/apex/apexcharts.min.js" type="text/javascript"></script>
<script src="js/graphs-scripts.js" type="101cca6ef11d27050cf841ef-text/javascript"></script>
</body>
</html>
