<?php

namespace src\class\model;

class DomainModel extends BaseModel
{
    protected ?int $id = null;
    protected ?string $DomainName = null;


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
         * Get the value of id
         */ 
        public function getId()
        {
            return $this->id;
        }
    /**
     * Get the value of DomainName
     */ 
    public function getDomainName()
    {
        return $this->DomainName;
    }

    /**
     * Set the value of DomainName
     *
     * @return  self
     */ 
    public function setDomainName($DomainName)
    {
        $this->DomainName = $DomainName;

        return $this;
    }

}
