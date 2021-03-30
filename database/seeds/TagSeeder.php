<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['sport', 'cucina', 'salute', 'musica', 'teatro', 'tv', 'gossip'];
        //Tags è un array di valori perchè i tag possono esser differenti.

        //Dunque, nel momento in cui vado ad istanziare un nuovo oggetto di Classe Tag, devo sapere che il nome del tag può variare. Per farlo variare ciclerò la var tags con un foreach:
        foreach ($tags as $key => $tag) {
          $tagDB = new Tag();
          $tagDB->name = $tag;
          $tagDB->save();
        }
    }
}
