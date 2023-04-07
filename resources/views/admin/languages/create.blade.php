@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{Str::upper(trans('app.new'))}} {{Str::upper(trans('app.language'))}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.languages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

      <div class="card-body">
        <div class="form-group">
          <label for="name">{{Str::upper(trans('app.language'))}}</label>
          <input type="text" class="form-control" id="name" placeholder="Enter language" name="name">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="abbr">{{Str::upper(trans('app.abbr'))}}</label>
          <input type="text" class="form-control" id="abbr" placeholder="Enter abbr" name="abbr">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{Str::upper(trans('app.submit'))}}</button>
      </div>
    </form>
  </div>
@endsection