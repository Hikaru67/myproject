<?php

namespace App\Http\Controllers;

use App\User;
use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function userManager(){
        $list_users = Users::all()->sortByDesc('id');
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
        $admin->role = 'admin';
        $admin->status = $request->input('status');
        $admin->save();
    }

    public function addUser(Request $request){

        return Users::create([
            'fullName' =>  $request->fullName,
            'birthday' =>  $request->birthday,
            'email' =>  $request->email,
            'phoneNumber' =>  $request->phoneNumber,
            'job' =>  $request->job,
            'avatar' =>  $request->avatar,
            'facebook' =>  $request->facebook,
            'gender' =>  $request->gender,
            'country' =>  $request->country,
            'role' =>  $request->role,
            'status' =>  $request->status,
            'created_at' => now()
        ]);
    }

    public function deleteUser(Request $request){
        return User::destroy($request->id);
    }

    public function pointManager(){
//        $list_users = Users::all();
        return view('listPoint' );
    }
}
