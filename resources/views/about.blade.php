@extends('layouts.template')

@section('content')
    <div class='center'>
        <div class='d-flex flex-row '>
            <img src="{{ $post['image'] }}" alt="foto" width="300px"height="300px" style='border-radius:50%'>
           
            <div class='d-flex flex-column'>
                <h2 style='text-align:center;margin: 0 auto;'>{{$post['header']}}</h2>
                <h5 style='text-align:center;margin: 0 auto;'>{{$post['content']}}</h5>
            </div>
        </div>
        
    </div>
@endsection