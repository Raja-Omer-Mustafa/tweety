{{-- \resources\views\users\create.blade.php --}}
@extends('admin.layouts.master')
@section('title', '| Add User')

@section('content')

<section class="card">
    <header class="card-header">
        <h2 class="card-title">Add Admin</h2>
    </header>
    <div class="card-body">
        <div class="form-group row">


        </div>
        <div class="clearfix">&nbsp;</div>

        {{ Form::open(array('url' => 'users')) }}

        <div class="form-group row">
            <div class="col-md-6 col-lg-4">
                {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}

            </div>
        </div>


        <div class="form-group row">
            <div class="col-md-6 col-lg-4">
               {{ Form::label('email', 'Email') }}
        {{ Form::email('email', '', array('class' => 'form-control')) }}

            </div>
        </div>
<div class="row form-group">
           <div class="col-md-6 col-lg-4">
                {{ Form::label('roles', 'Select Role') }}

                <select name="roles" id="roles" class="form-control">
                    <option value="">Select Role</option>
                    @foreach ($roles as $key => $role)
                    <option value="{{$role->id}}" {{ old('roles') == $role->id ? "selected" : "" }}>{{$role->name}}</option>
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
        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

    </div>
</div>

@endsection