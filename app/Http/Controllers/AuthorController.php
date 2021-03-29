<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;//Inserito per consentire al controller di comunicare col Database a mezzo Model Author.

class AuthorController extends Controller
{
  //Creiamo una function index:
  public function index() {
    dump('Prova');//Test di collegamento rotta
  }
}
