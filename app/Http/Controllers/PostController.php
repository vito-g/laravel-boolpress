<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Per l'utilizzo del mail sender.
use App\Mail\PostCreated;
use Illuminate\Support\Facades\Mail;
// End - Per l'utilizzo del mail sender.

// Per l'utilizzo della nuova mail.
// use App\Mail\TagsUsed;
// End - Per l'utilizzo della nuova mail .

use App\Author;//Inserito per consentire al presente Controller di comunicare col Database a mezzo Model 'Author'.
use App\Post;
use App\Tag;

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

      $authors = Author::all();
      $tags = Tag::all();
      return view('post.create', compact('authors', 'tags'));
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

        //I dati inviati col form del create.blade saranno visibili sotto *request* alla voce parameters e diventeranno, poi, i valori del nuovo post del mio Database.
        // Pertanto, Per esplorare unicamente i parameters mi basterà, dapprima, preparare una variabile dove vado a mettere, sfruttando il metodo all( ) su $request,  tutte le coppie chiave-valore, appunto, dei campi del form:
        $data = $request->all();
        // ed eseguire nuovamente un dump & die su questa var:
        // dd($data);
        // Istanzio, dunque, un nuovo oggetto di classe Post (quella del mio Model Post):
        $post = new Post();
        //che a mezzo fill() riceve per parametro i dati della request:

        $post->fill($data);//fa un'assegnazione di massa per tutti gli attributi dell'oggetto del mio Database.

        //Vado a salvarli:
        $post->save();

        //Per salvare all’interno della tabella
        // ponte, creando quindi una relazione
        // tra due record, possiamo utilizzare
        // il metodo attach:
        $post->tags()->attach($data['tags']);
        // Per eliminare questa relazione usiamo detach().
        // sync() per aggiornare le relazioni tra due record.

        // ---------------questa parte non funziona ---------------------


        // $storedPost = Post::orderBy('id', 'desc')->first();//sto prendendo l'ultimo post che ha salvato
        //
        // Mail::to('mail@example.com')->send(new TagsUsed($storedPost->tags));
        // -------------------------------------------

        Mail::to('mail@example.com')->send(new PostCreated($post));
        //E' proprio il Mail::to che chiama internamente al send( ) il build( ) di PostCreated. Visto che non possiamo accedere al metodo build( ), ma lo fa Laravel al posto nostro, dobbiamo per forza inviare, al PostCreated, $post come dipendenza esterna. N.B.: Anche qui avrei potuto passargli il $storedPost.

        return redirect()->route('post.index');

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
