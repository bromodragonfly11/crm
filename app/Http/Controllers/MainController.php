<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function testPost()
    {
        return response()->json(['first_test' => 'ok'], 201);
    }
    public  function  testPut(){
        return response()->json(['test put' => 'ok']);
    }

    public function testAny()
    {
        return response('test', 201);
    }
}
