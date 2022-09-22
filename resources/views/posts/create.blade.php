@extends('layouts.template')
@section('content')
    <div class="jumbotron jumbotron-fluid" style='padding:20px;'>
        <div class="container">
            <h1>Add Blog Posts</h1>
            <form action="{{route('posts.store')}}" method="POST">
                {{ csrf_field() }}
                <div class='form-group'>
                    <label for='title'>Title</label>
                    <input type='text' class='form-control' id='title' name='title'> 
                    @error('title')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror     
                </div>
                <div class='form-group'>
                    <label for='description'>Description</label>
                    <textarea class='form-control' id='description' rows='5' name='description'></textarea>
                    @error('description')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror        
                </div>
                <br>
                <button type='submit' class='btn btn-primary'>Submit</button>
            <form>
        </div>
    </div>
@endsection