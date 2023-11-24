<?php

use src\class\model\AccesModel;
use src\class\model\DomainModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title='Domaine de competence';
$dommain=DomainModel::showAll();