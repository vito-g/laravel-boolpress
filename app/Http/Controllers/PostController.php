<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;//Inserito per consentire al presente Controller di comunicare col Database a mezzo Model 'Author'.
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();
      return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);//lo store( ) riceve, come si vede, da sintassi, una variabile di tipo Request che possiamo analizzare con un dump & die. Si rileva, così, trattasi di un oggetto che descrive la chiamata HTTP.
        //I dati inviati col form del create.blade saranno visibili sotto request alla voce parameters e diventeranno, poi, i valori del nuovo post del mio Database.

        // Per esplorare unicamente i parameters mi basterà, dapprima, preparare una variabile dove vado a mettere, sfruttando il metodo all( ) su $request, tutte le coppie chiave-valore, appunto, dei campi del form:
        $data = $request->all();
        // ed eseguire nuovamente un dump & die su questa var:
        dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
