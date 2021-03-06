@extends('../layout.news_master')
@section('title')
    Bài làm thêm lab3
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
@section('content')
    @foreach ($news_list as $news)
        <div class="col-md-3">
            @if ($loop->first)
            @include('../news.news_item', ['title' => $news['title'], 'content' => $news['content'], 'post_date' => $news['post_date'], 'class' => 'success']);
           
                {{-- <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $news['title'] }}</h3>
                    </div>
                    <div class="panel-body">
                        {{ $news['content'] }}
                    </div>
                    <div class="panel-footer">
                        {{$news['date_post']}}
                    </div>
                </div> --}}
                
                
            @else 
            @include('../news.news_item', ['title' => $news['title'], 'content' => $news['content'], 'post_date' => $news['post_date'], 'class' => 'info']);
                {{-- <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $news['title'] }}</h3>
                    </div>
                    <div class="panel-body">
                        {{ $news['content'] }}
                    </div>
                    <div class="panel-footer">
                        {{$news['date_post']}}
                    </div>
                </div> --}}
            @endif
            
        </div>
    @endforeach
@endsection