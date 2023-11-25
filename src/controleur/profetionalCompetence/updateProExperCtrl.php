<?php

use src\class\model\AccesModel;
use src\class\model\ProfessionnalCompetenceModel;

$Ay = 25512;
$idAccess = new AccesModel;
$idAccess->showAll();
if ($idAccess == $_SESSION) {
    $Auth = 'All';
}
$title = 'modifer une experience';
$formError = array();
$img = '<img src="asset/img/Icone/WarningRond.png" style="width: 50px;" class="images_petit" />';
if (isset($_GET['id'])) {
    if (is_int(intval($_GET['id']))) {

        $proComp = new ProfessionnalCompetenceModel();
        $VerifDomain = $proComp->findById($_GET['id']);
        $title = $proComp->getJobName();
        if ($VerifDomain == false) {
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
    }
    if (isset($_POST['updateExPro'])) {
        $updateExpPro = new ProfessionnalCompetenceModel;
        if (!empty($_POST['jobName'])) {
            if(preg_match('/^[A-Za-z0-9]+$/', $_POST['jobName'])){
                $job = htmlspecialchars($_POST['jobName']);
                $updateExpPro->setJobName($job);
           }else{
            $formError['jobName']="merci de ne mettre que des chifres ou des lettres";
           }
        } else {
            $job = $proComp->getJobName();
            $updateExpPro->setJobName($job);
        }
        if (!empty($_POST['startDate'])) {
            $start = htmlspecialchars($_POST['startDate']);
            $updateExpPro->setStartDate($start);
        } else {
            $start = $proComp->getStartDate();
            $updateExpPro->setStartDate($start);
        }
        if(!empty($_POST['endDate'])){
            $endDate= htmlspecialchars($_POST['endDate']);
            $updateExpPro->setEndDate($endDate);
        }else{
            $endDate= $proComp->getEndDate();
            $updateExpPro->setEndDate($endDate);
        }
        if(!empty($_POST['compagny'])){
            if(preg_match('/^[A-Za-z0-9]+$/', $_POST['compagny'])){
                $compagny =htmlspecialchars($_POST['compagny']);
                $updateExpPro->setCompagny($compagny);
            }else{
                $formError['compagny']= 'Merci de mettre que des lettes ou des chiffres';
            }
        }else{
            $compagny=$proComp->getCompagny();
            $updateExpPro->setCompagny($compagny);
        }
        if(!empty($_POST['desciption'])){
            if(preg_match('/^[A-Za-z0-9]+$/', $_POST['compagny'])){
                $description= htmlspecialchars($_POST['desciption']);
                $updateExpPro->setJobDescription($description);
            }else{
                $formError['desciption']='Merci de ne mettre que des lettres ou des chiffres';
            }
        }else{
            $description= $proComp->getJobDescription();
            $updateExpPro->setJobDescription($description);
        }
        if(count($formError)===0){
            $checkProComp= $updateExpPro->update($_GET['id']);
            if($checkProComp=== true){
            $newLocation = "?p=cPTProf";
            header("Location: $newLocation", true, 301);
            exit();
            }else{
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
            }
        }
    }
}
