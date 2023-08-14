<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = DB::table('teste')->all();
        return view('teste.test_control',compact('data'))->name('teste');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = DB::table('')->get();
        return view('', compact(''))

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nome' =>'required|min:3|max:100',
            'email'=>'required|unique:users,email',

        ]);

        $teste = new Teste;
        $teste->nome = $request->nome;
        $teste->email = $request->email;

        $teste->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teste  $teste
     * @return \Illuminate\Http\Response
     */
    public function show(Teste $teste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teste  $teste
     * @return \Illuminate\Http\Response
     */
    public function edit(Teste $teste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teste  $teste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teste $teste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teste  $teste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teste $teste)
    {
        //
    }
}
