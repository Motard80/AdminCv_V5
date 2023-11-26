<?php

namespace src\class\model;
use \PDO;

class SubDomaineModel extends BaseModel
{
    
    protected ?int $id = null;
    protected ?string $SubDomaineName= null;
    protected ?string $domain= null;

    
    public function setSubDomaineName($subDom){
        $this->SubDomaineName = $subDom;
        return $this;
    }
    public function getSubDomaineName(){
        return $this->SubDomaineName;
    }
       
    public function setDomain($domain){
        $this->domain = $domain;
        return $this;
    }
    public function getDomain(){
        return $this->domain;
    }  
     public static function joinSubAndDomain()
    {
        // Etabli la connexion à la base de données
        $db = Database::getIntance()->db;
        $querry = 'SELECT `subDomaine`.`id` AS `idSubDomaine`,  `subDomaine`.`Domain` AS `subDomaineKeyDomain`,'
            . ' `subDomaine`.`SubDomaineName`, `domain`.`id` AS `idDomain`, `domain`.`DomainName` '
            . 'FROM `subDomaine` '
            . 'INNER JOIN `domain` '
            . 'ON `domain`.`id`=`subDomaine`.`Domain`'; 

            
            $prepared = $db->prepare($querry);
            $status = $prepared->execute();
            $results=false;

            if($status){
                $results = $prepared->fetchAll(PDO::FETCH_ASSOC);
            }

            return $results;
    }
    public static function joinSubAndDomainById($id)
    {
        // Etabli la connexion à la base de données
        $db = Database::getIntance()->db;
        $querry = 'SELECT `subDomaine`.`id` AS `idSubDomaine`,  `subDomaine`.`Domain` AS `subDomaineKeyDomain`,'
            . ' `subDomaine`.`SubDomaineName`, `domain`.`id` AS `idDomain`, `domain`.`DomainName` '
            . 'FROM `subDomaine` '
            . 'INNER JOIN `domain` '
            . 'ON `domain`.`id`=`subDomaine`.`Domain`'
            .'WHERE id= :id'; 
            $prepared = $db->prepare($querry);
            $prepared->bindValue(':id', $id, PDO::PARAM_INT);
            $status = $prepared->execute();
            $results=false;

            if($status){
                $results = $prepared->fetchAll(PDO::FETCH_ASSOC);
            }

            return $results;
    }
}
