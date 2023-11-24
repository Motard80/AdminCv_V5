<?php

use src\class\model\AccesModel;
use src\class\model\HobbiesModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title="Ajouter un loisir";
$formError = array();
$addHobbies= new HobbiesModel();
if(isset($_POST['addHobbies'])){
 if(!empty($_POST['addHobbiesName'])){
    $addName= htmlspecialchars($_POST['addHobbiesName']);
    $addHobbies->setHobbiesName($addName);
 }else {
    $formError ['addHobbiesName']= '';
 }
 if(!empty($_POST['HobbiesDescription'])){
    $addDescrip=htmlspecialchars($_POST['HobbiesDescription']);
    $addHobbies->setHobbiesDescription($addDescrip);
 }else {
    $formError ['HobbiesDescription']= '';
 }
 if(!empty($_POST['Since'])){
    $addSince=htmlspecialchars($_POST['Since']);
    $addHobbies->setSince($addSince);
 }else {
    $formError ['Since']= '';
 }
$checkAdd=$addHobbies->insert();
if(count($formError) == 0){
    if($checkAdd== true){
        $newLocation = "?p=hobbies";
        header("Location: $newLocation", true, 301);
        exit();
    }else{
        $newLocation = "?p=error";
        header("Location: $newLocation", true, 301);
        exit();
    }
}

}