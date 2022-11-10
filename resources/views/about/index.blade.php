@extends('layouts.template')

@section('content')

    <div class='center' style="height: 100vh;margin:50px">
        <div class='d-flex flex-row '>
            @if(count($abouts)>0)
                @foreach($abouts as $about)
                    <img src="{{ $about->image }}" alt="foto" width="300px"height="300px" style='border-radius:50%;padding:20px'>
                
                    <div class='d-flex flex-column' >
                        <h2 style='padding:20px;text-align:center;margin: 0 auto;'>{{$about->header}}</h2>
                        <h5 style='padding:20px 150px 20px 150px;text-align:center;margin: 0 auto;'>{{$about->content}}</h5>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
@endsection