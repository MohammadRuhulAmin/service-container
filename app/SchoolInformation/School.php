<?php

namespace App\SchoolInformation;



class School 
{
    private $schoolName;
    private $schoolAddress;
    private $schoolRegistration;
    private $schoolLicense;
    private $schoolAuthor;

    public function __construct($schoolName,$schoolAddress,$schoolAuthor,$schoolLicense,$schoolRegistration)
    {
        $this->schoolName = $schoolName;
        $this->schoolAddress = $schoolAddress;
        $this->schoolAuthor = $schoolAuthor;
        $this->schoollRegistration = $schoolRegistration;
        $this->schoolLicense = $schoolLicense;

    }
    public function SchoolDetails(){
        return[

            'schoolName'=>$this->schoolName,
            'schoolAddress'=>$this->schoolAddress,
            'schoolAuther'=>$this->schoolAuther,
            'schoolRegistration'=>$this->schoolRegistration,
            'schoolLicense'=>$this->schoolLicense,

        ];
    }


}
