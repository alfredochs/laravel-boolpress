<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postIniziale = [
[
    'title'=>'Titolo del primo post',
    'subtitle'=>'Descrizione del primo post',
    'thumb'=>'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01',
]
];
foreach ($postIniziale as $post){
    $newPost = new Post();
    $newPost->title = $post['title'];
    $newPost->subtitle = $post['subtitle'];
    $newPost->thumb = $post['thumb'];
    $newPost->save();
}
    }
}
