@extends('admin.layouts.master')
@section('content')

<div class="row">
    <div class="col">
        <section class="card">
            <header class="card-header">
                {{-- <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div> --}}

                <h2 class="card-title">Edit Role</h2>
            </header>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 mb-3 mb-lg-0">
                        {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
                        <div class="form-group row">
                            <div class="col-sm-6 col-lg-4">
                                {{ Form::label('name', 'Role Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                                @error('name')
                                {{ Form::label('', $message, array('class'=>'error')) }}
                                @enderror()
                            </div>
                            <div class="col-sm-12">
                                <h5><strong>Assign Permissions</strong></h5>
                                @error('permissions')
                                {{ Form::label('', $message, array('class'=>'error')) }}
                                @enderror()
                            </div>

                            @foreach ($permissions as $permission)
                            <div class="col-sm-4 col-md-6 col-lg-4">
                                <div class="checkbox-custom checkbox-primary">
                                    {{ Form::checkbox('permissions[]',  $permission->id, $role->permissions, array('id'=>$permission->name)) }}
                                    {{ Form::label($permission->name, ucfirst($permission->name)) }}
                                </div>
                            </div>
                            @endforeach
                            <div class="col-sm-12">
                                <div class="clearfix">&nbsp;</div>
                                {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
                            </div>
                        </div>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
