<?php

use src\class\model\AccesModel;
use src\class\model\DiplomaModel;

$title='Gestion des diplomes';
$diplome=DiplomaModel::showAll();

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}