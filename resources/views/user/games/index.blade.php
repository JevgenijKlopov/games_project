@extends('user.layouts.document')
@section('content')

@foreach ($games as $game)
<div class="game-card">
    <h5>{{$game->title ?? ''}}</h5>
    <img src="{{ asset('storage/images/'.($game->image ?? ''))}}" width="200px" height="300px" alt="">
    <div class="button-container">
       @if (Auth::check())
           <a href="{{route('user-game', $game)}}"><button>{{Str::ucfirst(trans('app.add_to_cart'))}}</button></a>
       @endif 
        <a href="{{route('user.games.show', $game)}}"><button>{{Str::ucfirst(trans('app.view'))}}</button></a>
    </div>
</div>
    
@endforeach
@endsection