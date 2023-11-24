<?php

use src\class\model\AccesModel;

$title ="Suprimer le diplome";

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}