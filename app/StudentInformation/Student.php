<?php

namespace App\StudentInformation;

class Student 
{   
    private  $studentName;
    private $studentClass;
    private $studentRoll;
    private $studentSection;
    private $studentContact;

    public function __construct($studentContact,$studentName,$studentClass,$studentRoll,$studentSection)
    {
        $this->studentName = $studentName;
        $this->studentClass = $studentClass;
        $this->studentRoll = $studentRoll;
        $this->studentSection = $studentSection;
        $this->studentContact = $studentContact;        
    }


    public function studentInfo(){
       
        return[
            'studentName'=>$this->studentName,
            'studentClass'=>$this->studentClass,
            'studentRoll'=>$this->studentRoll,
            'studentSection'=>$this->studentSection,
            'studentContact'=>$this->studentContact,
        ];
    }


}
