<div class='header-slideshow'>
      </div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('user.games.index')}}">Home</a>
            </li>
            @if (Auth::check())
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                Cart</a>
                <ul class="dropdown-menu">
                  @foreach ($cartItems as $item)
                  <li class="dropdown-item">{{$item->title}} - {{$item->price/100}} Eur <a href="{{route('cart-destroy', $item)}}" type="button" data-deletable="li" class="btn btn-danger delete" onclick="event.preventDefault()">X</a> </li>
                  @endforeach
                  <li class="dropdown-item" id="price_total"><p>Total: {{$total}} Eur</p> </li>
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
                @if (Auth::user())
                   <li><a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a></li> 
                @endif
                
              </ul>
            </li>
          </ul>