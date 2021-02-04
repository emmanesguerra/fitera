<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Properties extends Controller
{
    CONST DIGITAL_BILLBOARD = 5;
    CONST TRADITIONAL_BILLBOARD = 3;
    
    //
    public function index($request = null)
    {
        $bselect = false;
        $tselect = false;
        if(!empty($request) && $request != '#') {
            if($request == 'digital-billboards') {
                $bselect = true;
            } else if ($request == 'traditional-billboards') {
                $tselect = true;
            }
        }
        
        //data
        $categories = (object) [
            [
                'id' => '1',
                'url' => 'digital-billboards',
                'name' => 'Digital Billboards',
                'display' => self::DIGITAL_BILLBOARD,
                'selected' => $bselect,
            ],
            [
                'id' => '2',
                'url' => 'traditional-billboards',
                'name' => 'Traditional Billboards',
                'display' => self::TRADITIONAL_BILLBOARD,
                'selected' => $tselect,
            ],
            [
                'id' => '3',
                'url' => '#',
                'name' => 'Turnstiles',
                'display' => 0,
                'selected' => false,
            ],
            [
                'id' => '4',
                'url' => '#',
                'name' => 'Trains',
                'display' => 0,
                'selected' => false,
            ],
            [
                'id' => '5',
                'url' => '#',
                'name' => 'Banners',
                'display' => 0,
                'selected' => false,
            ],
            [
                'id' => '6',
                'url' => '#',
                'name' => 'Posters',
                'display' => 0,
                'selected' => false,
            ],
            [
                'id' => '7',
                'url' => '#',
                'name' => 'LED TV',
                'display' => 0,
                'selected' => false,
            ],
            [
                'id' => '8',
                'url' => '#',
                'name' => 'Rails',
                'display' => 0,
                'selected' => false,
            ],
            [
                'id' => '9',
                'url' => '#',
                'name' => 'Stairways',
                'display' => 0,
                'selected' => false,
            ],
            [
                'id' => '10',
                'url' => '#',
                'name' => 'Platform',
                'display' => 0,
                'selected' => false,
            ],
        ];
        
        if(!empty($request) && $request != '#') {
            if($request == 'digital-billboards') {
                return $this->DisplayBillboards(self::DIGITAL_BILLBOARD, $categories);
            } else if ($request == 'traditional-billboards') {
                return $this->DisplayBillboards(self::TRADITIONAL_BILLBOARD, $categories);
            }
        }
        
        return view('properties')->with(['data' => $categories]);
    }
    
    private function DisplayBillboards(int $count , $categories) 
    {
        return view('property-list')->with(['count' => $count, 'data' => $categories]);
    }
}
