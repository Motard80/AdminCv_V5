<?php

use src\class\model\AccesModel;
use src\class\model\TrainingModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title = 'Ajouter une formation';
$formError = array();
$addTrainnig = new TrainingModel;
if (isset($_POST['addTrainning'])) {
    if (!empty($_POST['Name'])) {
        $addName = htmlspecialchars($_POST['Name']);
        $addTrainnig->setName($addName);
    } else {
        $formError['Name'] = "Le nom de la formation est obligatoire";
    }
    if (!empty($_POST['StartDate'])) {
        $startdate = htmlspecialchars($_POST['StartDate']);
        $addTrainnig->setStartDate($startdate);
    } else {
        $formError['StartDate'] = "La date de debut est obligatoire";
    }
    if (!empty($_POST['EndDate'])) {
        $endate = htmlspecialchars($_POST['EndDate']);
        $addTrainnig->setEndDate($endate);
    } else {
        $formError['EndDate'] = "La date de fin est obligatoire";
    }
    if (!empty($_POST['Scool'])) {
        $scool = htmlspecialchars($_POST['Scool']);
        $addTrainnig->setSchool($scool);
    } else {
        $formError['Scool'] = "L'école est obligatoire";
    }
    if (!empty($_POST['Level'])) {
        $level = htmlspecialchars($_POST['Level']);
        $addTrainnig->setLevel($level);
    } else {
        $formError['Level'] = "Le niveau est obligatoire";
    }
    if (!empty($_POST['Description'])) {
        $description = htmlspecialchars($_POST['Description']);
        $addTrainnig->setDescription($description);
    } else {
        $formError['Description'] = "La description est obligatoire";
    }
    $checkAddTrainning = $addTrainnig->insert();
    if (count($formError) === 0) {

        $newLocation = "?p=trainning";
        header("Location: $newLocation", true, 301);
        exit();
    }else{
        
    }
} 
