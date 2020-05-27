<?php

namespace App\Http\Controllers\Admin;

use App\Models\Users\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.pages.users.index', [
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('admin.pages.users.show', [
            'user' => $user,
        ]);
    }
}
