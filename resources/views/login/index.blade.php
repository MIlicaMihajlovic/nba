@extends('layouts.master')

@section('title') 
    Login User
@endsection


@section('content') 
    <h1>Login User</h1>

    <form method="POST" action="/login">

    {{ csrf_field() }}

    <div class="form-group">
        <label>Email</label>
        <input name="email" type="text" class="form-control" placeholder="Enter email">
        @include('layouts.partials.error-message', ['field' => 'email']) 
    </div>

    <div class="form-group">
        <label>Password</label>
        <input name="password" type="password" class="form-control" placeholder="Enter password">
        @include('layouts.partials.error-message', ['field' => 'password']) 
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection