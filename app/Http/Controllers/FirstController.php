<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //contact
    public function getContact(Request $request)
    {

        $data = [
            'title' => 'Contact'
        ];

        if (view()->exists('default.contact')) {
            return view('default.contact', $data);
        }

        abort(404);
    }

    //about
    public function show()
    {
        $data = [
            'title' => 'About'
        ];

        if (view()->exists('default.about')) {
            //return view('default.about', $data);
            $view = view('default.about', $data)->render();
            return response($view);
        }

        abort(404);
    }

    public function __construct()
    {
        // $this->middleware('aoe');
    }
}
