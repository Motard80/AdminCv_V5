<?php

use src\class\model\AccesModel;
use src\class\model\ProfessionnalCompetenceModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title = "Ajout d'un compétence professionnelle";
$formError = array();
$addComPro = new ProfessionnalCompetenceModel;
if (isset($_POST['addExPro'])) {
    if (!empty($_POST['JobName'])) {
        $addJobName = htmlspecialchars($_POST['JobName']);
        $addComPro->setJobName($addJobName);
    } else {
        $formError['JobName'] = 'Le nom de la fonction est obligatoire';
    }
    if (!empty($_POST['StartDate'])) {
        $addStart = htmlspecialchars($_POST['StartDate']);
        $addComPro->setStartDate($addStart);
    } else {
        $formError['StartDate'] = 'La date de début est obligatoire';
    }
    if (!empty($_POST['EndDate'])) {
        $addEnd = htmlspecialchars($_POST['EndDate']);
        $addComPro->setEndDate($addEnd);
    } else {
        $formError['EndDate'] = 'La date de fin est obligatoire';
    }
    if (!empty($_POST['Compagny'])) {
        $addCompagny = htmlspecialchars($_POST['Compagny']);
        $addComPro->setCompagny($addCompagny);
    } else {
        $formError['Compagny'] = 'L\'entreprise est obligatoire';
    }
    if (!empty($_POST['JobDescription'])) {
        $addJobDescription = htmlspecialchars($_POST['JobDescription']);
        $addComPro->setJobDescription($addJobDescription);
    } else {
        $formError['JobDescription'] = 'La description du poste est obligatoire';
    }
    if (count($formError) == 0) {
        $checkAddJob = $addComPro->insert();
        if ($checkAddJob) {
            $newLocation = "?p=cPTProf";
            header("Location: $newLocation", true, 301);
            exit();
        }else{}
    }else{

    }
}
