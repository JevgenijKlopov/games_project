<div class='header-slideshow'>
      </div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('user.games.index')}}"><i class="bi bi-house"></i>{{Str::ucfirst(trans('app.home'))}}</a>
              
            </li>
            @if (Auth::check())
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="bi bi-cart4"></i>
                {{Str::ucfirst(trans('app.cart'))}}</a>
                <ul class="dropdown-menu" id="cart-holder">
                  @foreach ($cartItems as $item)
                  <li class="dropdown-item">{{$item->title}} - {{$item->price/100}} Eur <a href="{{route('cart-destroy', $item)}}" type="button" data-deletable="li" class="btn btn-danger delete" onclick="event.preventDefault()">X</a> </li>
                  @endforeach
                  <li class="dropdown-item" id="price_total"><p>{{Str::ucfirst(trans('app.total'))}}: {{$total}} Eur</p> </li>
                </ul>            
            </li>  
            @endif
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-box-arrow-in-right"></i>
                {{Auth::user()->name ?? 'Login'}}
              </a>
              <ul class="dropdown-menu">
                @if (!Auth::user())
                   <li><a class="dropdown-item" href="{{route('login')}}">{{Str::ucfirst(trans('app.login'))}}</a></li>
                <li><a class="dropdown-item" href="{{route('registration')}}">{{Str::ucfirst(trans('app.registration'))}}</a></li>  
                @endif
               
                @if (Auth::user())
                <li><a class="dropdown-item" href="{{route('admin.logout')}}">{{Str::ucfirst(trans('app.logout'))}}</a></li> 
                @endif
                
              </ul>
              <li class="nav-item">
                <a class="nav-link" href="/lang/en"><img style="width: 25px; height: 15px"src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt=""></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="/lang/lt"><img style="width: 25px; height: 15px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Flag_of_Lithuania.svg/250px-Flag_of_Lithuania.svg.png" alt=""></a>
              </li>
            </li>
          </ul>