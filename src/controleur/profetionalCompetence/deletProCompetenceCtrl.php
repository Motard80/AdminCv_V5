<?php

use src\class\model\AccesModel;
use src\class\model\ProfessionnalCompetenceModel;

$title = 'Suprimer une compétence ';

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$formError = array();
if (isset($_GET['id'])) {
    if (is_int(intval($_GET['id']))) {

        $proComp = new ProfessionnalCompetenceModel();
        $VerifDomain = $proComp->findById($_GET['id']);
        if ($VerifDomain == false) {
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
    }
}
if (isset($_POST['Yes'])) {
    $deleteDomain = new ProfessionnalCompetenceModel();
    if ($deleteDomain->delete($_GET['id'])) {
        $newLocation = "?p=cPTProf";
        header("Location: $newLocation", true, 301);
        exit();
    }
}
if (isset($_POST['No'])) {
    $newLocation = "?p=cPTProf";
    header("Location: $newLocation", true, 301);
    exit();
}
