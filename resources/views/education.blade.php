@extends('layouts.template')

@section('content')
<div  style="height: 100vh;margin:50px">
       
       <div class='d-flex flex-column'>
           <div class='p-2'>
                <h2>{{$post['header']}}</h2>
                <table style="width:20%">
                @foreach (array_combine($post['educations'],$post['years']) as $edu=>$year)
                
                    <tr>
                        
                        <td style='width:70%'> {{$edu}} </td>
                        
                        <td style='width:30%'>{{$year}}</td>
                        
                    </tr>
                @endforeach
                   
                </table>
                <br><br><br><br><br><br>
                <h4>Gatau mau diisi apa lagi, soalnya cuma riwayat pendidikan.</h4>
                <img src="{{asset('asset/merenung.png')}}" width='400px' height='300px'>
           </div>
       </div>
   </div>
@endsection