<?php

use src\class\model\AccesModel;
use src\class\model\DomainModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title = 'Suprimer un dormaine ';
$formError = array();
if(isset($_GET['id'])){
    if(is_int(intval($_GET['id']))){
      
        $domain = new DomainModel();
        $VerifDomain=$domain->findById($_GET['id']);
        if($VerifDomain == false ){
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
    }
}
if(isset($_POST['Yes'])){
$deleteDomain= new DomainModel();
if($deleteDomain->delete($_GET['id'])){
    $newLocation = "?p=domain";
    header("Location: $newLocation", true, 301);
    exit();
}
}
if(isset($_POST['No'])){
    $newLocation = "?p=domain";
    header("Location: $newLocation", true, 301);
    exit();
}
