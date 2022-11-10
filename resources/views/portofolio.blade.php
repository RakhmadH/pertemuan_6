@extends('layouts.template')

@section('content')
    <div class='center'style="height: 100vh;margin:50px 60px 50px 60px" >
        <div class='d-flex flex-row'>
            <div class='d-flex flex-column'>
                <img src="{{ $post['image']}}" alt="foto" width="300px"height="300px" 
                style='border-radius:25%;padding:20px;text-align:center;margin: 0 auto;'>
                <h2 style='padding:20px;text-align:center;margin: 0 auto;'>{{$post['header']}}</h2>
                <h5 style='padding:20px;text-align:center;margin: 0 auto;'>
                {{$post['content']}}
            </div>
        </div>
        
    </div>
@endsection