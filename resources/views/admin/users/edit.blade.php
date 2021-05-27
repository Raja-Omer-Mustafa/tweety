@extends('admin.layouts.master')
@section('title', '| Edit User')

@section('content')


<section class="card">
    <header class="card-header">
        <h2 class="card-title">Add Admin</h2>
    </header>
    <div class="card-body">
        <div class="form-group row">


        </div>
        <hr>
        <h1><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h1>
        <div class="clearfix">&nbsp;</div>

       {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}
        <div class="form-group row">
            <div class="col-md-6 col-lg-4">
             {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}

            </div>
        </div>


        <div class="form-group row">
            <div class="col-md-6 col-lg-4">
               {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}

            </div>
        </div>
<div class="row form-group">
          <div class="col-md-6 col-lg-4">
                {{ Form::label('roles', 'Select Role') }}

                <select name="roles" id="roles" class="form-control">
                    <option value="">Select Role</option>
                    @foreach ($roles as $key => $role)
                    <option value="{{$role->id}}" @if($user->roles()->exists()){{ $user->roles[0]->id == $role->id ? "selected" : "" }} @endif>{{$role->name}}</option>
                    @endforeach
                </select>
               
            </div>
        </div>

         <div class="form-group row">
            <div class="col-md-6 col-lg-4">
         {{ Form::label('password', 'Password') }}<br>
        {{ Form::password('password', array('class' => 'form-control')) }}

            </div>
        </div>


         <div class="form-group row">
            <div class="col-md-6 col-lg-4">
           {{ Form::label('password', 'Confirm Password') }}<br>
        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

            </div>
        </div>
        {{ Form::submit('Update', array('class' => 'btn btn-primary mt-3')) }}

    {{ Form::close() }}

    </div>
</div>




@endsection
