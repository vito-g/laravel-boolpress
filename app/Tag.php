<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  // Qui vado ad inserire il TIPO di relazione (Many to Many) esistente tra la tab 'tags', relativa a questo Model, e la tab 'posts'. Partendo dal presente Model 'Tag' dobbiamo arrivare al Model 'Post'. Definisco, dunque, una FX con un nome che identifichi la tab ('posts') relativa all'altro Model (il Post).
  public function posts() {
    return $this->belongsToMany('App\Post');
  }
  //procederò in modo analogo all'interno del Model Post.

  //COME POSSO LEGGERLA: Un tag può avere tanti post.
}
