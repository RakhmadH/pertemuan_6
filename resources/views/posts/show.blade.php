@extends('layouts.template')

@section('content')
    <div class="jumbotron jumbotron-fluid" style='padding:20px;'>
        <div class="container">
            <h1>{{$posts->title}}</h1>
            <small>Tanggal : {{$posts->created_at}}</small>
            <p>{{$posts->description}}</p>
            <img class="img-fluid mb-3 col-sm-5" src="{{asset('storage/posts_image/'.$posts->picture)}}" >
            <div>
            <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary">Edit</a>
            </div>
           <div>
           <form action="{{route('posts.destroy',$posts->id)}}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$posts->id}}"><br/>
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
           </div>
          
        </div>
        
    </div>

@endsection