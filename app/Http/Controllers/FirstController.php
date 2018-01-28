<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function getIndex($page){
        echo $page;
    }

    public function show(){
        echo "<br>".__METHOD__;
    }

    public function __construct()
    {
       // $this->middleware('aoe');
    }
}
