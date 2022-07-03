<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Stay;

class CategoriesController extends Controller
{
    public function getCategoriesAndSelectedStays($categ_id) {


        $allCategories = array();
        $selectedCategStays = array();

        foreach (Category::select("id", "name", "image_URL")->get() as $category) {

            array_push($allCategories, $category);
        };

        foreach (Category::find($categ_id)->stays as $stay) {


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
            "categories" => $allCategories,
            "specified_stays" => $selectedCategStays
        ]);
    }
}
