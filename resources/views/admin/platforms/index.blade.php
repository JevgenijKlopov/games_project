@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{Str::upper(trans('app.platforms'))}}</h3>
                <a href="{{route('admin.platforms.create')}} " class="btn btn-app">
                  <i class="fas fa-edit"></i> {{Str::upper(trans('app.new'))}}
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{Str::upper(trans('app.id'))}}</th>
                            <th>{{Str::upper(trans('app.title'))}}</th>
                            <th>{{Str::upper(trans('app.created_at'))}}</th>
                            <th>{{Str::upper(trans('app.updated_at'))}}</th>
                            <th>{{Str::upper(trans('app.action'))}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($platforms as $platform)
                            <tr>
                                <td>{{ ($platform->id ?? '') }}</td>
                                <td>{{ ($platform->name ?? '') }}</td>
                                <td>{{ ($platform->created_at ?? '') }}</td>
                                <td>{{ ($platform->updated_at ?? '') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.platforms.edit', $platform) }}" type="button" class="btn btn-info">{{Str::upper(trans('app.update'))}}</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                        <a href="{{ route("admin.platforms.destroy", $platform )}}" type="button" class="btn btn-danger delete" onclick="event.preventDefault()">{{Str::upper(trans('app.delete'))}}</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>                            
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>{{Str::upper(trans('app.id'))}}</th>
                            <th>{{Str::upper(trans('app.title'))}}</th>
                            <th>{{Str::upper(trans('app.created_at'))}}</th>
                            <th>{{Str::upper(trans('app.updated_at'))}}</th>
                            <th>{{Str::upper(trans('app.action'))}}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection