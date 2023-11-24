<?php
namespace src\class\model;
class DiplomaModel extends BaseModel{
    protected ?int $id = null; 
    protected ?string $NameDiploma = null;
    protected ?string $Connections = null;
    protected ?string $PathDiploma = null;
    protected ?string $Extension = null;

    
    public function getId(){
        return $this->id;
    }
    
    public function setNameDiploma($dip){
        $this->NameDiploma = $dip;
        return $this;
    }


    public function getNameDiploma(){
        return $this->NameDiploma;
    }
    public function setConnections($con){
        $this->Connections = $con;
        return $this;
    }


    public function getConnections(){
        return $this->Connections;
    }
    public function setPathDiploma($pat){
        $this->PathDiploma = $pat;
        return $this;
    }


    public function getPathDiploma(){
        return $this->PathDiploma;
    }
    public function setExtension($ext){
        $this->Extension = $ext;
        return $this;
    }


    public function getExtension(){
        return $this->Extension;
    }
    

}