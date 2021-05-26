
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

                <h2 class="card-title">Edit Permission</h2>
            </header>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 mb-3 mb-lg-0">
                        {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}
                        <div class="form-group row">
                            <div class="col-sm-6 col-lg-4">

                                {{ Form::label('name', 'Permission Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

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



