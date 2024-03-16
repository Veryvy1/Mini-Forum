<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description here" />
<meta name="keywords" content="Your, Keywords, Here" />
<title>GetForums | Detail Content</title>
<link rel="icon" href="images/LOGO/logo.png" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('socimo/css/main.min.css') }}">
<link rel="stylesheet" href="{{ asset('socimo/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('socimo/css/color.css') }}">
<link rel="stylesheet" href="{{ asset('socimo/css/responsive.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @php
    $userRole = auth()->user()->role ?? null;
    @endphp
<div class="theme-layout">
<section>
<div class="white-bg">
<div class="container-fluid">
    <style>
        .sidemenu {
            cursor: pointer;
        }

        .sidemenu:active .feather {
            transform: scale(1.2);
        }
    </style>

    <div class="row">
        <div class="col-lg-2">
            <div class="sidemenu">
                @if($userRole == 'admin')
                <a href="{{ route('content.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg></a>
                @else
                <a href="{{ route('home') }}"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg></a>
                @endif
            </div>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</div>
</section>
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
<ul>
<li><i class="icofont-heart" style="color: #64a4d4;"></i> {{ $content->likes_count}}</li>
<li><i class="icofont-comment" style="color: #64a4d4;"></i> {{ $commentsCount}}</li>
<li><i class>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></i>
{{  \Carbon\Carbon::parse($content->created_at)->isoFormat('D MMMM YYYY') }}</li>

</ul>
<p>{{ $content->deskripsi }}
</p>
<div class="tag-n-cat">
<div class="tags">
<span><i>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg></i> Post Categories:</span>
<a href="#">{{ $content->kategori->kategori }}</a>
</div>
</div>
</div>
@if($userRole == 'admin')
<table class="table table-default all-events table-striped table-responsive-lg">
    <thead>
    <tr>
    <th style="width: 10%;">No</th>
    <th style="width: 20%;">Name</th>
    <th style="width: 50%;">Comment</th>
    <th style="width: 10%;">Delete</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($comments ?? [] as $key => $comment)
        <tr>
            <td>{{ $key + 1}}</td>
            <td>{{ $comment->user->name }}</td>
            <td>{{ $comment->comment }}</td>
            <td>
                <form action="{{ route('comment.destroy', ['comment' => $comment->id]) }}" method="POST" style="display:inline" id="deleteForm_{{ $comment->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button soft-danger" onclick="return confirm('Are you sure?')">
                        <i class="icofont-trash" style="color: #ff0000;"></i>Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endif
</div>
</div>
</div>
</div>
</div>
</section>
<figure class="bottom-mockup"><img src="/images/footer.png" alt="Footer"></figure>
<div class="bottombar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<span>&copy; copyright All rights reserved by GetForums 2024</span>
</div>
</div>
</div>
</div>
</div>
@if (session('warning'))
<script>
    toastr.warning("{{ session('warning') }}");
</script>
@endif
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

<script>
@if (Session::has('success'))
toastr.success("{{ Session::get('success') }}")
@endif
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/sparkline.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</html>

