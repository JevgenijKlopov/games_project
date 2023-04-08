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

@foreach ($games as $game)
<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/images/'.($game->image ?? ''))}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$game->title ?? ''}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <p class="card-text">
        <a href="#" class="stretched-link text-danger" style="position: relative;">Stretched link will not work here, because <code>position: relative</code> is added to the link</a>
      </p>
      <p class="card-text bg-body-tertiary" style="transform: rotate(0);">
        This <a href="#" class="text-warning stretched-link">stretched link</a> will only be spread over the <code>p</code>-tag, because a transform is applied to it.
      </p>
    </div>
  </div>
@endforeach
@endsection