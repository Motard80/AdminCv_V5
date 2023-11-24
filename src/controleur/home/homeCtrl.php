<?php

use src\class\model\AccesModel;

$title = 'Page d\'acceuil admin';
$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
