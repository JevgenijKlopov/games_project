@extends('user.layouts.document')
@section('content')
<form action="{{route('register-user')}}" method="POST">
    @csrf
    <h4 class="color-w">{{Str::ucfirst(trans('app.registration'))}}</h4>
    @if (Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if (Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <div class="mb-3">
      <label for="name" class="form-label color-w">{{Str::ucfirst(trans('app.full_name'))}}</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
      <span class="text-danger">@error('name') {{$message}}     
      @enderror</span>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label color-w">{{Str::ucfirst(trans('app.email'))}}</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
      <div id="emailHelp" class="form-text color-w">We'll never share your email with anyone else.</div>
      <span class="text-danger">@error('email') {{$message}}     
        @enderror</span>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label color-w">{{Str::ucfirst(trans('app.password'))}}</label>
      <input type="password" class="form-control " id="password" name="password">
      <span class="text-danger">@error('password') {{$message}}     
        @enderror</span>
    </div>
    <button type="submit" class="btn btn-primary">{{Str::upper(trans('app.submit'))}}</button>
  </form>

@endsection