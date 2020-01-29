<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
      return view('index');
          }
          public function pricesandpackages(){
            return view('index1');
          }
          public function gallery(){
            return view('index2');
          }
          public function shop(){
            return view('index3');
          }
          public function onlinepayment(){
            return view('index4');
          }
          public function aboutus(){
            return view('index5');
          }

}
