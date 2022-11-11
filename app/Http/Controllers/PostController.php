<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


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
            "posts" => Post::orderBy('created_at', 'desc')->paginate(10)
        );
        return view('posts.index')->with($data);

    }

    public function __construct()
    {
     $this->middleware('auth', ["except" => ["index","show"]]);
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
        'description' => 'required|string|min:5',
        'picture' => 'image|nullable|max:1999'
        ]);
        if ($request->hasFile('picture')){
            $filenameWithExt = $request->file('picture')->getClientOriginalName(); 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();

            $basename = uniqid(). time();
            $smallFilename= "small_{$basename} . {$extension}";
            $mediumFilename= "medium_{$basename} . {$extension}";
            $largeFilename= "large_{$basename} . {$extension}";

            $filenameSimpan = "{$basename}.{$extension}";
            $path = $request->file('picture')->storeAs('public/posts_image', $filenameSimpan);

            $request->file('picture')->storeAs("public/posts_image", $smallFilename);
            $request->file('picture')->storeAs("public/posts_image", $mediumFilename);
            $request->file('picture')->storeAs("public/posts_image", $largeFilename);

            // small
            $smallThumbnailPath = storage_path("app/public/posts_image/{$smallFilename}");
            $this->createThumbnail($smallThumbnailPath, 150, 93);
            //medium
            $mediumThumbnailPath = storage_path("app/public/posts_image/{$mediumFilename}");
            $this->createThumbnail($mediumThumbnailPath, 300, 185);
            //large
            $largeThumbnailPath = storage_path("app/public/posts_image/{$largeFilename}");
            $this->createThumbnail($largeThumbnailPath, 550, 340);

        }else{  
           $filenameSimpan = "noimage.png";
        }
        $post = new Post;
        $post->picture = $filenameSimpan;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();
        return redirect('posts')->with('alert','Data Berhasil Ditambahkan !');

    }

    public function createThumbnail($path, $width, $height){

        $img = Image::make($path)->resize($width,$height, function($constraint){
            $constraint->aspectRatio();
        });
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
        if ($request->hasFile('picture')){
            $filenameWithExt = $request->file('picture')->getClientOriginalName(); 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/posts_image', $filenameSimpan);
        }else{  
            $filenameSimpan = "noimage.png";
        }
        Post::where('id',$request->id)->update([
            'title'=> $request->title,
            'description'=>$request->description,
            'picture'=>$filenameSimpan
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
        File::delete(public_path() . '/storage/posts_image/'. $post->picture);
        $post->delete();
        
        return redirect('posts')->with('alert','Data Berhasil Dihapus !');
    }


}
