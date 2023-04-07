@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{Str::upper(trans('app.new'))}} {{Str::upper(trans('app.game'))}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.games.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

      <div class="card-body">
        <div class="form-group">
          <label for="title">{{Str::upper(trans('app.title'))}}</label>
          <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
        <div class="form-group">
          <label for="release-date">{{Str::upper(trans('app.release_date'))}}</label>
          <input type="date" class="form-control" id="release-date" placeholder="Release date" name="release_date">
        </div>
        <div class="form-group">
          <label for="description">{{Str::upper(trans('app.description'))}}</label>
          <input type="text" class="form-control" id="description" placeholder="Description" name="description">
        </div>
        <div class="form-group">
          <label for="rating">{{Str::upper(trans('app.rating'))}}</label>
          <input type="text" class="form-control" maxlength="5" id="rating" placeholder="Rating" name="rating">
        </div>
        <div class="form-group">
          <label for="iframe">{{Str::upper(trans('app.iframe'))}}</label>
          <input type="text" class="form-control"  id="iframe" placeholder="iframe url" name="iframe">
        </div>
        <div class="form-group">
          <label for="price">{{Str::upper(trans('app.price'))}}</label>
          <input type="number" class="form-control" id="price" placeholder="Price" name="price">
        </div>
        

        <div class="form-group">    
          <x-forms.image-input :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
      </div>


      <div class="form-group">    
          <x-forms.image-input :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
      </div>

      </div>


      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{Str::upper(trans('app.submit'))}}</button>
      </div>
    </form>
  </div>
@endsection