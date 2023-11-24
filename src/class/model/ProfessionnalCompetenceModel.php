<?php
namespace src\class\model;
class ProfessionnalCompetenceModel extends BaseModel{
    protected ?int $id = null;
    protected ?string $JobName= null;
    protected ?string $StartDate= null;
    protected ?string $EndDate= null;
    protected ?string $Compagny= null;
    protected ?string $JobDescription = null;

    public function getId(){
        return $this->id;
    }
    
    public function setJobName($job){
        $this->JobName = $job;
        return $this;
    }
    public function getJobName(){
        return $this->JobName;
    }
    public function setStartDate($start){
        $this->StartDate = $start;
        return $this;
    }
    public function getStartDate(){
        return $this->StartDate;
    }
    public function setEndDate($end){
        $this->EndDate = $end;
        return $this;
    }
    public function getEndDate(){
        return $this->EndDate;
    }
    public function setCompagny($compa){
        $this->Compagny = $compa;
        return $this;
    }
    public function getCompagny(){
        return $this->Compagny;
    }
    
    public function setJobDescription($jobdes){
        $this->JobDescription = $jobdes;
        return $this;
    }
    public function getJobDescription(){
        return $this->JobDescription;
    }


}