<?php

use src\class\model\AccesModel;
use src\class\model\DomainModel;
use src\class\model\SubDomaineModel;

$title = 'Ajouter un sous domaine';

$domaine = new DomainModel;
$ListDomaine = $domaine->showAll();
$SubDomain = new SubDomaineModel;


$Ay = 25512;
$idAccess = new AccesModel;
$idAccess->showAll();
if ($idAccess == $_SESSION) {
    $Auth = 'All';
}
if (isset($_GET['id'])) {
    if (is_int(intval($_GET['id']))) {
        if (preg_match('/^[0-9]+$/', $_GET['id'])) {
            $subDomainById = $SubDomain->findById($_GET['id']);
        }
    }
}
var_dump($subDomainById);
