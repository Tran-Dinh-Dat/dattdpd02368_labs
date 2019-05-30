@extends('layout.master')
@section('title')
    Login
@endsection
@section('nav')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

     
<form action="{{ action('ValidationController@validateform') }}" method="POST">
    @csrf
<table class="table table-hover">
    <thead>
        <tr>
            <th>Login Form</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>User Name</td>
            <td><input class="form-control" type="text" name="username"></td>

        </tr>
        <tr>
            <td>Password</td>
            <td><input class="form-control"  type="text" name="password"></td>
        </tr>
        <tr>
            <td><button class='btn btn-info' type="submit">Ok</button></td>
        </tr>
        <tr>
            <td colspan="2">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </td>
        </tr>
    </tbody>
</table>
</form>
</div>
</div>
</div>
@endsection