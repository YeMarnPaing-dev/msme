<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/font.css') }}">


    <title>@yield('title')</title>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top">
        <div class="container header">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('home/image/msme.png') }}" alt="Logo">
            </a>

            <!-- Toggle for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Items -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index#content') }}">Home</a>
                    </li>

                    <!-- Member dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="memberDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Member
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="memberDropdown">
                            <li><a class="dropdown-item" href="{{ route('index#member') }}">Member List</a></li>
                            <li><a class="dropdown-item" href="{{ route('council#member') }}">Executive Council</a></li>
                        </ul>
                    </li>

                    <!-- Post dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="postDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Post
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="postDropdown">
                            <li><a class="dropdown-item" href="{{ route('post#index') }}">Posts</a></li>
                            <li><a class="dropdown-item" href="{{ route('post#loan') }}">Loan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop#index') }}">Discount Shops</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comettie#index') }}">Committee</a>
                    </li>

                    <!-- About dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="{{ route('about#us') }}">About Us</a></li>
                            <li><a class="dropdown-item" href="{{ route('contact#create') }}">Contact Us</a></li>
                        </ul>
                    </li>

                    <!-- Account dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                            <li><a class="dropdown-item" href="{{ route('register#login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register#index') }}">Register</a></li>
                            @auth
                                <li>
                                    <form id="logout-form" action="" method="">
                                        @csrf
                                        <button type="button" class="dropdown-item" id="logout-btn">Logout</button>
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider Section -->
    <!-- Slider Section -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('home/image/msmelogo1.jpg') }}" class="d-block w-100 slider-img" alt="Slide 1">
                <div class="carousel-caption text-start">
                    <h1 class="fw-bold">MSME</h1>
                    <p class="fs-4">Myanmar Small Medium Entrepreur</p>
                    <a href="{{ route('contact#create') }}" class="btn btn-success rounded-pill px-4 py-2">Contact
                        Us</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('home/image/msmelogo2.jpg') }}" class="d-block w-100 slider-img" alt="Slide 2">
                <div class="carousel-caption text-start">
                    <h1 class="fw-bold">Empowering Businesses</h1>
                    <p class="fs-4">Grow with us through opportunities and support.</p>
                    <a href="#" class="btn btn-success rounded-pill px-4 py-2">Learn More</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('home/image/msmelogo3.jpg') }}" class="d-block w-100 slider-img" alt="Slide 3">
                <div class="carousel-caption text-start">
                    <h1 class="fw-bold">Join Our Community</h1>
                    <p class="fs-4">Connect with thousands of MSME members.</p>
                    <a href="{{ route('register#index') }}" class="btn btn-success rounded-pill px-4 py-2">Get
                        Started</a>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>




    <!-- Content -->
    <div class="content">
        <div class="d-flex justify-content-center">
            <div class="col-md-8 " style="margin: 50px 0px">
                @yield('content')
            </div>
        </div>
    </div>



    <!-- Bottom Menu -->
    <div class="bottom-under">

        <div class="row justify-content-center">
            <div class="col-md-8 p-3">
                <div class="row text-center">
                    <div class="col-md-6">
                        <a href="https://www.facebook.com/msmeassociationmyanmar/" target="_blank"
                            rel="noopener noreferrer"> <i class="fa-brands fa-facebook-f text-white"></i></a>
                    </div>


                    <div class="col-md-6">
                        <div class="text-white"><i class="fa-regular fa-copyright text-white"></i> MSME.ALL Rights
                            Reserved</div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('home/js/script.js') }}"></script>



</html>

<script>
    $(document).ready(function() {
        $('#logout-btn').on('click', function(e) {
            e.preventDefault();
            console.log('Hi This is testing');

            // Swal.fire({
            //     title: 'Are you sure?',
            //     text: "You will be logged out of your account.",
            //     icon: 'warning',
            //     showCancelButton: true,
            //     confirmButtonColor: '#3085d6',
            //     cancelButtonColor: '#d33',
            //     confirmButtonText: 'Yes, logout'
            // }).then((result) => {
            //     if (result.isConfirmed) {
            //         $('#logout-form').submit();
            //     }
            // });
        });
    });
</script>
