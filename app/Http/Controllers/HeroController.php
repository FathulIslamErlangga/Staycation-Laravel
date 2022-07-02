<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\gallery;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Http;

class HeroController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $category = $category->load('items.gallery');
        return view('landingpage.index', [
            'title' => 'Staycation',
            'hero' => [
                "travelers" => 80409,
                "treasures" => 882,
                "cities" => 1492
            ],
            'data' => $category

        ]);
    }

    public function showItem(Item $item){
        
        return view('detailsItem.index',[
            'title' =>  $item->name,
            'items' => $item,
            'feature' => [
                'bedroom' => 5,
                'livingroom' => 1,
                'bathroom' => 3,
                'diningroom' => 1,
                'wifi' => 10,
                'smalltable' => 7,
                'wardrobe' => 2,
                'television' => 1,
            ],
            
        ]);
    }
}
