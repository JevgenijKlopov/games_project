@extends('user.layouts.document')
@section('content')
<div class="row g-0 bg-body-secondary position-relative">
    <div class="col-md-6 mb-md-0 p-md-4">
      <img src="{{ asset('storage/images/'.($game->image ?? ''))}}" class="w-100" alt="...">
    </div>
    <div class="col-md-6 p-4 ps-md-0">
      <h5 class="mt-0">{{$game->title}}</h5>
      <p>{{$game->description}}</p>
      <p>{{Str::ucfirst(trans('app.release_date'))}}: {{$game->release_date}}</p>
      <p>{{Str::ucfirst(trans('app.price'))}}: {{$game->price/100}} Eur.</p>
      <p>{{Str::ucfirst(trans('app.platforms'))}}: {{$game->platforms->pluck('name')->implode(', ')}}</p>
      <div class="images-container">
        @foreach ($game->images as $image)
            <img src="{{ asset('storage/images/' . ($image->name) ?? '') }}" class="rounded" alt="...">
        @endforeach
        
      </div>
      
    </div>
    <div class="ratio ratio-21x9">
        <iframe src="{{$game->iframe ?? ''}}" title="YouTube video" allowfullscreen></iframe>
      </div>
  </div>
    
@endsection