<?php

use src\class\otherClass\Form;
session_start();
var_dump($_SESSION['access']);
include_once '../src/controleur/diploma/addDiplomaCtrl.php';
$form = new Form($_POST);
?>
<title><?= isset($title) ? $title : '' ?></title>
</head>
<body>
    <header>
        <?php 
        if(isset($_SESSION['Valid']) && $_SESSION['Valid']==='OK' && $_SESSION['Auth']=== 'All' && $_SESSION['G1']=== $Ay){
            include_once '../src/include/Navbar.php'; ?>
?>
    </header>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-center">
                <h1>Ajouter un loisir</h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <?= isset($error) ? $error : ''?>
            <form action="" method="post">
                <?= $form->inputText('NameDiploma','NameDiploma','NameDiploma','Nom du diplôme') ?><br>
                <?= $form->inputText('Connections','Connections','Connections','liens ') ?><br>
                <?= $form->inputText('PathDiploma','PathDiploma','PathDiploma','nom du fichier') ?><br>
                <?= $form->inputText('Extension','Extension','Extension','Extenction') ?><br><br>
                <?= $form->submit('Ajouter','addDiplome','addDiplome') ?>
            </form>
        </div>

    </div>
    </div>
    <?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
    ?>