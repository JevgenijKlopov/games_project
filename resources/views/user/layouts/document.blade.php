<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/front/usergames.css')}}">
</head>
<body>
    <header>
      <div class='header-slideshow'>
      </div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('user.games.index')}}">Home</a>
            </li>
            @if (Auth::check())
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cart</a>
                <ul class="dropdown-menu">
                  @foreach ($cartItems as $item)
                  <li class="dropdown-item">{{$item->title}} - {{$item->price/100}} Eur <a href="{{route('cart-destroy', $item)}}" type="button" data-deletable="li" class="btn btn-danger delete" onclick="event.preventDefault()">X</a> </li>
                  @endforeach
                  <li class="dropdown-item">Total: {{$total}} Eur </li>
                </ul>
              
              <ul class="dropdown-menu">
              </ul>
            </li>  
            @endif
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name ?? 'Login'}}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                <li><a class="dropdown-item" href="{{route('registration')}}">Registration</a></li>
                <li><a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a></li>
              </ul>
            </li>
          </ul>
    </header>
    <main>
      <div class="game-cards-container">
        @yield('content')
      </div>
        
    </main>
    <div class="container my-5">
      <!-- Footer -->
      <footer
              class="text-center text-lg-start text-dark"
              style="background-color: #ECEFF1"
              >
        <!-- Section: Social media -->
        <section
                 class="d-flex justify-content-between p-4 text-white"
                 style="background-color: #21D192"
                 >
          <!-- Left -->
          <div class="me-5">
            <span>Get connected with us on social networks:</span>
          </div>
          <!-- Left -->
    
          <!-- Right -->
          <div>
            <a href="" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <!-- Right -->
        </section>
        <!-- Section: Social media -->
    
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold">Company name</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                  Games Projects
                </p>
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold">Products</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                  <a href="#!" class="text-dark">MDBootstrap</a>
                </p>
                <p>
                  <a href="#!" class="text-dark">MDWordPress</a>
                </p>
                <p>
                  <a href="#!" class="text-dark">BrandFlow</a>
                </p>
                <p>
                  <a href="#!" class="text-dark">Bootstrap Angular</a>
                </p>
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold">Useful links</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                  <a href="#!" class="text-dark">Your Account</a>
                </p>
                <p>
                  <a href="#!" class="text-dark">Become an Affiliate</a>
                </p>
                <p>
                  <a href="#!" class="text-dark">Shipping Rates</a>
                </p>
                <p>
                  <a href="#!" class="text-dark">Help</a>
                </p>
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold">Contact</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p><i class="fas fa-home mr-3"></i> Ozo str. 25 Vilnius, Lithuania</p>
                <p><i class="fas fa-envelope mr-3"></i> games_project@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> + 370 11 111 111</p>
                <p><i class="fas fa-print mr-3"></i> + 370 11 111 111</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
    
        <!-- Copyright -->
        <div
             class="text-center p-3"
             style="background-color: rgba(0, 0, 0, 0.2)"
             >
          © 2023 Copyright:
          <a class="text-dark" href="https://mdbootstrap.com/"
             >games_project.test</a
            >
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" 
        crossorigin="anonymous">
</script>
<script src="{{asset('js/admin/app.js') }}"></script>
</html>