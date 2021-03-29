<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // Qui vado ad inserire il TIPO di  relazione esistente tra la tab 'posts', relativa a questo Model, e la tab 'authors'(contenete, la PK che è id di 'authors'). Partendo dal presente Model 'Post' dobbiamo arrivare al Model 'Author'. Definisco, dunque, una FX con un nome che identifichi la tab ('authors') relativa all'altro Model (l'Author).
  public function author() {
    return $this->belongsto('App\Author');
  }
  //In altri termini, ogni qualvolta dovremo mappare una relazione tra due o più tabelle dovremo creare una MAPPING tra la tabella primaria (qui chiamata, 'author_details') e la secondaria (qui, 'authors'). Procederemo all'inverso nell'altro Model.
}

//COME POSSO LEGGERLA: Un post può avere un solo autore.
