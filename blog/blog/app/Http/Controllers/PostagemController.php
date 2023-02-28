<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::all();
        //dd($postagens);
        return view('postagem.index', ['postagem' => $postagens]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $postagens = Postagem::all();
        return view('postagem.create',['postagem'=> $postagens]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd($id);
        $postagem = Postagem::find($id);
        //dd($postagem);
        return view('postagem.show',['postagem'=> $postagem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
