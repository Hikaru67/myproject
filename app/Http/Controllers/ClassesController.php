<?php

namespace App\Http\Controllers;

use App\Classes;
//use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function classManager(){
        $list_class = Classes::join('subjects', 'classes.subjectId', '=', 'subjects.id')
            ->join('users', 'users.id', '=', 'classes.userId')
            ->select('classes.*','subjects.name as subjectName','users.fullName as nameCreator')->get();
        return view('listClass', compact('list_class'));
    }
}
