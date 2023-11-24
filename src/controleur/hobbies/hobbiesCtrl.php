<?php

use src\class\model\AccesModel;
use src\class\model\HobbiesModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title='Gestion des loisirs';
$hobbies=HobbiesModel::showAll();