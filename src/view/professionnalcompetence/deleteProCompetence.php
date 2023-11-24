<?php

use src\class\otherClass\Form;

include_once '../src/controleur/profetionalCompetence/deletProCompetenceCtrl.php';

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
                <h1>Surptimer le job <?= $proComp->getJobName() ?> </h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <?= isset($error) ? $error : '' ?>
            <form action="" method="post">
                <p> Est vous sur de vouloire supprimer le job <?= $proComp->getJobName() ?> </p>
                <?= $form->submit('oui', 'Yes', 'Yes') ?>
                <?= $form->submit('Non', 'No', 'No') ?>
            </form>
        </div>

    </div>
    </div>
    <?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
    ?>