<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use function view;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('profile.index');
    }
}
