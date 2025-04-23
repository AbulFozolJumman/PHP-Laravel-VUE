<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function MyInfo(Request $request)
    {
        $course=[
            'name'=>'PHP Laravel',
            'batch'=>'04',
            'learning'=>'Middleware'
        ];
        return $course;
    }

    function MyInfo1(Request $request)
    {
        $course=[
            'name'=>'PHP Laravel',
            'batch'=>'04',
            'learning'=>'Middleware'
        ];
        return $course;
    }

    function MyInfo2(Request $request)
    {
        $course=[
            'name'=>'PHP Laravel',
            'batch'=>'04',
            'learning'=>'Middleware'
        ];
        return $course;
    }
    function MyInfo3(Request $request)
    {
        $course=[
            'name'=>'PHP Laravel',
            'batch'=>'04',
            'learning'=>'Middleware'
        ];
        return $course;
    }
}
