<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function userManager(){
        $list_users = Users::all();
        return view('listUser', compact('list_users'));
    }

    public function addUserAdmin(Request $request){
        $admin = new Users();
        $admin->fullName = $request->input('name');
        $admin->birthday = $request->input('birthday');
        $admin->email = $request->input('email');
        $admin->phoneNumber = $request->input('phoneNumber');
        $admin->job = $request->input('job');
        $admin->avatar = $request->input('avatar');
        $admin->facebook = $request->input('facebook');
        $admin->gender = $request->input('gender');
        $admin->country = $request->input('country');
        $admin->role = $request->input('role');
        $admin->status = $request->input('status');
        $admin->save();
    }


    public function pointManager(){
//        $list_users = Users::all();
        return view('listPoint' );
    }
}
