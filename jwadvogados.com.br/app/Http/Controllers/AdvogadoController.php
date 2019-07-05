<?php

namespace App\Http\Controllers;

use App\Advogado;
use \Storage;
use Illuminate\Http\Request;

class AdvogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advogados = Advogado::where('ativo', 1)->paginate();
        return view('admin.advogados.index', compact('advogados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advogados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('foto')->store('images');
        $data = $request->all();
        $data['foto'] = $path;
        Advogado::create($data);
        return redirect(route('advogados.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $advogado = Advogado::find($id);
        $advogado->update(['ativo' => 0]);
        return redirect(route('advogados.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $advogado = Advogado::find($id);
        return view('admin.advogados.edit', compact('advogado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $advogado = Advogado::find($id);
        $data = $request->all();
        if($request['foto']){
            $path = $request->file('foto')->store('images');
            $data['foto'] = $path;
        }
        $advogado->update($data);
        return redirect(route('advogados.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $advogado = Advogado::find($id);
        $advogado->update(['ativo' => 0]);
        return redirect(route('advogados.index'));
    }
}
