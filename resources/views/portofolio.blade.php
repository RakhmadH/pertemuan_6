@extends('layouts.template')

@section('content')
<<<<<<< Updated upstream
    <div class='center'>
        <div class='d-flex flex-row'>
=======
    <div class="center" >
        <div class="d-flex flex-row">
>>>>>>> Stashed changes
            
           
            <div class='d-flex flex-column ' style="text-align:center">
                <img src="{{ $post['image']}}" alt="foto" width="300px"height="300px" 
                style='border-radius:25%;padding:20px;text-align:center;margin: 0 auto;'>
                <h2 style='padding:20px;text-align:center;margin: 0 auto;'>{{$post['header']}}</h2>
                <h5 style='padding:20px;text-align:center;margin: 0 auto;'>
<<<<<<< Updated upstream
                {{$post['content']}}
            </div>
        </div>
        
=======
                {{$post['content']}}</h5>
                <div class="card-body justify-content-center">
        @auth
            <p>Welcome <b>{{ Auth::user()->name }}</b></p>
            <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        @endauth
        @guest
            <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        @endguest
        </div>  
            </div>
        </div>
        
       
>>>>>>> Stashed changes
    </div>
@endsection