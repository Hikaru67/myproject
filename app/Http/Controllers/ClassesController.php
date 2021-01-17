<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;

//use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function classManager(){
        $list_class = Classes::join('subjects', 'classes.subjectId', '=', 'subjects.id')
            ->join('users', 'users.id', '=', 'classes.userId')
            ->select('classes.*','subjects.name as subjectName','users.fullName as nameCreator')
            ->orderByDesc('classes.id')->get();
        return view('listClass', compact('list_class'));
    }

    public function addClass(Request $request){
        return Classes::create([
            'name' =>  $request->name,
            'avatar' =>  $request->avatar,
            'userId' =>  $request->userId,
            'subjectId' =>  $request->subjectId,
            'created_at' => now()
        ]);
    }
}
