<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Properties extends Controller
{
    CONST DIGITAL_BILLBOARD = 5;
    CONST TRADITIONAL_BILLBOARD = 3;
    
    //
    public function index($request = null, $pick = null)
    {   
        $bselect = false;
        $tselect = false;
        $initialCount = 0;
        if(!empty($request) && $request != '#') {
            if($request == 'digital-billboards') {
                $bselect = true;
                $initialCount = self::DIGITAL_BILLBOARD;
            } else if ($request == 'traditional-billboards') {
                $tselect = true;
                $initialCount = self::TRADITIONAL_BILLBOARD;
            }
        }
        
        if(!empty($pick)) {
            return $this->DisplayViewPage($initialCount);
        }
        
        $categories = $this->Model($bselect, $tselect);
        
        if(!empty($request) && $request != '#') {
            return $this->DisplayBillboards($initialCount, $categories);
        }
        
        return view('properties')->with(['data' => $categories]);
    }
    
    private function DisplayBillboards(int $count , $categories) 
    {
        return view('property-list')->with(['count' => $count, 'data' => $categories]);
    }
    
    private function DisplayViewPage(int $count) 
    {
        return view('property')->with(['count' => $count]);
    }
    
    private function Model ($bselect, $tselect) 
    {
        return (object) [
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
    }
}
