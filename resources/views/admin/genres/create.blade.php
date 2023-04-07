@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{Str::ucfirst(trans('app.new'))}} {{Str::ucfirst(trans('app.genre'))}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.genres.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

      <div class="card-body">
        <div class="form-group">
          <label for="title">{{Str::ucfirst(trans('app.genre'))}} {{Str::ucfirst(trans('app.title'))}}</label>
          <input type="text" class="form-control" id="title" placeholder="Enter genre" name="name">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{Str::upper(trans('app.submit'))}}</button>
      </div>
    </form>
  </div>
@endsection