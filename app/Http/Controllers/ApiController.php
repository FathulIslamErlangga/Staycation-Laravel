<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Response as HttpResponse;
use App\Http\Controllers\API\ResponseFormatter;
use App\Models\Item;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category = Category::all();
        $category = $category->load('items.gallery');
        if ($category) {
            return ResponseFormatter::success($category);
        } else {
            return ResponseFormatter::error(null, 'Data Not Found');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        // $items = Item::with(['gallery', 'activity'])->findOrFail($item);
        $response = [
            'message' => 'Data Berhasil di ambil',
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
            'items' => $item->load(['gallery', 'activity'])
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
