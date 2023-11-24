<?php

use src\class\otherClass\Form;

include_once '../src/controleur/trainning/udpdateTrainningCtrl.php';
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
                <h1>Ajouté une Formation professionnelle</h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <p><?= isset($error) ? $error : '' ?></p>
            <form action="" method="post">
                <div>
                    <?= $form->inputText('Name', 'Name', 'Name', 'Nom de la formation') ?>
                    <?= $form->error('Name') ?>
                </div>
                <div>
                    <?= $form->date('StartDate', 'StarteDate', 'Date de début') ?>
                    <?= $form->error('StatDate') ?>
                </div>
                <div>
                    <?= $form->date('EndDate', 'EndDate', 'Date de Fin') ?>
                    <?= $form->error('EndDate') ?>
                </div>
                <div>
                    <?= $form->inputText('Scool', 'Scool', 'Scool', 'Ecole') ?>
                    <?= $form->error('Scool') ?>
                </div>
                <div> 
                    <?= $form->inputText('Level', 'Level', 'Level', 'Niveau de sortie de la formation') ?>
                    <?= $form->error('Level') ?>
                </div>
                <div> 
                    <?= $form->inputText('Description', 'Description', 'Description', 'Description de la formation') ?>
                    <?= $form->error('Description') ?>
                </div>
                <?= $form->submit('Ajouter', 'addTrainning', 'addTrainning') ?>
            </form>
        </div>

    </div>
    </div>
    <?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
    ?>