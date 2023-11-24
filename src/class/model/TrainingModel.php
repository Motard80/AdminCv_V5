<?php
namespace src\class\model;
class TrainingModel extends BaseModel{
    
    protected ?int $id = null; 
    protected ?string $Name = null;
    protected ?string $StartDate = null;
    protected ?string $EndDate = null;
    protected ?string $School = null;
    protected ?string $Level = null;
    protected ?string $Description = null;
    


    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setName($Name){
        $this->Name = $Name;
        return $this;
    }


    public function getName(){
        return $this->Name;
    }
    public function setStartDate($date){
        $this->StartDate = date("Y-m-d",strtotime($date));
    }
    public function getStartDate(){
        return $this->StartDate;
    }
    public function setEndDate($End){
        $this->EndDate = date("Y-m-d",strtotime($End));
    }
    public function getEndDate(){
        return $this->EndDate;
    }
    public function setSchool($school){
        $this->School = $school;
    }
    public function getSchool(){
        return $this->School;
    }
    public function setLevel($Level){
        $this->Level = $Level;
    }
    public function getLevel(){
        return $this->Level;
    }
    public function setDescription($description){
        $this->Description = $description;
    }
    public function getDescription(){
        return $this->Description;
    }


}