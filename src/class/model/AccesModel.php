<?php
namespace src\class\model;
class AccesModel extends BaseModel {
    protected ?int $id=null;
    protected ?string $name=null;
    protected ?string $Security= null;
    protected ?string $Acces = null;
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

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

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Security
     */ 
    public function getSecurity()
    {
        return $this->Security;
    }

    /**
     * Set the value of Security
     *
     * @return  self
     */ 
    public function setSecurity($Security)
    {
        $this->Security = $Security;

        return $this;
    }

    /**
     * Get the value of Acces
     */ 
    public function getAcces()
    {
        return $this->Acces;
    }

    /**
     * Set the value of Acces
     *
     * @return  self
     */ 
    public function setAcces($Acces)
    {
        $this->Acces = $Acces;

        return $this;
    }
}