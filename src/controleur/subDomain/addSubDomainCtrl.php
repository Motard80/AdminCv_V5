<?php

use src\class\model\AccesModel;
use src\class\model\DomainModel;
use src\class\model\SubDomaineModel;

$title = 'Ajouter un sous domaine';

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$domaine = new DomainModel;
$ListDomaine = $domaine->showAll();
$addSubDomain = new SubDomaineModel;
$formError = array();
if (isset($_POST['addSubDomain'])) {

    if (!empty($_POST['addSubDomain'])) {
       $addSubDomaineName  = htmlspecialchars($_POST['SubDomaineName']);
        $addSubDomain->setSubDomaineName($addSubDomaineName);
    } else {
        $formError['SubDomaineName'] = "Le nom du sous-domaine est obligatoire";
        var_dump('proute1');
    }
    if(!empty($_POST['domainId'])){
        $id_domain = $_POST['domainId'];
        $addSubDomain->setDomain($id_domain);
    }else{
         }
    $checkAddSubDomain= $addSubDomain->insert();
    if(count($formError)===0){
        if($checkAddSubDomain=== true){           
            var_dump('hdhdh') ;
            $newLocation = "?p=subDomain";
            header("Location: $newLocation", true, 301);
            exit();
        }else{
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
    }else{}
}
