<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        return view('admin.daftar.index', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
