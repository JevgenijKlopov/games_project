@extends('user.layouts.document')
@section('content')

@foreach ($games as $game)
<div class="game-card">
    <h5>{{$game->title ?? ''}}</h5>
    <img src="{{ asset('storage/images/'.($game->image ?? ''))}}" width="200px" height="300px" alt="">
    <div class="button-container">
        <a href=""><button>Add to Cart</button></a>
        <a href="{{route('user.games.show', $game)}}"><button>View</button></a>
    </div>
</div>
    
@endforeach
@endsection