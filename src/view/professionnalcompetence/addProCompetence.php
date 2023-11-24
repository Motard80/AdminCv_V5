<?php

use src\class\otherClass\Form;

include_once '../src/controleur/profetionalCompetence/addProCompetenceCtrl.php';
$form = new Form($_POST);
?>
<title><?= isset($title) ? $title : '' ?></title>
</head>

<body>
    <header>
        <?php
        if (isset($_SESSION['Valid']) && $_SESSION['Valid'] === 'OK' && $_SESSION['Auth'] === 'All' && $_SESSION['G1'] === $Ay) {
            include_once '../src/include/Navbar.php'; ?>
            ?>
    </header>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-center">
                <h1>Ajouté une experience professionnelle</h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <p><?= isset($error) ? $error : '' ?></p>
            <form action="" method="post">
                <div>
                    <?= $form->inputText('JobName', 'JobName', 'JobName', 'Nom du poste') ?>
                    <?= $form->error('JobName') ?>
                </div>
                <div>
                    <?= $form->date('StartDate', 'StartDate', 'Date de début d\'enmploi') ?>
                    <?= $form->error('StartDate') ?>
                </div>
                <div>
                    <?= $form->date('EndDate', 'EndDate', 'Date de fin d\'enmploi') ?>
                    <?= $form->error('EndDate') ?>
                </div>
                <div>
                    <?= $form->inputText('Compagny', 'Compagny', 'Compagny', 'Entreprise') ?>
                    <?= $form->error('Compagny') ?>
                </div>
                <div>
                    <?= $form->inputText('JobDescription', 'JobDescription', 'JobDescription', 'Description du poste') ?>
                    <?= $form->error('JobDescription') ?>
                </div>
                <div>
                    <?= $form->submit('Ajouter', 'addExPro', 'addExPro') ?>
                </div>
            </form>
        </div>

    </div>
    </div>
<?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
?>