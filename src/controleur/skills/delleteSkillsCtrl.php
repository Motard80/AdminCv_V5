<?php

use src\class\model\AccesModel;
use src\class\model\SkillsModel;

$title='Suprimer une compétences';

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}