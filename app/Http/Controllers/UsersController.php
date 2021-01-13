<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Users;
use App\Subjects;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function userManager(){
        $list_users = Users::all();
        return view('listUser', compact('list_users'));
    }

    public function classManager(){
        $list_class = Classes::join('subjects', 'classes.subjectId', '=', 'subjects.id')->select('classes.*','subjects.name as subjectName')->groupby()->get();
        return view('listClass', compact('list_class'));
    }

    public function pointManager(){
//        $list_users = Users::all();
        return view('listPoint' );
    }
}
