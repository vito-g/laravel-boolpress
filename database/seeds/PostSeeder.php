<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorDetail;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10: $i++) {

        $author = new Author();
        $author->name = $faker->firstName();
        $author->lastname = $faker->lastName();
        $author->email = $faker->email();
        $author->save();

        $authorDetail = new AuthorDetail();
        $authorDetail->biography = $faker->text();
        $authorDetail->website = $faker->url();
        $authorDetail->picture = 'https://picsum.photos/seed/' . rand(0, 1000) . '/200/300';

        $author->detail()->save($authorDetail);

        for ($j = 0; $j < rand (1, 4); $j++) {
          $post = new Post();
          $post->title = $faker->text(30);
          $post->body = $faker->text(1200);

          $author->post()->save($post);
        }
      }

    }
}
