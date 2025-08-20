<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/member.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/council.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/footer.css')}}">

    <title>@yield('title')</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top">
    <div class="container header">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img src="{{asset('home/image/msme.png')}}" alt="Logo">
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
            <a class="nav-link" href="{{route('index#content')}}">Home</a>
          </li>

          <!-- Member dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="memberDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Member
            </a>
            <ul class="dropdown-menu" aria-labelledby="memberDropdown">
              <li><a class="dropdown-item" href="{{route('index#member')}}">Member List</a></li>
              <li><a class="dropdown-item" href="{{route('council#member')}}">Executive Council</a></li>
            </ul>
          </li>

          <!-- Post dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="postDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Post
            </a>
            <ul class="dropdown-menu" aria-labelledby="postDropdown">
              <li><a class="dropdown-item" href="{{route('post#index')}}">Posts</a></li>
              <li><a class="dropdown-item" href="{{route('post#loan')}}">Loan</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('shop#index')}}">Discount Shops</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('comettie#index')}}">Committee</a>
          </li>

          <!-- About dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
              <li><a class="dropdown-item" href="{{route('about#us')}}">About Us</a></li>
              <li><a class="dropdown-item" href="{{route('contact#create')}}">Contact Us</a></li>
            </ul>
          </li>

          <!-- Account dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="accountDropdown">
              <li><a class="dropdown-item" href="{{route('register#login')}}">Login</a></li>
              <li><a class="dropdown-item" href="{{route('register#index')}}">Register</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  </div>

<div class="header-menu">
  <div class="header-content mt-4">
    <h1>@yield('heading')</h1>
   <div class="icon">
<a href="{{route('index#content')}}"> <i class="fa-solid fa-house"></i> Home</a>
<a href="javascript:void(0);" class="back"> <i class="fa-solid fa-angles-right"></i>Back</a>
<i class="fa-solid fa-angles-right"></i> @yield('Third')
</div>
  </div>
</div>

      <!-- Content -->
   <div class="content">
        <div class="d-flex justify-content-center">
            <div class="col-md-8 " style="margin: 20px 0px">
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
                       <a href="https://www.facebook.com/msmeassociationmyanmar/"  target="_blank" rel="noopener noreferrer" > <i class="fa-brands fa-facebook-f text-white"></i></a>
                    </div>


                    <div class="col-md-6" >
                    <div class="text-white"><i class="fa-regular fa-copyright text-white"></i>  MSME.ALL Rights Reserved</div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('home/js/script.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

$(document).ready(function(){
  $('.back').on('click', function(e) {
            e.preventDefault();
            window.history.go(-1);
            return false;
        });

    //      Swal.fire({
    //     icon: 'success',
    //     title: 'Success',
    //     text: '{{ session('success') }}',
    //     showConfirmButton: false,
    //     timer: 2000
    // })
})

</script>
@yield('script')
</html>
