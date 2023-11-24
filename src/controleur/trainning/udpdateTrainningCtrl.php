<?php

use src\class\model\AccesModel;
use src\class\model\TrainingModel;

$title = "Moddification d'une formatuion";
$Ay = 25512;
$idAccess = new AccesModel;
$idAccess->showAll();
if ($idAccess == $_SESSION) {
    $Auth = 'All';
}
$formError = array();
if (isset($_GET['id'])) {
    if (is_int(intval($_GET['id']))) {
        $training = new TrainingModel();
        $VerifDomain = $training->findById($_GET['id']);
        $title = "Formation :" . $training->getName();
        if ($VerifDomain == false) {
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
        if (isset($_POST['updateTrainning'])) {
            $updateTrainning = new TrainingModel();
            $updateId = $_GET['id'];
            $updateTrainning->setId($updateId);
            if (!empty($_POST['Name'])) {
                $updateName = htmlspecialchars($_POST['Name']);
                $updateTrainning->setName($updateName);
            } else {
                $updateName = $training->getName();
                $updateTrainning->setName($updateName);
            }
            if (!empty($_POST['StartDate'])) {
                $updateStartdate = htmlspecialchars($_POST['StartDate']);
                $updateTrainning->setStartDate($updateStartdate);
            } else {
                $updateStartdate = $training->getStartDate();
                $updateTrainning->setStartDate($updateStartdate);
            }
            if (!empty($_POST['EndDate'])) {
                $updateEnddate = htmlspecialchars($_POST['EndDate']);
                $updateTrainning->setEndDate($updateEnddate);
            } else {
                $updateEnddate = $training->getEndDate();
                $updateTrainning->setEndDate($updateEnddate);
            }
            if (!empty($_POST['school'])) {
                $updateSchool = htmlspecialchars($_POST['school']);
                $updateTrainning->setSchool($updateSchool);
            } else {
                $updateSchool = $training->getSchool();
                $updateTrainning->setSchool($updateSchool);
            }
            if (!empty($_POST['level'])) {
                $updateLevel = htmlspecialchars($_POST['level']);
                $updateTrainning->setLevel($updateLevel);
            } else {
                $updateLevel = $training->getLevel();
                $updateTrainning->setLevel($updateLevel);
            }
            if (!empty($_POST['description'])) {
                $updateDescription = htmlspecialchars($_POST['description']);
                $updateTrainning->setDescription($updateDescription);
            } else {
                $updateDescription = $training->getDescription();
                $updateTrainning->setDescription($updateDescription);
            }
        }
        $checkUdpateTraining = $updateTrainning->update($updateId);
        if($checkUdpateTraining === true){
            $newLocation = "?p=trainning";
        header("Location: $newLocation", true, 301);
        exit();
        }

    }
}
