<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function getCategoriesAndSelectedStays($categ_id) {

        $allCategories = array();
        $stays = array();

        foreach (Category::select("id", "name", "image_URL")->get() as $category) {

            array_push($allCategories, $category);
        };

        foreach (Category::find($categ_id)->stays as $stay) {
            array_push($stays, $stay);
        };

        return response()->json([
            "categories" => $allCategories,
            "specified_stays" => $stays
        ]);
    }
}
