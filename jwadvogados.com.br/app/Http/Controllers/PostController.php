<?php

namespace App\Http\Controllers;

use App\Post;
use App\ImagemPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('ativo', 1)->paginate();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = str_slug($request->titulo);
        $post = Post::create($data);
        $fotos = $request->file('fotos');
        foreach($fotos as $foto) {
            $path = $foto->store('images');
            $foto = ImagemPost::make(['caminho' => $path]);
            $post->addImagem($foto);

        }
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advogado  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update(['ativo' => 0]);
        return redirect(route('posts.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advogado  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advogado  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $data['slug'] = str_slug($request->titulo);
        $post->update($request->all());

        if($request->has('fotos')){
            $fotos = $request->file('fotos');
            $post->deleteImagens();
            foreach($fotos as $foto) {
                $path = $foto->store('images');
                $foto = ImagemPost::make(['caminho' => $path]);
                $post->addImagem($foto);
            }
        }

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advogado  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update(['ativo' => 0]);
        return redirect(route('posts.index'));
    }
}
