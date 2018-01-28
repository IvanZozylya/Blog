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

        if (view()->exists('default.index'))
            return view('default.index', $data);

        abort(404);
    }
}
