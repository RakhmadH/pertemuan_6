
@extends('layouts.template')

@section('content')
    <div style="height: 100vh;margin:50px"  >
       
        <div class='d-flex flex-column'>
            <div class='p-2'>
                 <h2>Dalam Pengerjaan :</h2>
                 @foreach (array_combine($post['projects'],$post['gambar_project']) as $p=>$gp)
                 <ul>
                    <h5>-  {{$p}}</h5> 
                    <br>
                    <img src="{{$gp}}" width="200px"height="200px">
                 </ul>
                 @endforeach
            </div>
            <div class='p-2'>
                <h2>{{$post['tambahan']}}</h2>
                <br>
                <div class="d-flex flex-row">
                    <img src="{{ $post['logo_wa'] }}" alt="Wangsaff" width="100px"height="100px">
                    <a href='https://wa.me/qr/6Y3VQUZ7C4V2C1' style='padding:25px 20px 20px 0px'>
                        <h3>{{$post['nomor']}}</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection