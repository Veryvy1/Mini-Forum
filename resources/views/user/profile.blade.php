@extends('summernote')
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>Getforums | Profile</title>
        <link rel="icon" href="images/LOGO/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/color.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        </style>
    </head>
    <body>

    <header class>
        <div class="topbar stick">
        <div class="logo"><img src="{{ asset('images/LOGO/logo.png') }}" alt><span>GetForums</span></div>

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
                    <i class="icofont-user-alt-3"></i>Profile
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
                <img id="preview-bgimage" src="{{ asset('storage/' . $user->bgprofile) }}" alt="">
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
            <figure style="width: 105px; height: 105px; border-radius: 50%; overflow: hidden;">
            @if ($user->profile)
                <img id="preview-image" src="{{ asset('storage/' . $user->profile) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
            @else
                <img id="preview-image" src="{{ asset('images/LOGO/profil.jpeg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt>
            @endif
            <div class="fileupload">
            <span class="btn-text"><i class="icofont-camera"></i></span>
            <input type="file" class="upload" name="profile" id="profile-input">
        </div>
            </figure>
            <div class="users-name">
                <h5 style="text-align: center;">
                    <input type="text" id="name" name="name" value="{{ $user->name }}" style="border: none; text-align: center;  margin-top:30px;">
                </h5>
            <span style="text-align: center;">
                <input type="text" id="email" name="email" value="{{ $user->email }}" style="border: none; text-align: center; margin-top:15px;">
            </span>
            </div>
            </div>
            </div>
            </div>
            <div class="col-lg-8" >
                <div class="d-widget mt-6" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);">
                    <div class="d-widget-title"><h5>Social Links</h5></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="social-links">
                                <i class="icofont-facebook"></i>
                                <input type="text" name="link_fb" placeholder="Link Facebook" value="{{ old('link_fb', $user->link_fb) }}">
                                {{-- <em>Add your Facebook username (e.g. johndoe).</em> --}}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="social-links">
                                <i class="icofont-instagram"></i>
                                <input type="text" name="link_ig" placeholder="Link Instagram" value="{{ old('link_ig', $user->link_ig) }}">
                                {{-- <em>Add your Instagram username (e.g. johndoe).</em> --}}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="social-links">
                                <i class="icofont-twitter"></i>
                                <input type="text" name="link_twt" placeholder="Link Twitter" value="{{ old('link_twt', $user->link_twt) }}">
                                {{-- <em>Add your Twitter username (e.g. johndoe).</em> --}}
                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <label for="bio">About me</label>
                        <textarea name="bio" id="bio" class="form-control" placeholder="About me.." rows="5">{{ old('bio', $user->bio) }}</textarea>
                    </div>
                </div>
                    <button type="submit" title class="button primary circle mt-3" style="margin-bottom: -5px; margin-right: auto;">Save Changes</button>
            </div>
        </div>
    </div>
</div>
</div>
    </form>

    <div class="modal" tabindex="-1" id="tambahModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="m-0 font-weight-bold">Add Content</h6>
                </div>
                <div class="modal-body">
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
                                placeholder: 'Hello stand alone ui',
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
                                @foreach ($kategori as $x)
                                    <option value="{{ $x->id }}" {{ old('kategori_id') == $x->id ? 'selected' : '' }}>
                                        {{ $x->kategori }}
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-undo me-1"></i>CANCEL</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle me-1"></i>SAVE</button>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-undo me-1"></i>CANCEL</button>
                            <button type="submit" form="addContactForm" class="btn btn-primary"><i class="fas fa-check-circle me-1"></i>SAVE</button>
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    </html>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            profileInput.addEventListener('change', function() {
                const file = this.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.setAttribute('src', e.target.result);
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {

                    previewImage.setAttribute('src', '{{ asset('images/LOGO/profil.jpeg') }}');
                }
            });


            bgProfileInput.addEventListener('change', function() {
                const file = this.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewBgImage.setAttribute('src', e.target.result);
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    // Jika tidak ada gambar yang dipilih, tampilkan gambar sebelumnya
                    previewBgImage.setAttribute('src', '{{ asset('images/LOGO/background.jpeg') }}');
                }
            });
        });
    </script>
