<?php

namespace App\TeacherInformation;



class Teacher 
{
    private $teacherName;
    private $teacherDegree;
    private $teacherAddress;
    private $teacherDepartment;
    public function __construct($teacherName,$teacherDegree,$teacherAddress,$teacherDepartment)
    {
        $this->teacherName = $teacherName;
        $this->teacherDegree = $teacherDegree;
        $this->teacherAddress = $this->teacherAddress;
        $this->teacherDepartment = $this->teacherDepartment;
    }
    public function teacherInformation(){
        return [
            'teacherName'=>$this->teacherName,
            'teacherDegree'=>$this->teacherDegree,
            'teacherAddress'=>$this->teacherAddress,
            'teacherDepartment'=>$this->teacherDepartment,
        ];
    }

}
