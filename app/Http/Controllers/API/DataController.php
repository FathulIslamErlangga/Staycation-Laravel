<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Item;
use Illuminate\Http\Request;



class DataController extends Controller
{
    //
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $slug = $request->input('slug');
        $price = $request->input('price');
        $categories = $request->input('category');
        $price_form = $request->input('price_form');
        $price_to = $request->input('price_to');

        if ($id) {
            // $category = Category::with(['items'])->find($id);
            // $gallery = Gallery::all();
            // dd($gallery->load('item'));
            $category = Item::with(['gallery', 'activity'])->find($id);
            if ($category)
                return ResponseFormatter::success($category, 'Data berhasil di ambil');
            else
                return ResponseFormatter::error(null, 'Data Not Found');
        }
    }
}
