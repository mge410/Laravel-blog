<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke(User $user)
    {
        $user = auth()->user();
        return view('profile.index', compact('user'));
    }
}
