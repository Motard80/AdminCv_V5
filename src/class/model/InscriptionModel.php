<?php
namespace src\class\model;

class InscriptionModel extends BaseModel{
    protected ?int $id = null;
    protected ?string $pseudo= null;
    protected ?string $Society = null;
    protected ?string $Name= null;
    protected ?string $FirstName= null;
    protected ?string $ContactPhone= null;
    protected ?string $CompagnyAdress= null;
    protected ?string $ZipCode= null;
    protected ?string $City= null;
    protected ?string $Mail= null;
    protected ?string $Clef= null;
    protected ?string $pwd= null;
    protected ?string $Actif= null;
    protected ?int $accesId = null;

    public function getId(){
        return $this->id;
    }
    
    public function setPseudo($pseu){
        $this->pseudo = $pseu;
        return $this;
    }
    public function getPseudo(){
        return $this->pseudo;
    }
       
    public function setSociety($socie){
        $this->Society = $socie;
        return $this;
    }
    public function getSociety(){
        return $this->Society;
    }  
    public function setName($name){
        $this->Name = $name;
        return $this;
    }
    public function getName(){
        return $this->Name;
    }  
    public function setFirstName($first){
        $this->FirstName = $first;
        return $this;
    }
    public function getFirstName(){
        return $this->FirstName;
    }  
    public function setContactPhone($fone){
        $this->ContactPhone = $fone;
        return $this;
    }
    public function getContactPhone(){
        return $this->ContactPhone;
    } 
    public function setCompagnyAdresse($adress){
        $this->CompagnyAdress = $adress;
        return $this;
    }
    public function getCompagnyAdress(){
        return $this->CompagnyAdress;
    }
    public function setZipCode($code){
        $this->ZipCode = $code;
        return $this;
    }
    public function getZipCode(){
        return $this->ZipCode;
    }
    public function setCity($City){
        $this->City = $City;
        return $this;
    }
    public function getCity(){
        return $this->City;
    }
    public function setMail($Mail){
        $this->Mail = $Mail;
        return $this;
    }
    public function getMail(){
        return $this->Mail;
    }
    public function setClef($Clef){
        $this->Clef = $Clef;
        return $this;
    }
    public function getClef(){
        return $this->Clef;
    }
    public function setPwd($pwd){
        $this->pwd = $pwd;
        return $this;
    }
    public function getPwd(){
        return $this->pwd;
    }
    public function setActif($Actif){
        $this->Actif = $Actif;
        return $this;
    }
    public function getActif(){
        return $this->Actif;
    }

    /**
     * Get the value of accesId
     */ 
    public function getAccesId()
    {
        return $this->accesId;
    }

    /**
     * Set the value of accesId
     *
     * @return  self
     */ 
    public function setAccesId($accesId)
    {
        $this->accesId = $accesId;

        return $this;
    }
}