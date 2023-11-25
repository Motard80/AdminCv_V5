<?php

use src\class\model\AccesModel;
use src\class\model\HobbiesModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title="Modifier un hobies";

if(isset($_GET['id'])){
    if(is_int(intval($_GET['id']))){
      
        $hobbies = new HobbiesModel();
        $VerifDomain=$hobbies->findById($_GET['id']);
        $title=$hobbies->getHobbiesName();
        if($VerifDomain == false ){
            $newLocation = "?p=error";
            header("Location: $newLocation", true, 301);
            exit();
        }
    }
}