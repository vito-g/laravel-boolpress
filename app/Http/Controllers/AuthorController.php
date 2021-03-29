<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;//Inserito per consentire al presente Controller di comunicare col Database a mezzo Model 'Author'.

class AuthorController extends Controller
{
  //Creiamo una function index:
  public function index() {
    // dd('Prova');//Test di Collegamento Rotta.
    //Creo una variabile in cui salvare tutte le righe della tabella 'authors' del mio Database 'boolpress':
    $authors = Author::all();
    // dd($authors);
    return view('author.index', compact('authors'));
  }
}
