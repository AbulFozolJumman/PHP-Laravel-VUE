<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id) {
        $userName = "Donal Trump";
        $age = "75";
        $data = [
            "id"=> $id,
            "name" => $userName,
            "age" => $age,
        ];

        // For cookie
        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response()->json($data, 200)->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
