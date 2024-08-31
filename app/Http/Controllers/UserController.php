<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(){
        $users = User::all();
        return view("home",compact("users"));
    }

    public function edit(User $user){
        $roles= Role::all();
        return view("edit",compact("user","roles"));
    }

    public function update(Request $request,User $user){
       $roles = $request->roles;
       $user->roles()->sync($roles);
       return redirect("users/list");
    }
}
