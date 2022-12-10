@extends('layouts.template')

@section('content')
    <div class='center' style="height: 100vh;margin:50px">
        <div class='d-flex flex-column ' style="align-item:center;">
            <img src="{{asset('asset/profil.png')}}" alt="foto" width="300px"height="300px" style='border-radius:50%'>
           
            <div class='d-flex flex-column'>
                <h2 style='text-align:center;margin: 0 auto;'>{{$post['header']}}</h2>
                <h5 style='text-align:center;margin: 0 auto;'>{{$post['content']}}</h5>
            </div>
        </div>
        
    </div>
@endsection