<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::select('id', 'name', 'role_id')
            ->with(['role' => function ($query) {
                $query->select('id', 'title');
            }])
            ->get();
        return view('admin.user.index', compact('users'));
    }
}
