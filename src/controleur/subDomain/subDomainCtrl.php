<?php

use src\class\model\AccesModel;
use src\class\model\SubDomaineModel;


$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title='Sous domaines';
$subDomain=SubDomaineModel::joinSubAndDomain();