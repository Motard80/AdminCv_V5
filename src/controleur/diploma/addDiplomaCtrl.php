<?php

use src\class\model\AccesModel;
use src\class\model\DiplomaModel;

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$title='Ajout d\'un nouveau diplôme';
$formError = array();
$addDiploma= new DiplomaModel;
if(isset($_POST['addDiplome'])){
    if(!empty($_POST['NameDiploma'])){
        $addNameDiploma= htmlspecialchars($_POST['NameDiploma']);
        $addDiploma->setNameDiploma($addNameDiploma);
    }else{

    }
    if(!empty($_POST['Connections'])){
        $addConnect= htmlspecialchars($_POST['Connections']);
        $addDiploma->setConnections($addConnect);

    }else{

    }
    if(!empty($_POST['PathDiploma'])){
        $addPath= htmlspecialchars($_POST['PathDiploma']);
        $addDiploma->setPathDiploma($addPath);
    }else{

    }
    if(!empty($_POST['Extension'])){
        $addExtent= htmlspecialchars($_POST['Extension']);
        $addDiploma->setExtension($addExtent);
    }else{

    }
    if (count($formError) == 0) {
       $verifDip= $addDiploma->insert();
        if($verifDip == true){
            $newLocation = "?p=diploma";
            header("Location: $newLocation", true, 301);
            exit();
        }else {}
    }
}