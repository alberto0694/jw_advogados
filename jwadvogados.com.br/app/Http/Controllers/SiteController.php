<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advogado;
use App\Post;
use \Mail;
use App\Contato;

class SiteController extends Controller
{

    public function index()
    {
        $advogados = Advogado::where('ativo', 1)->get();
        $posts = Post::where('ativo', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        return view('site.index', compact('advogados', 'posts'));
    }

    public function quem_somos()
    {
        return view('site.quem-somos');
    }

    public function areas_atuacao()
    {
        return view('site.areas-atuacao');
    }

    public function blog()
    {
        $posts = Post::where('ativo', 1)->orderBy('created_at', 'desc')->paginate();
        return view('site.blog', compact('posts'));
    }

    public function post(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->get()->first();
        $posts = Post::where('ativo', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        return view('site.post', compact('post', 'posts'));
    }

    public function contato(Request $request)
    {
        return view('site.contato');
    }

    public function message(Request $request)
    {
        $contato = Contato::create($request->all());
        $dados = $request->all();
        Mail::send('emails.contato', $dados, function ($message) use ($dados) {
            $message->from('contato@jwadvogados.com.br', 'Contato de E-mail - jwadvogados.com.br');
            $message->to('josewilson@jwadvogados.com.br')->subject('Contato de E-mail - jwadvogados.com.br');
        });
        return view('site.contato');
    }

}
