<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Properties extends Controller
{
    //
    public function index()
    {
        //data
        $categories = (object) [
            [
                'url' => 'digital-billboards',
                'name' => 'Digital Billboards'
            ],
            [
                'url' => 'traditional-billboards',
                'name' => 'Traditional Billboards'
            ],
            [
                'url' => '#',
                'name' => 'Turnstiles'
            ],
            [
                'url' => '#',
                'name' => 'Trains'
            ],
            [
                'url' => '#',
                'name' => 'Banners'
            ],
            [
                'url' => '#',
                'name' => 'Posters'
            ],
            [
                'url' => '#',
                'name' => 'LED TV'
            ],
            [
                'url' => '#',
                'name' => 'Rails'
            ],
            [
                'url' => '#',
                'name' => 'Stairways'
            ],
            [
                'url' => '#',
                'name' => 'Platform'
            ],
        ];
        
        return view('properties')->with(['data' => $categories]);
    }
}
