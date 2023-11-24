<?php

use src\class\model\AccesModel;
use src\class\model\TrainingModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$formError = array();
if(isset($_GET['id'])){
    if(is_int(intval($_GET['id']))){
      
        $training = new TrainingModel();
        $VerifDomain=$training->findById($_GET['id']);
        if($VerifDomain == false ){
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
    }
}
if(isset($_POST['Yes'])){
$delelteTraining= new TrainingModel();
if($delelteTraining->delete($_GET['id'])){
    $newLocation = "?p=trainning";
    header("Location: $newLocation", true, 301);
    exit();
}else{    
    $newLocation = "?p=error404";
    header("Location: $newLocation", true, 301);
    exit();
}
}
if(isset($_POST['No'])){
    $newLocation = "?p=trainning";
    header("Location: $newLocation", true, 301);
    exit();
}