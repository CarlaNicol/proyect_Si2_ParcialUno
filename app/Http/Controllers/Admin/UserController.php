<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {
        
        return view('admin.users.create');
    }

    public function update(Request $request, User $user)
    {
        return redirect()->route('admin.users.edit')->with('info', 'Se asigno correctamente los roles');
    }
}
