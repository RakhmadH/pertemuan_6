@extends('layouts.template')

@section('content')
    <div class='center'>
            
           
            <div class='d-flex flex-column' style="height:100vh;padding:5vh">
                <img src="{{asset('asset/selamat_datang.png')}}" alt="foto" width="300px"height="300px" 
                style='border-radius:25%;padding:20px;text-align:center;margin: 0 auto;'>
                <h2 style='padding:20px;text-align:center;margin: 0 auto;'>{{$post['header']}}</h2>
                <h5 style='padding:20px;text-align:center;margin: 0 auto;'>
                {{$post['content']}}
            </div>
        </div>
        
    </div>
@endsection