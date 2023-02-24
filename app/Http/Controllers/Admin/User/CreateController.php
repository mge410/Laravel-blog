<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Role;

class CreateController extends Controller
{
    public function __invoke()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }
}
