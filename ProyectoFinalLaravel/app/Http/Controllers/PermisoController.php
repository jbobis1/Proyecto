<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PermisoController extends Controller
{
    public function __invoke($id)
    {
        $users = User::all();
        $user = User::findorFail($id);
        if(!$user->admin){
            $user->admin = 1;
        } else {
            $user->admin = 0;
        }
        $user->save();
        return view('user.index')->with('status','usted cambio sus permisos')->with('users',$users);
    }
}
