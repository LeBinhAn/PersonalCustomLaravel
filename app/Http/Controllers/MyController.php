<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyFormRequest;

class MyController extends Controller
{
   public function index()
   {
       return view('form');
   }

   public function submit(MyFormRequest $request)
   {
        return view('welcome');
   }
}


