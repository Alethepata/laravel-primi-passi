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

    $portfolio= 'Portfolio';
    $linkportfolio='/portfolio';

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
            'title' =>$portfolio,
            'link' =>$linkportfolio
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

Route::get('/promo', function () {

    $home= 'Home';
    $linkhome='/';

    $promo= 'Promo';
    $linkpromo='/promo';

    $portfolio= 'Portfolio';
    $linkportfolio='/portfolio';

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
            'title' =>$portfolio,
            'link' =>$linkportfolio
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

    return view('promo', compact('menu'));
});

Route::get('/portfolio', function () {

    $home= 'Home';
    $linkhome='/';

    $promo= 'Promo';
    $linkpromo='/promo';

    $portfolio= 'Portfolio';
    $linkportfolio='/portfolio';

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
            'title' =>$portfolio,
            'link' =>$linkportfolio
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

    return view('portfolio', compact('menu'));
});

Route::get('/prodotti', function () {

    $home= 'Home';
    $linkhome='/';

    $promo= 'Promo';
    $linkpromo='/promo';

    $portfolio= 'Portfolio';
    $linkportfolio='/portfolio';

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
            'title' =>$portfolio,
            'link' =>$linkportfolio
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

    return view('prodotti', compact('menu'));
});

Route::get('/about', function () {

    $home= 'Home';
    $linkhome='/';

    $promo= 'Promo';
    $linkpromo='/promo';

    $portfolio= 'Portfolio';
    $linkportfolio='/portfolio';

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
            'title' =>$portfolio,
            'link' =>$linkportfolio
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
