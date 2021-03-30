<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();

            // Creiamo una colonna BigInteger che riporti la prima delle due ForeignKey(FK), 'post_id', presenti nella tabella 'post_tag'. Essa richiamerà l'id (PK) del post(vedi più in basso(*)):
            $table->unsignedBigInteger('post_id');
            // Creiamo una colonna BigInteger che riporti la seconda delle due ForeignKey(FK), 'tag_id', presenti nella tabella 'post_tag'. Essa richiamerà l'id (PK) del tag(vedi più in basso(**)):
            $table->unsignedBigInteger('tag_id');

            $table->timestamps();

            // (*)
            $table->foreign('post_id')
            ->references('id')
            ->on('posts');//(*)

            //(**)
            $table->foreign('tag_id')
            ->references('id')
            ->on('tags');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
