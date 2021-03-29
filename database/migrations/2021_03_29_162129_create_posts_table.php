<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // Creiamo una colonna BigInteger che riporti quella che sarà la ForeignKey(FK), 'author_id', nella tabella 'posts'. Essa richiamerà l'id (PK) dell'autore (vedi più in basso(*)):
            $table->unsignedBigInteger('author_id');
            //Creiamo, qui sotto, tutte le altre colonne della tabella:
            $table->string('title', 255);
            $table->text('body');

            $table->timestamps();
            //(*)Creiamo la Relazione di cui sopra (visibile, poi, nel 'Designer' del Database, una volta lanciata la migrate):
            $table->foreign('author_id')//Qui la FK presente in 'author_details'.
            ->references('id')//Qui l'id (PK) nella tabella 'authors' cui la FK fa riferimento
            ->on('authors');//Qui il nome della tabella contenente quella PK
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
