<?php

namespace App\Http\Controllers;



use App\SchoolInformation\School;
use App\TeacherInformation\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacherDetails(School $school){
        $name= "Sakib Hasan";
        $contact = "10220";
        $address ="Dhaka";
        $department = "Physics";
        $teacher = new Teacher($name,$contact,$address,$department);

        $teacher_school_information = [
            'school_info'=>$school,
            'teacher_info'=>$teacher->teacherInformation(),
        ];
        dd($teacher_school_information);


    }
}
