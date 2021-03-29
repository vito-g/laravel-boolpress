<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorDetail extends Model
{
  // Qui vado ad inserire il TIPO di  relazione esistente tra la tab 'author_details', relativa a questo Model, e la tab 'authors'(contenete, la PK che è id di 'authors'). Partendo dal presente Model 'AuthorDetail' dobbiamo arrivare al Model 'Author'. Definisco, dunque, una FX con un nome che identifichi la tab ('authors') relativa all'altro Model (l'Author).
  public function author() {
    return $this->belongsto('App\Author');//'hasOne' indica il tipo di relazione 1 ad 1
  }
  //In altri termini, ogni qualvolta dovremo mappare una relazione tra due o più tabelle dovremo creare una MAPPING tra la tabella primaria (qui chiamata, 'author_details') e la secondaria (qui, 'authors'). Procederemo all'inverso nell'altro Model.
}
