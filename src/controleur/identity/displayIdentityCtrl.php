<?php

use src\class\model\AccesModel;
use src\class\model\InscriptionModel;

$title="Gestion des informations";

$Information =InscriptionModel::showAll()[0];

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}