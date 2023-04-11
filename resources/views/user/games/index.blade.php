@extends('user.layouts.document')
@section('content')
@foreach ($games as $game)
<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/images/'.($game->image ?? ''))}}" width="100%" height="100%" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$game->title ?? ''}}</h5>
      <p class="card-text">{{Str::ucfirst(trans('app.price'))}}: {{$game->price/100}} Eur.</p>
      <div class="button-container">
        @if (Auth::check())
            <a href="{{route('user-game', $game)}}" class="add button" onclick="event.preventDefault()">{{Str::ucfirst(trans('app.add_to_cart'))}}</a>
        @endif 
         <a href="{{route('user.games.show', $game)}}" class="button">{{Str::ucfirst(trans('app.view'))}}</a>
     </div>
    </div>
  </div>
@endforeach
@endsection