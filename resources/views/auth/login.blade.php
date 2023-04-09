@extends('user.layouts.document')
@section('content')
<form action="{{route('login-user')}}" method="POST">
    @csrf
    <h4 class="color-w">{{Str::ucfirst(trans('app.login'))}}</h4>
    <div class="mb-3">
      <label for="email" class="form-label color-w">{{Str::ucfirst(trans('app.email'))}}</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
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