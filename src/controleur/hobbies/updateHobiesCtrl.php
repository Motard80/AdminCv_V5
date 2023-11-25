<?php

use src\class\model\AccesModel;
use src\class\model\HobbiesModel;

$Ay = 25512;
$idAccess = new AccesModel;
$idAccess->showAll();
if ($idAccess == $_SESSION) {
    $Auth = 'All';
}
$title = "Modifier un hobies";
$formError = array();
$img='<img src="asset/img/Icone/WarningRond.png" style="width: 50px;" class="images_petit" />';
if (isset($_GET['id'])) {
    if (is_int(intval($_GET['id']))) {

        $hobbies = new HobbiesModel();
        $VerifDomain = $hobbies->findById($_GET['id']);
        $title = $hobbies->getHobbiesName();
        if ($VerifDomain == false) {
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
    }
    if (isset($_POST['updateHobbies'])) {
        $updateHobbies = new HobbiesModel;
        if (!empty($_POST['updateHobbiesName'])) {
            $nameHobbies = htmlspecialchars($_POST['updateHobbiesName']);
            $updateHobbies->setHobbiesName($nameHobbies);
        } else {
            $nameHobbies = $hobbies->getHobbiesName();
            $updateHobbies->setHobbiesName($nameHobbies);
        }
        if (!empty($_POST['updateHHobbiesDescription'])) {
            $hobbiesDescription = htmlspecialchars($_POST['updateHHobbiesDescription']);
            $updateHobbies->setHobbiesDescription($hobbiesDescription);
        } else {
            $hobbiesDescription = $hobbies->getHobbiesDescription();
            $updateHobbies->setHobbiesDescription($hobbiesDescription);
        }
        if (!empty($_POST['Since'])) {
            if (preg_match('/^[0-9]+$/', $_POST['Since'])) {
                if (strlen($_POST['Since']) == 4) {
                    if($_POST['Since']>=2000 && $_POST['Since']<= 2100){
                        $sinceHobbies = htmlspecialchars($_POST['Since']);
                        $updateHobbies->setSince($sinceHobbies);
                    }else{
                        $formError['Since'] = 'Veuillez mettre une année compris entre 2000 et 2100 !';
                    }
                } else {
                    $formError['Since'] = 'La seule longeur autorisé et de 4 chiffres';
                }
            } else {
                $formError['Since'] = 'veuiller metre une année avec uniquement en chiffre!';
            }
        } else {
            $sinceHobbies = $hobbies->getSince();
            $updateHobbies->setSince($sinceHobbies);
        }
        if(count($formError)===0){
            $checkUpdateHobbies = $updateHobbies->update($_GET['id']);
             if($checkUpdateHobbies === true){
                $newLocation = "?p=hobbies";
                header("Location: $newLocation", true, 301);
                exit();
            }else {
                $newLocation = "?p=error";
                header("Location: $newLocation", true, 301);
                exit();
            }  
        }
       
    }
}
