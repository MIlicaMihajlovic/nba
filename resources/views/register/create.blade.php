@extends('layouts.master')

@section('title') 
    Register User
@endsection


@section('content') 
    <h1>Register User</h1>

    <form method="POST" action="/register">

    {{ csrf_field() }}

    <div class="form-group">
        <label>Name</label>
        <input name="name" type="text" class="form-control" placeholder="Enter name">
        <!-- @include('layouts.partials.error-message', ['field' => 'name']) definisali smo $field za error -->
    </div>

    <div class="form-group">
        <label>Email</label>
        <input name="email" type="text" class="form-control" placeholder="Enter email">
        <!-- @include('layouts.partials.error-message', ['field' => 'email']) definisali smo $field za error -->
    </div>

    <div class="form-group">
        <label>Password</label>
        <input name="password" type="password" class="form-control" placeholder="Enter password">
        <!-- @include('layouts.partials.error-message', ['field' => 'password']) definisali smo $field za error -->
    </div>

    <div class="form-group">
        <label>Password confirmation</label>
        <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm password">
        <!-- @include('layouts.partials.error-message', ['field' => 'password']) definisali smo $field za error -->
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
    

