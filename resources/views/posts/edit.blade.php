@extends('layouts.template')

@section('content')
    <div class="jumbotron jumbotron-fluid" style='padding:20px;'>
        <div class="container">
            <h1>Edit Blog Posts</h1>
            <form action="{{route('posts.update', $posts->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
                {{ csrf_field() }}
                
                <div class='form-group'>
                    <label for='title'>Title</label>
                    <input type='text' class='form-control' id='title' name='title' value = "{{$posts->title}}">      
                </div>
                <div class='form-group'>
                    <label for='description'>Description</label>
                    <textarea class='form-control' id='description' rows='5' name='description'>{{$posts->description}}</textarea>      
                </div>
                <div class='form-group'>
                    <label for='picture'>File Input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            @if($posts->picture)
                            <img  id="picture" name="picture" class = "preview img-fluid mb-3 col-sm-5" src="{{asset('/storage/posts_image/' . $posts->picture)}}" width='' height=''><br>
                            @else
                            <img class = "preview img-fluid mb-3 col-sm-5" src="" width='' height=''><br>
                            @endif
                            <img class = "preview img-fluid mb-3 col-sm-5" src="" width='' height=''><br>
                            <label class="custom-file-label" for="input-file">Choose file : </label>
                            <input type="file" class="custom-file-input" id="input-file" name="picture" onchange="loadFile(event)">
                        </div>
                    </div>
                <input type="hidden" name="id" value="{{ $posts->id }}"><br>
                <button type='submit' class='btn btn-primary'>Submit</button>
            <form>
        </div>
    </div>
    <script>
        function loadFile(event){
          alert('ok');
          var output = document.querySelector('.preview');
          output.src = URL.createObjectURL(event.target.files[0]);

        }
     
    </script>
@endsection