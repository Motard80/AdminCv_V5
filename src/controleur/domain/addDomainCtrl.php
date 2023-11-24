<?php

use src\class\model\AccesModel;
use src\class\model\DomainModel;
use src\class\model\HobbiesModel;

$title = 'Ajouter un domaine';

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$formError = array();

if (isset($_POST['addDomain'])) {
    if (!empty($_POST['newDomain'])) {
        $addDom = new DomainModel();
        // A chaque valeur du formulaire tu dois set la propriété de l'objet
       // ce qu'il y a entre les quotes c'est $_POST ...
        $newDoamin = htmlspecialchars($_POST['newDomain']);
        $addDom->setDomainName($newDoamin);
/*        
        $Add->setDomain($newDoamin); */
    } else {
        $formError['newDomain'] = '<img src="../../../public/asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
            . 'Vous avez ouvliez de mettre un nom pour votre nouveau domaine';
    }
        // Insère en BDD les infos (après avoir géré l'ensemble des champs du formulaire)
        
    $checkAddDomain=$addDom->insert();
    if (count($formError) == 0) {
        if ($checkAddDomain == true) {
            $newLocation = "?p=domain";
            header("Location: $newLocation", true, 301);
            exit();
            //header("Location: ?p=domain");
        } else {
            $error = '<img src="../../../public/asset/img/Icone/WarningRond.png" style="width: 50px;" class="images_petit" />'
                . 'Une errreur systéme est survenue contacté le webmaster du site!!!';
        }
    }
}
