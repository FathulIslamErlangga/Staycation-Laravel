<?php

namespace App\Http\Controllers\API;

class ResponseFormatter
{
    protected static $response = [
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => null
        ],
        "hero" => [
            "travelers" => 80409,
            "treasures" => 882,
            "cities" => 1492
        ],
        'category' => null
    ];

    public function success($category = null, $gallery = null, $message = null)
    {
        self::$response['meta']['message'] = $message;
        self::$response['category'] = $category;
        self::$response['gallery'] = $gallery;
        return response()->json(self::$response, self::$response['meta']['code']);
    }
    public function error($category = null, $gallery = null, $message = null, $code = 400)
    {
        self::$response['meta']['status'] = 'error';
        self::$response['meta']['code'] = $code;
        self::$response['meta']['message'] = $message;
        self::$response['gallery'] = $gallery;
        self::$response['category'] = $category;
        return response()->json(self::$response, self::$response['meta']['code']);
    }
}
