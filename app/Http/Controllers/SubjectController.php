<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Subject;

class SubjectController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function insertView()
    {
        return view('pages/subject_page');
    }

    public function insert(SubjectRequest $request)
    {
        //subject
        $subject = $request->input('name');
        $teacher = $request->input('teacher');
        //days of week
        $lun = $request->input('lun');
        $mar = $request->input('mar');
        $mie = $request->input('mie');
        $jue = $request->input('jue');
        $vie = $request->input('vie');
        
        $string_format = $lun.';'.$mar.';'.$mie.';'.$jue.';'.$vie;
        //$darys =explode(';',$string_format,-1);
        //echo $string_format;
        //echo 'lunes:'.$darys[0];

        $subjectModel =  new Subject;
        $subjectModel->subject = $subject;
        $subjectModel->teacher = $teacher;
        $subjectModel->schedule = $string_format;
        $subjectModel->save();
        return redirect()->route('home');
    }

    public function subjectView($id)
    {
        $subject = Subject::find($id);
        $days = explode(';',$subject->schedule,-1);
        return view('pages/subject_view',compact('subject','days'));
    }
}
