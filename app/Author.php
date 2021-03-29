<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Qui vado ad inserire il TIPO di  relazione esistente tra la tab 'authors', relativa a questo Model, e la tab 'author_details'(contenete, la FK collegata all'id di 'authors'). Partendo dal presente Model 'Author' dobbiamo arrivare al Model 'AuthorDetail'. Definisco, dunque, una FX con un nome che identifichi la tab ('author_details') relativa all'altro Model (l'AuthorDetail).
    public function detail() {
      return $this->hasOne('App\AuthorDetail');//'hasOne' indica il tipo di relazione 1 ad 1
    }
    //In altri termini, ogni qualvolta dovremo mappare una relazione tra due o più tabelle dovremo creare una MAPPING tra la tabella secondaria (qui chiamata, 'authors') e la primaria (qui, 'author_details'). Procederemo all'inverso nell'altro Model.
}
