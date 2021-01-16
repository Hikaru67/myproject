<?php

namespace App\Http\Controllers;

use App\Subjects;
//use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function subjectManager(){
        $list_subject = Subjects::join('users', 'users.id' ,'=' ,'subjects.userId')
            ->select('subjects.*', 'users.fullName as nameCreator')
            ->get();
        return view('listSubject', compact('list_subject'));
    }
}
