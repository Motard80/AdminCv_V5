<?php

use src\class\model\AccesModel;
use src\class\model\TrainingModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title='Formations';
$trainning= TrainingModel::showAll();