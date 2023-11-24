<?php

use src\class\model\AccesModel;
use src\class\model\TrainingModel;

$title="Moddification d'une formatuion";
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
        $title="Formation :". $training->getName();
        if($VerifDomain == false ){
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
    }
    if(isset($_POST['updateTrainning'])){
        $updateTrainning= new TrainingModel();
        if(!empty($_POST['Name'])){
            $updateName=htmlspecialchars($_POST['Name']);
            $updateTrainning->setName($updateName);
        }else{
            $updateName= $training->getName();
            $updateTrainning->setName($updateName);
        }
        if(!empty($_POST['StartDate'])){
            $updateStartdate = htmlspecialchars($_POST['StartDate']);
            $updateTrainning->setStartDate($updateStartdate);

        }else{
            $updateStartdate = $training->getStartDate();
            $updateTrainning->setStartDate($updateStartdate); 
        }
        if(!empty($_POST['EndDate'])){
            $updateEnddate = htmlspecialchars($_POST['EndDate']);
            $updateTrainning->setStartDate($updateEnddate);

        }else{
            $updateEnddate = $training->getEndDate();
            $updateTrainning->setStartDate($updateEnddate); 
        }
        var_dump($training->getEndDate());
    }
}