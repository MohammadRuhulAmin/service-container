<?php

namespace App\TeacherStudentTeam;

use App\SchoolInformation\School;

class Team 
{
    private $teamName;
    private $schoolName;
    private $mentor;
    
    public function __construct($teamName,$schoolName,$mentor)
    {
        $this->teamName = $teamName;
        $this->schoolName = $schoolName;
        $this->mentor = $mentor;
    }

    public function TeamInformation(){
        return [
            'school_name'=>$this->schoolName,
            'team_name'=>$this->teamName,
            'mentor'=>$this->mentor,
        ];
    }
}
//--------------
