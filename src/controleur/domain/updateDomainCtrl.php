 <?php

use src\class\model\AccesModel;
use src\class\model\DomainModel;

$title = 'Modier un domaine';

$Ay=25512;
$idAccess= new AccesModel;
$idAccess->showAll();
if($idAccess== $_SESSION){
    $Auth ='All';
}
$formError = array();
$regexId = '/^\d+$/';
if (isset($_GET['id'])) {
    if (preg_match($regexId, $_GET['id'])) {
        $idDomain = htmlspecialchars($_GET['id']);
    }
}
$VerifDomain = DomainModel::showAll();
$idDomain = $VerifDomain['id'];
var_dump($VerifDomain);
if ($idDomain['id'] === $idDomain) {
    $nameDoamin = $VerifDomain['DomainName'];
}
