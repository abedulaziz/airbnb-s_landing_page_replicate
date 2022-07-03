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


    public function getSelectedStays($categ_id) {
        $selectedCategStays = array();

        foreach (Stay::where("category_id", $categ_id)->get() as $stay) {
            $filterStay = (object)[
                "id" => $stay->id,
                "location" => $stay->location,
                "distance" => $stay->distance,
                "cost_per_night" => $stay->cost_per_night,
                "rate" => $stay->rate,
                "gallery" => Stay::find($stay->id)->stayGalleries
            ];

            array_push($selectedCategStays, $filterStay);
        };
        return response()->json([
            "stays" => $selectedCategStays
        ]);

    }


}
