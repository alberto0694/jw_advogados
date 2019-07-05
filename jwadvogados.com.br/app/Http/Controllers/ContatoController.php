<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::where('ativo', 1)->paginate();
        return view('admin.contatos.index', compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $path = $request->file('foto')->store('images');
        // $data = $request->all();
        // $data['foto'] = $path;
        // Contato::create($data);
        // return redirect(route('contatos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advogado  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $contato = Contato::find($id);
        $contato->update(['ativo' => 0]);
        return redirect(route('contatos.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advogado  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $contato = Contato::find($id);
        return view('admin.contatos.visualizar', compact('contato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advogado  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contato = Contato::find($id);
        $data = $request->all();
        if($request['foto']){
            $path = $request->file('foto')->store('images');
            $data['foto'] = $path;
        }
        $contato->update($data);
        return redirect(route('contatos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advogado  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $contato = Contato::find($id);
        $contato->update(['ativo' => 0]);
        return redirect(route('contatos.index'));
    }
}
