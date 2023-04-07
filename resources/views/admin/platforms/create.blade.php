@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{Str::upper(trans('app.new'))}} {{Str::upper(trans('app.game'))}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.platforms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

      <div class="card-body">
        <div class="form-group">
          <label for="title">{{Str::upper(trans('app.platform'))}}</label>
          <input type="text" class="form-control" id="title" placeholder="Enter platform" name="name">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{Str::upper(trans('app.submit'))}}</button>
      </div>
    </form>
  </div>
@endsection