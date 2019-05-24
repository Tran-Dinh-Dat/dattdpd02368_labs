<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="row">
            @include('../layout/news_menu')
        </div>
    </div>
    <div class="container">
    <div class="row">
       
        <div class="col-md-12">
                @yield('content')
            </div>
    </div>
</div>
    

</body>
</html>