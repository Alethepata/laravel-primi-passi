<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $name = 'Kira';
    $surname = 'The dog';

    $home= 'Home';
    $linkhome='/';

    $promo= 'Promo';
    $linkpromo='/promo';

    $porfolio= 'Porfolio';
    $linkporfolio='/porfolio';

    $prodotti= 'Prodotti';
    $linkprodotti='/prodotti';

    $about= 'About';
    $linkabout='/about';

    $menu = [
        [
            'title' =>$home,
            'link' =>$linkhome
        ],
        [
            'title' =>$promo,
            'link' =>$linkpromo
        ],
        [
            'title' =>$porfolio,
            'link' =>$linkporfolio
        ],
        [
            'title' =>$prodotti,
            'link' =>$linkprodotti
        ],
        [
            'title' =>$about,
            'link' =>$linkabout
        ]
    ];

    return view('home', compact('name', 'surname','menu'));
});

Route::get('/about', function () {

    $home= 'Home';
    $linkhome='/';

    $promo= 'Promo';
    $linkpromo='/promo';

    $porfolio= 'Porfolio';
    $linkporfolio='/porfolio';

    $prodotti= 'Prodotti';
    $linkprodotti='/prodotti';

    $about= 'About';
    $linkabout='/about';

    $menu = [
        [
            'title' =>$home,
            'link' =>$linkhome
        ],
        [
            'title' =>$promo,
            'link' =>$linkpromo
        ],
        [
            'title' =>$porfolio,
            'link' =>$linkporfolio
        ],
        [
            'title' =>$prodotti,
            'link' =>$linkprodotti
        ],
        [
            'title' =>$about,
            'link' =>$linkabout
        ]
    ];

    return view('about', compact('menu'));
});
