@extends('layout.master')
@section('title')
    Login
@endsection
@section('nav')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

     
<form action="{{ action('ValidationController@postCustomValidation') }}" method="POST">
    @csrf
<table class="table table-hover">
    <thead>
        <tr>
            <th>Custom Validation Form</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Phone Number</td>
            <td><input class="form-control" type="text" name="phone" value="{{ old('phone') }}"></td>

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