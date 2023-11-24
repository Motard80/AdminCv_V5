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
        if (isset($_SESSION['Valid']) && $_SESSION['Valid'] === 'OK' && $_SESSION['Auth'] === 'All' && $_SESSION['G1'] === $Ay) {
            include_once '../src/include/Navbar.php';
        ?>
    </header>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-center">
                <h1>Modifier la formation :<?= $training->getName() ?></h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <p><?= isset($error) ? $error : '' ?></p>
            <form action="" method="post">
                <div>
                    <?= $form->inputUdateText('Name', 'Name','Nom à modifer: ', $training->getName()  ) ?>
                    <?= $form->error('Name') ?>
                </div>
                <div>
                    <p>Date d'entre en formation: <?= $training->getStartDate() ?></p>
                    <?= $form->date('StartDate', 'StarteDate', 'Date de début') ?>
                    <?= $form->error('StatDate') ?>
                </div>
                <div>
                    <p>Date de fin de formation :<?= $training->getEndDate() ?></p>
                    <?= $form->date('EndDate', 'EndDate', 'Date de Fin', '<?= $training->getName() ?>') ?>
                    <?= $form->error('EndDate') ?>
                </div>
                <div>
                    <?= $form->inputUdateText('school', 'school', 'Ecole à modifier: ', $training->getSchool() ) ?>
                    <?= $form->error('Scool') ?>
                </div>
                <div>
                    <?= $form->inputUdateText('level', 'level', 'Niveau à modifier: ', $training->getLevel() ) ?>
                    <?= $form->error('Level') ?>
                </div>
                <div>
                    <?= $form->inputUdateText('description', 'description', 'Description à modifier: ', $training->getDescription() ) ?>
                    <?= $form->error('Description') ?>
                </div>
                <div>
                    <?= $form->submit('Modifer', 'addTrainning', 'addTrainning') ?>
                </div>
            </form>
        </div>

    </div>
    </div>
<?php
        } else {
            include_once '../src/view/error/restrictedZone.php';
        }
?>