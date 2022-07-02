<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stay;

class StaysController extends Controller
{
    public function favoriteStay($stay_id) {

        $selectedStay = Stay::find($stay_id)->increment("favorited");

        return response()->json([
            "message" => "Success",
        ]);

    }
}
