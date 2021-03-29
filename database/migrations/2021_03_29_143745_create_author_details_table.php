<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//N.B.: Questa Tabella conterrà la FK che rimanderà all'id dell'autore
class CreateAuthorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_details', function (Blueprint $table) {
            $table->id();
            // Creiamo una colonna BigInteger che riporti quella che sarà la ForeignKey(FK), 'author_id', nella tabella 'author_details'. Essa richiamerà l'id (PK) dell'autore (vedi più in basso(*)):
            $table->unsignedBigInteger('author_id');
            //Creiamo, qui sotto, tutte le altre colonne della tabella:
            $table->text('biography');
            $table->string('website', 2048);
            $table->string('picture', 2048);

            $table->timestamps();
            //(*)Creiamo la relazione, di cui sopra:
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
        Schema::dropIfExists('author_details');
    }
}
