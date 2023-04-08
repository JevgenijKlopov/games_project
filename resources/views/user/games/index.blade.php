@extends('user.layouts.document')
@section('content')
@include('sweetalert::alert')

@foreach ($games as $game)
<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/images/'.($game->image ?? ''))}}" width="100%" height="100%" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$game->title ?? ''}}</h5>
      <p class="card-text">{{Str::ucfirst(trans('app.price'))}}: {{$game->price/100}} Eur.</p>
      <div class="button-container">
        @if (Auth::check())
            <a href="{{route('user-game', $game)}}"><button>{{Str::ucfirst(trans('app.add_to_cart'))}}</button></a>
        @endif 
         <a href="{{route('user.games.show', $game)}}"><button>{{Str::ucfirst(trans('app.view'))}}</button></a>
     </div>
    </div>
  </div>
@endforeach
@endsection