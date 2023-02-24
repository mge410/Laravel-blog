<?php

namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('main.post.index');
    }
}
