<?php

use src\class\model\AccesModel;
use src\class\model\ProfessionnalCompetenceModel;

$title='Experiences professionnelles';
$proExperience= ProfessionnalCompetenceModel::showAll();

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}