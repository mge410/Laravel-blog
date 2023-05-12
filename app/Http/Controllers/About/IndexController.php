<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('about.index');
    }
}
