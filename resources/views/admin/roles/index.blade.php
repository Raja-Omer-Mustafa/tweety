{{-- \resources\views\roles\index.blade.php --}}
@extends('admin.layouts.master')
@section('content')

<div class="col-lg-12">
    <!-- <h1><i class="fa fa-key"></i> Roles -->

    <!-- <a href="{{ route('users.index') }}" class="mb-1 mt-1 mr-1 btn btn-warning  pull-right">Users</a>
<a href="{{ route('permissions.index') }}" class="mb-1 mt-1 mr-1 btn btn-primary pull-right">Permissions</a></h1> -->
    <!-- <hr> -->
    <section class="card">
        <header class="card-header">
            {{-- <div class="card-actions">
            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
            </div> --}}

            <h2 class="card-title">ROLES</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <div class="mb-4">
                        <a href="{{ URL::to('roles/create') }}" class="btn btn-primary float-lg-right"><i class="fas fa-plus"></i> Add ROLE </a>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-sm-12" id="no-more-tables">
                    <table class="table table-bordered table-striped mb-0" id="datatable-editable" style="table-layout: fixed;">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $role)
                            <tr>

                                <td data-title="Role">{{ $role->name }}</td>

                                <td data-title="Permissions">{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                                <td data-title="Actions">
                                    
                                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                                   
                                    {!! Form::open(['method' => 'DELETE', 'class' => 'delete', 'route' =>  ['roles.destroy', $role->id] ,  'style' => 'display:inline-block; color:red; width:20px;' ]) !!}
                                    {{ Form::button('<i class="far fa-trash-alt"></i>', ['class' => 'on-default remove-row btn', 'type' => 'submit']) }}
                                    {!! Form::close() !!}
                                    

                                   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <!-- <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Add Role</a> -->

        </div>
 
    @endsection
