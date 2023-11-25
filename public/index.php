<?php
session_start();
require '../src/class/otherClass/Autoloder.php';
Autoloader::register();

// Mapping des valeurs de $p vers les fichiers correspondants
$pages = [
    'connexion' => '../src/view/connexion/connexion.php',
    'home' => '../src/view/home/home.php',
    'logout' => '../src/view/connexion/logout.php',
    'diplayidentity' => '../src/view/identity/displayIdentity.php',
    'domain' => '../src/view/domain/domain.php',
    'addDomain' => '../src/view/domain/addDomain.php',
    'updateDomain' => '../src/view/domain/updateDomain.php',
    'deleteDomain' => '../src/view/domain/deleteDormain.php',
    'hobbies' => '../src/view/hobbies/hobbies.php',
    'addHobbies' => '../src/view/hobbies/addHobbies.php',
    'deleteHobbie' => '../src/view/hobbies/deleteHobbies.php',
    'diploma' => '../src/view/diploma/diploma.php',
    'addDiplome' => '../src/view/diploma/addDiploma.php',
    'cPTProf' => '../src/view/professionnalcompetence/profcompetence.php',
    'addExPro'=>'../src/view/professionnalcompetence/addProCompetence.php',
    'deleteProExper'=>'../src/view/professionnalcompetence/deleteProCompetence.php',
    'subDomain' => '../src/view/subdomaine/subdomaine.php',
    'skills' => '../src/view/skills/skills.php',
    'deleteSkills'=>'../src/view/skills/delleteSkills.php', 
    'trainning' => '../src/view/trainning/trainning.php',
    'deleteTraining'=>'../src/view/trainning/deleteTraining.php',
    'error' => '../src/view/error/error.php',
    'error404'=>'../src/view/error/error404.php',
    'addTrainning' => '../src/view/trainning/addTraining.php',
    'addSubDoamain'=>'../src/view/subdomaine/addSubDoamain.php',
    'addSkills'=> '../src/view/skills/addSkills.php',
    'deleteSkills'=>'../src/view/skills/delleteSkills.php',
    'updateSubDomain'=>'../src/view/subdomaine/updateSubDomain.php',
    'udpdateTrainning' => '../src/view/trainning/udpdateTrainning.php',
    'updateHobbie'=>'../src/view/hobbies/updateHobies.php',
    'updateProExper'=>'../src/view/professionnalcompetence/updateProExper.php'

];

// Vérifier si la clé existe dans le tableau, sinon utiliser 'connexion' par défaut
$p = isset($_GET['p']) && array_key_exists($_GET['p'], $pages) ? $_GET['p'] : 'error';

ob_start();

// Vérifier si le fichier existe avant de l'inclure
if (file_exists($pages[$p])) {
    require $pages[$p];
} else {
    // Gérer le cas où la page demandée n'existe pas
    require '../src/view/error/error404.php';
}

$content = ob_get_clean();
require '../src/view/template/default.php';
