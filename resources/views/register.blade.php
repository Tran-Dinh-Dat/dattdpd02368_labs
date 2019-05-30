@extends('layout.master')
@section('title')
    Login
@endsection
@section('nav')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

     
<form action="{{ action('HomeController@register') }}" method="POST">
    @csrf
<table class="table table-hover">
    <thead>
        <tr>
            <th>Register Form</th>
        </tr>
    </thead>
    <tbody>
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
        <tr>
            <td>User Name</td>
            <td><input class="form-control" type="text" name="username"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input class="form-control"  type="text" name="password"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input class="form-control"  type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td><input class="form-control"  type="date" name="date"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select class="form-control" name="gender">
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input class="form-control"  type="text" name="address"></td>
        </tr>



        <tr>
            <td><button class='btn btn-info' type="submit">Register</button></td>
        </tr>
        
    </tbody>
</table>
</form>
</div>
</div>
</div>
@endsection