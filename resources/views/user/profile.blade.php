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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;700&family=Roboto&display=swap" rel="stylesheet">
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
            <a href="#" title="View Profile">
                @if(auth()->user()->profile)
                    <img src="{{ asset('storage/' . auth()->user()->profile) }}" alt="">
                @else
                    <img src="{{ asset('images/LOGO/profil.jpeg') }}" alt="">
                @endif
            </a>
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
        <li><a href="#" title><i class="icofont-user-alt-3"></i> Your Profile</a></li>
        <li><a href="# title><i class="icofont-plus"></i>Add Content</a></li>
        <li><a class="invite-new" href="#" title><i class="icofont-brand-slideshare"></i>Sugestion</a></li>
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
            {{-- <figure> --}}
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

    @if (session('warning'))
        <script>
            toastr.warning("{{ session('warning') }}");
        </script>
    @endif

    @if (Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}");
        </script>
    @endif

    <script>
    function swalpFunction(message, type) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: type,
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

    @if (Session::has('success'))
        swalpFunction("{{ Session::get('success') }}", "success");
    @endif
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script>
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
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

    </html>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menampilkan pratinjau gambar profile
            const profileInput = document.getElementById('profile-input');
            const previewImage = document.getElementById('preview-image');

            profileInput.addEventListener('change', function() {
                const file = this.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.setAttribute('src', e.target.result);
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    // Jika tidak ada gambar yang dipilih, tampilkan gambar sebelumnya
                    previewImage.setAttribute('src', '{{ asset('images/LOGO/profil.jpeg') }}');
                }
            });

            // Menampilkan pratinjau gambar background profile
            const bgProfileInput = document.getElementById('bgprofile-input');
            const previewBgImage = document.getElementById('preview-bgimage');

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
