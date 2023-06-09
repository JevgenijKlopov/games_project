@extends('admin.layouts.document')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{Str::upper(trans('app.update'))}} {{Str::upper(trans('app.game'))}} <?= $game->title ?? '' ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('admin.games.update', $game)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
          <input type="hidden" name="id" value="<?= $game->id ?? ''?>">
      <div class="card-body">
        <div class="form-group">
          <label for="title">{{Str::upper(trans('app.title'))}}</label>
          <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="<?= $game->title ?? ''?>">
        </div>
        <div class="form-group">
          <label for="release-date">{{Str::upper(trans('app.release_date'))}}</label>
          <input type="date" class="form-control" id="release-date" placeholder="Release date" name="release_date" value="<?= $game->release_date ?? ''?>">
        </div>
        <div class="form-group">
          <label for="description">{{Str::upper(trans('app.description'))}}</label>
          <input type="text" class="form-control" id="description" placeholder="Description" name="description" value="<?= $game->description ?? ''?>">
        </div>
        <div class="form-group">
          <label for="rating">{{Str::upper(trans('app.rating'))}}</label>
          <input type="text" class="form-control" maxlength="5" id="rating" placeholder="Raiting" name="rating" value="<?= $game->rating ?? ''?>">
        </div>
        <div class="form-group">
          <label for="price">{{Str::upper(trans('app.price'))}}</label>
          <input type="text" class="form-control"  id="price" placeholder="Raiting" name="price" value="<?= $game->price ?? ''?>">
        </div>
        <div class="form-group">
          <label for="iframe">{{Str::upper(trans('app.iframe'))}} {{Str::upper(trans('app.addres'))}}</label>
          <input type="text" class="form-control"  id="iframe" placeholder="Raiting" name="iframe" value="<?= $game->iframe?? ''?>">
        </div>

        <x-forms.multi-relation-select :tagName="'genres'" :model="$game" :relationItems="$genres"/>
        <x-forms.multi-relation-select :tagName="'languages'" :model="$game" :relationItems="$languages"/>
        <x-forms.multi-relation-select :tagName="'platforms'" :model="$game" :relationItems="$platforms"/>


        <div class="form-group">    
          <x-forms.image-input :images="[$game->image]" :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
      </div>

      <div class="form-group">    
          <x-forms.image-input :images="$game->images"  :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{Str::upper(trans('app.submit'))}}</button>
      </div>
    </form>
  </div>
  @endsection