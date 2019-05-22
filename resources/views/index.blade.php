@extends('layout.master')
@section('title')
index
@endsection
@section('nav')

<div class="navbar">
    <a class="navbar-brand" href="#">Title</a>
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Link</a>
        </li>
    </ul>
</div>

@endsection
@section('sidebar')
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
        Panel content
    </div>
</div>

@endsection
@section('content')
<div class="col-md-12" style="padding-left: 0px">
    <h3 style="margin-top: 0;" class="alert alert-info">Xin chào {{$name}}</h3>
    <p>Hôm nay là {{$day}}</p>
</div>
<div class="col-md-12">
    <h3>Danh sách xe yêu thích</h3>
    <ul>
        @foreach ($xe as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul>

</div>
<form action="" method="POST" role="form">
    <legend>Form title</legend>

    <div class="form-group">
        <label for="">label</label>
        <input type="text" class="form-control" id="" placeholder="Input field">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection