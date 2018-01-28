<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function getContact(Request $request)
    {

        $data = [
            'title' => 'Contact'
        ];

        if (view()->exists('default.contact'))
            return view('default.contact', $data);

        abort(404);
    }

    public function show()
    {
        $data = [
            'title' => 'About'
        ];

        if (view()->exists('default.about'))
            return view('default.about', $data);

        abort(404);
    }

    public function __construct()
    {
        // $this->middleware('aoe');
    }
}
