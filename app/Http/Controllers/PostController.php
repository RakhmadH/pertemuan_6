<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            "id" => "posts",
            "posts" => Post::all()
        );
        return view('posts.index')->with($data);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

        'title' => 'required|string|max:50',
        'description' => 'required|string|min:5'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();
        return redirect('posts')->with('alert','Data Berhasil Ditambahkan !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function show($id)
    {
        $data = array(
            'id' => 'posts',
            'posts' => Post::find($id)
        );
        return view('posts.show') ->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "posts",
            'posts'=> Post::find($id)
        );

        return view('posts.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Post::where('id',$request->id)->update([
            'title'=> $request->title,
            'description'=>$request->description
        ]);

        return redirect('posts')->with('alert','Data Berhasil Terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('posts')->with('alert','Data Berhasil Dihapus !');
    }


}
