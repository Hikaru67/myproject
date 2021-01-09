<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function test(){
        $list_user = Users::all();
        return view($this->test(), compact('list_user'));
    }
}
