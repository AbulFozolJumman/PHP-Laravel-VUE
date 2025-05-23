<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    //
    function demo1()
    {
        //$result= DB::table('categories')->get();
        //$result= DB::table('categories')->first();
        //$result= DB::table('categories')->find(27);
        //$result= DB::table('categories')->pluck('name');

        // $result= DB::table('products')->count();
        // $result= DB::table('products')->max('price');


        //$result= DB::table('products')->min('price');
       // $result= DB::table('products')->avg('price');
        //$result= DB::table('products')->sum('price');

        // $result= DB::table('categories')->select('id','name')->get();

         // products= ছেলের বাড়ি   categories=মেয়ের বাড়ি categories.id=মেয়ে products.category_id=ছেলে
        // ছেলের বাড়ি মেয়ের বাড়ি বিয়ে হবে ছেলে=মেয়ে
         $result= DB::table('products')
             ->crossJoin('categories','products.category_id','=','categories.id')
             ->get();


       return $result;
    }



}
