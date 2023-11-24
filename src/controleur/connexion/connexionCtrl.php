<?php

use src\class\model\InscriptionModel;

$title = 'Connexion';
$pseudo = " ";
$formError = array();
$pwd = " ";
$error = " ";
if (isset($_POST['connexion'])) {
    if (!empty($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];
    } else {
        $formError['pseudo'] = '<img src="asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
            . 'Vous avez ouvliez votre pseudo';
    }
    if (!empty($_POST['pwd'])) {
        $pwd = $_POST['pwd'];
    } else {
        $formError['pwd'] = '<img src="asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
            . 'Vous avez ouvliez votre mot de passe';
    }
    if (count($formError) == 0) {
        $check = InscriptionModel::showAll()[0];
        if ($pseudo === $check['pseudo'] && $pwd === $check['pwd']) {
                $newLocation = "?p=home";
                $_SESSION['Auth']= 'All';
                $_SESSION['G1']= $check['id_acces'];
                $_SESSION['Valid'] = "OK";
                header("Location: $newLocation", true, 301);
               exit();
        } else {
            $error = '<img src="asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
                . 'Le mot de passe ou le pseudo n\'est pas correct';
        }
    } else {
        $error = '<img src="asset/img/WarningRond.png" style="width: 50px;" class="images_petit" />'
            . 'Vous avez des erreurs dans le formulaire';
    }
}
