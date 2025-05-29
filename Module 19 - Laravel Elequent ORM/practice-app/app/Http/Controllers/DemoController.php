<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;

class DemoController extends Controller
{

    // Get all rows from DB
    public function GetAllBrand(Request $request) {
        return Brand::get();
        // return Brand::all();  //get() & all() both are same
    }

    // Get one specific rows from DB
    public function FindSingleBrand(Request $request) {
        return Brand::find($request->id);
    }

    // Get column from a table from DB
    public function GetColumn(Request $request) {
        return Brand::pluck('brandName');
        // return Brand::pluck('brandName','id'); //The right side value will be left side value key in a associative array
    }

    // Get selected column from a table from DB
    public function GetSelectedColumn(Request $request) {
        return Brand::select('brandName', 'brandImg')->get();
    }

    // Create a row into DB
    public function CreateBrand(Request $request) {
        return Brand::create($request->input());
    }

    // Update a row data by id
    public function UpdateBrand(Request $request) {
        return Brand::where('id', $request->id)
        ->update($request->input());
    }

    // Update or create a row data by id
    public function UpdateOrCreateBrand(Request $request) {
        return Brand::updateOrCreate(['brandName'=> $request->brandName],
        $request->input());
    }

    // Delete a row by id
    public function DeleteBrand(Request $request) {
        return Brand::where('id', '=', $request->id)
        ->delete();
    }

    // Increment by id
    public function PriceIncrement(Request $request) {
        return Product::where('id', '=', $request->id)
        ->increment('price', 100);
    }

    // Decrement by id
    public function PriceDecrement(Request $request) {
        return Product::where('id', '=', $request->id)
        ->decrement('price', 100);
    }

    // Aggregates
    public function Aggregates(Request $request) {
        // return Product::max('price');
        // return Product::min('price');
        // return Product::sum('price');
        return Product::count('price');
        // return Product::avg('price');
    }

}