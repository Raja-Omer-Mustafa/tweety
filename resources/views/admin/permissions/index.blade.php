{{-- \resources\views\permissions\index.blade.php --}}
@extends('admin.layouts.master')
@section('content')

<section class="card">
    <header class="card-header">
        {{-- <div class="card-actions">
            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
        </div> --}}


        <h2 class="card-title">Available Permissions</h2>
    </header>
    <div class="card-body">
       
        <div class="row">
            <div class="col-sm-12 mb-3">
                <div class="mb-4">
                    <a href="{{ URL::to('permissions/create') }}"class="btn btn-primary float-lg-right"><i class="fas fa-plus"></i> Add Permission </a>
                </div>
            </div>
        </div>
      
        <table class="table table-bordered table-striped mb-0" id="datatable-editable">
            <thead>



                <thead>
                    <tr>
                        <th>Permissions</th>
                        <th>Actions</th>
                    </tr>
                </thead>

            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>
                       
                        <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}"class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                        
                        {!! Form::open(['method' => 'DELETE', 'class' => 'delete', 'route' => ['permissions.destroy', $permission->id], 'style' => 'display: inline-block; color:red;' ]) !!}
                        {{ Form::button('<i class="far fa-trash-alt"></i>', ['class' => 'on-default remove-row btn', 'type' => 'submit']) }}
                        {!! Form::close() !!}
                      
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a> -->

    </div>

@endsection
