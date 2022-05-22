<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\gallery;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    public function index()
    {


        return view('landingpage.index', [
            'title' => 'Home | staycation',
            'collections' => Item::with('category')->get()

        ]);
    }
}
