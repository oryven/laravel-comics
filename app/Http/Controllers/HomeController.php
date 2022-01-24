<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $arrComics = [

            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
            [
                'image' => 'storage/assets/img/superman.jpg',
                'title' => 'Superman'
            ],
    
        ];
        return view('home',compact('arrComics'));
    }

    public function comic() {
        return view('comic');
    }
    
}
