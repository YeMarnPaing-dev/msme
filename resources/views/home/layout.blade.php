<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">


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
              <li><a class="dropdown-item" href="#">Join</a></li>
            </ul>
          </li>

          <!-- Post dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="postDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Post
            </a>
            <ul class="dropdown-menu" aria-labelledby="postDropdown">
              <li><a class="dropdown-item" href="#">News</a></li>
              <li><a class="dropdown-item" href="#">Updates</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Discount Shops</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Committee</a>
          </li>

          <!-- About dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
              <li><a class="dropdown-item" href="#">About Us</a></li>
              <li><a class="dropdown-item" href="#">Mission</a></li>
            </ul>
          </li>

          <!-- Account dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="accountDropdown">
              <li><a class="dropdown-item" href="#">Login</a></li>
              <li><a class="dropdown-item" href="#">Register</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>

      <!-- Content -->
   <div class="content">
        <div class="d-flex justify-content-center">
            <div class="col-md-8 " style="margin: 50px 0px">
                @yield('content')
            </div>
        </div>
    </div>



    <!-- Bottom Menu -->
    <div class="bottom-menu">

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
</html>
