@extends('admin.layouts.document')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{Str::upper(trans('app.update'))}} {{Str::upper(trans('app.platform'))}} {{$platform->name ?? ''}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('admin.platforms.update', $platform)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
          <input type="hidden" name="id" value="{{ $platform->id ?? ''  }}">
      <div class="card-body">
        <div class="form-group">
          <label for="platform">{{Str::upper(trans('app.platform'))}}</label>
          <input type="text" class="form-control" id="platform" placeholder="Enter platform" name="name" value="{{$platform->name ?? ''}}">
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{Str::upper(trans('app.submit'))}}</button>
      </div>
    </form>
  </div>
  @endsection