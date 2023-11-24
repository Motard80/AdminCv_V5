<?php

use src\class\model\AccesModel;
use src\class\model\HobbiesModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title="Suprimer le loisir";
$formError = array();
if(isset($_GET['id'])){
    if(is_int(intval($_GET['id']))){
      
        $hobbies = new HobbiesModel();
        $VerifDomain=$hobbies->findById($_GET['id']);
        if($VerifDomain == false ){
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
    }
}
if(isset($_POST['Yes'])){
$deleteDomain= new HobbiesModel();
if($deleteDomain->delete($_GET['id'])){
    $newLocation = "?p=hobbies";
    header("Location: $newLocation", true, 301);
    exit();
}
}
if(isset($_POST['No'])){
    $newLocation = "?p=hobbies";
    header("Location: $newLocation", true, 301);
    exit();
}
