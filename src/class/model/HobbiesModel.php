<?php
namespace src\class\model;
class HobbiesModel extends BaseModel{
    protected ?int $id = null;
    protected ?string $HobbiesName = null;
    protected ?string $HobbiesDescription= null;
    protected ?int $Since= null;

    public function getId(){
        return $this->id;
    }
    
    public function setHobbiesName($hob){
        $this->HobbiesName = $hob;
        return $this;
    }


    public function getHobbiesName(){
        return $this->HobbiesName;
    }

    public function setHobbiesDescription($des){
        $this->HobbiesDescription= $des;
        return $this;
    }

    public function getHobbiesDescription(){
        return $this->HobbiesDescription;
    }

    public function setSince($since){
        $this->Since= $since;
    }
    
    public function getSince(){
       return $this->Since;
    }
}