<?php

use src\class\model\AccesModel;
use src\class\model\SkillsModel;
use src\class\model\SubDomaineModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title='Ajouter une compétence professionnel ';
$subDomain=SubDomaineModel::showAll();
$addSkills= new SkillsModel;
$formError = array();
if(isset($_POST['addSkills'])){
    if(!empty($_POST['Description'])){
        $description=htmlspecialchars($_POST['Description']);
        $addSkills->setDescription($description);
    }else{

    }
        if(is_int(intval($_POST['Subdomain']))){
        $addSkills->setSubDomain($_POST['Subdomain']);
    }else {

    }
    $addSkills->setPerformance(10);
    $checkAddSkills=$addSkills->insert();
    if(count($formError)=== 0){
        if($checkAddSkills=== true){
            $newLocation = "?p=skills";
            header("Location: $newLocation", true, 301);
            exit();
        }else{
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
    }else{
        $newLocation = "?p=error";
        header("Location: $newLocation", true, 301);
        exit();
    }
}