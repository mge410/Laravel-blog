<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\FilterRequest;
use function view;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        return view('post.index');
    }
}
