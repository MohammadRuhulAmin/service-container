<?php

namespace App\Http\Controllers;

use App\SchoolInformation\School;
use Illuminate\Http\Request;
use App\StudentInformation\Student;

class StudentController extends Controller
{
    public function studentDetails(School  $schoolDetails){
       
        $name = "Ruhul Amin";
        $contact = "01403288711";
        $class ="12";
        $roll = "10";
        $section = "Group-4";
        $student = new Student($name,$contact,$class,$roll,$section);
        $school_student_info =[
            'student_full_information'=>$student->studentInfo(),
            'school_information'=>$schoolDetails,
        ];
        dd($school_student_info);
    }
}
