<?php

namespace src\class\model;

use \PDO;

class SkillsModel extends BaseModel
{

    protected ?int $id = null;
    protected ?string $Description= null;
    protected ?int $SubDomain = null;
    protected ?int $Performance= null;

    public function getId(){
        return $this->id;
    }
    
    public function setDescription($Des){
        $this->Description = $Des;
        return $this;
    }
    public function getDescription(){
        return $this->Description;
    }
    public function setSubDomain($sub){
        $this->SubDomain=$sub;
        return $this;
    }
    public function getSubDomain(){
        return $this->SubDomain;
    }
    public function setPerformance($perf){
        $this->Performance=$perf;
        return $this;
    }
    public function getPerformance(){
        return $this->Performance;
    }
    public static function skilsJoinSubDomain()
    {
        // Etabli la connexion à la base de données
        $db = Database::getIntance()->db;
        $querry = 'SELECT `skills`.`id` AS `idSkills`, `skills`.`Description`, '
            . '`skills`.`SubDomain` AS `subDomainId` , `subDomaine`.`id` AS `idSubdomain`, '
            . ' `subDomaine`.`SubDomaineName` '
            . 'FROM `skills` '
            . 'INNER JOIN `subDomaine` '
            . 'on `subDomaine`.`id`=`skills`.`SubDomain`'
            . 'ORDER BY  `skills`.`SubDomain` ASC';
        $prepared = $db->prepare($querry);
        $status = $prepared->execute();
        $results = false;

        if ($status) {
            $results = $prepared->fetchAll(PDO::FETCH_ASSOC);
        }

        return $results;
    }
}
