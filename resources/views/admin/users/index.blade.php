
{{-- \resources\views\users\index.blade.php --}}
@extends('admin.layouts.master')
@section('content')
<section class="card">
    <header class="card-header">
        {{-- <div class="card-actions">
        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
        </div> --}}

        <h2 class="card-title">Users</h2>
    </header>
    <div class="card-body">

       
        <div class="row">
            <div class="col-sm-12 mb-3">
                <div class="mb-4">
                    <a href="{{ route('users.create') }}" class="btn btn-primary float-lg-right"><i class="fas fa-plus"></i> Add </a>
                </div>
            </div>
        </div>
      
        <div class="row">
            <div class="col-sm-12" id="no-more-tables">
                <table class="table table-bordered table-striped mb-0" id="datatable-editable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date/Time</th>
                            <th>Role</th>
                            <!-- <th>Status</th> -->
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr >
                            <td data-title="Name">{{ $user->name}}</td>
                            <td data-title="Email">{{ $user->email }}</td>
                            <td data-title="Date/Time">{{ $user->created_at->format('F d, Y h:ia') }}</td>
                            <td data-title="Role">{{  $user->roles()->pluck('name')->implode(' ') }}</td>
                            <!-- <td data-title="Status">{{ ($user->active) ? 'Actvie' : 'Inactive' }}</td> -->
                            <td data-title="Actions">

                        
                                <a href="{{ route('users.edit', $user->id) }}" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                              

                                {!! Form::open(['method' => 'DELETE', 'class' => 'delete', 'route' => ['users.destroy', $user->id], 'style' => 'display: inline-block; color:red;' ]) !!}
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
</section>

@endsection
