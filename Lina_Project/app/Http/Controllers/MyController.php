<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
  public function myfunction(){
    //   return view('myview');
    $line = "Hello world";
    return view('myview', compact('line'));
  }
}
