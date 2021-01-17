<?php

namespace App\Http\Controllers;

use App\Subjects;
use Illuminate\Http\Request;

//use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function subjectManager(){
        $list_subject = Subjects::join('users', 'users.id' ,'=' ,'subjects.userId')
            ->select('subjects.*', 'users.fullName as nameCreator')
            ->orderByDesc('subjects.id')->get();
        return view('listSubject', compact('list_subject'));
    }

    public function addSubject(Request $request){
        return Subjects::create([
            'name' =>  $request->name,
            'description' =>  $request->description,
            'avatar' =>  $request->avatar,
            'userId' =>  $request->userId,
            'created_at' => now()
        ]);
    }
}
