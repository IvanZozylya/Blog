<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show()
    {
        $data = [
            'title' => 'Hello World'
        ];

        if (view()->exists('default.template'))
            return view('default.template', $data);

        abort(404);
    }
}
