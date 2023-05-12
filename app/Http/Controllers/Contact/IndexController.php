<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('contact.index');
    }
}
