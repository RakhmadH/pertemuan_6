@extends('layouts.template')

@section('content')
    <div style='padding:20px;height: 100vh'>
        <div style = "padding:0px 50px 20px 50px" >
            @if(Session::has('alert'))
                <div class="alert alert-success">
                    {{Session::get('alert')}}
                </div> 
            @endif
                <h1>Blog Posts</h1> <br>
                <a href="/posts/create">tambah blog</a>
                @if(count($posts)>0)
                    @foreach ($posts as $post)
                    <div class="well">
                        <h3><a href="/posts/{{$post->id}}">
                            {{$post->title}}
                        </a>
                        </h3>
                        <small>
                            Tanggal : {{$post->created_at}}
                        </small>
                    </div>
                    @endforeach
                    Halaman : {{ $posts->currentPage() }} <br />
                    Jumlah Data : {{ $posts->total() }} <br />
                    Data Per Halaman : {{ $posts->perPage() }} <br /><br>
                    <div class="d-flex">
                    {{ $posts->links() }}
        </div>
       
    </div>
            @else
            <h3>Tidak ada data.</h3>
        @endif
        <br>
        <br>

    </div>
@endsection