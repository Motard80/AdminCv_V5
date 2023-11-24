<?php

use src\class\model\AccesModel;
use src\class\model\SkillsModel;

$title='Competences Profesionnelles';
$skills=SkillsModel::skilsJoinSubDomain();

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}