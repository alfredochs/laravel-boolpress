<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $postsVue = [
        [
            'id' => 1,
            'title' => 'Spiderman 1',
            'subtitle' => 'Descrizione Spiderman 1',
            'thumb' => 'https://i2.res.24o.it/stream/assets/img/gallery/cultura/spider-man-no-way-home-e-altri-film-week-end/AEbbP92/images/large_05.jpg',
        ],
        [
            'id' =>2,
            'title' => 'Spiderman 2',
            'subtitle' => 'Descrizione Spiderman 2',
            'thumb' => 'https://image.api.playstation.com/vulcan/img/rnd/202011/0714/vuF88yWPSnDfmFJVTyNJpVwW.png',
        ]]
        ;

        return $postsVue;
    }
}
