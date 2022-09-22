@extends('layouts.template')

@section('content')
    <div class="jumbotron jumbotron-fluid" style='padding:20px;'>
        <div class="container">
        @if(Session::has('alert'))
            <div class="alert alert-success">
                {{Session::get('alert')}}
            </div> 
        @endif
            <h1>Blog Posts</h1>
            @if(count($posts)>0)
                @foreach ($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">
                        {{$post->title}}
                    </a>
                    </h3>
                    <small>
                        Tanggal : {{$post->created_at}}
                    </small>
                </div>
                @endforeach
            @else
            <h3>Tidak ada data.</h3>
        @endif
        <br>
        <br>
        <a href="/posts/create">tambah blog</a>
        </div>
    </div>
    
    

@endsection