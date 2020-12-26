<?php

namespace App\Http\Controllers;

use App\SchoolInformation\School;
use App\TeacherStudentTeam\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function TeamInf(School $school){

       $team = new Team("bac","ddx","tema0xc");
       $teamDetails =[
            'teamInfo'=>$team->TeamInformation(),
            'schoolInfo'=>$school,
       ];
       dd($teamDetails);
       
    }
}
