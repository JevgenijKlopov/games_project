@extends('admin.layouts.document')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{Str::upper(trans('app.update'))}} {{Str::upper(trans('app.language'))}} <?= $language->name ?? '' ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('admin.languages.update', $language)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
          <input type="hidden" name="id" value="{{ $language->id ?? ''  }}">
      <div class="card-body">
        <div class="form-group">
          <label for="language">{{Str::upper(trans('app.languages'))}}</label>
          <input type="text" class="form-control" id="language" placeholder="Enter language" name="name" value="{{$language->name ?? ''}}">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="labbr">{{Str::upper(trans('app.abbr'))}}</label>
          <input type="text" class="form-control" id="abbr" placeholder="Enter abbr" name="abbr" value="{{$language->abbr ?? ''}}">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{Str::upper(trans('app.submit'))}}</button>
      </div>
    </form>
  </div>
  @endsection