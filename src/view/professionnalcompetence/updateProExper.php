<?php

use src\class\otherClass\Form;

include_once '../src/controleur/profetionalCompetence/updateProExperCtrl.php';
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
                <h1>Modifier <?= $proComp->getJobName() ?></h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <p><?= isset($error) ? $error : '' ?></p>
            <form action="" method="post">
                <div>
                    <?= $form->inputUdateText('jobName', 'jobName', 'Modifier le nom du job', $proComp->getJobName() ) ?> 
                    <p class="text-danger" id="ErrorJobName"><?= isset($formError['jobName']) ? $img .$formError['jobName'] .$img : '' ?></p>
                </div>
                <div> 
                    <?= $form->updateDate('startDate', 'startDate', 'Modifier la date de début : '. $proComp->getStartDate(), $proComp->getStartDate() ) ?>
                    <p class="text-danger" id="ErrorSince"><?= isset($formError['startDate']) ? $img .$formError['startDate'] .$img : '' ?></p>                       
                </div>
                    <?= $form->updateDate('endDate', 'endDate', 'Modification de la date de fin :'. $proComp->getEndDate(), $proComp->getEndDate()) ?>
                <div> <p class="text-danger" id="ErrorEndate"><?= isset($formError['endDate']) ? $img .$formError['endDate'] .$img : '' ?></p>
                </div>
                    <?= $form->inputUdateText('compagny', 'compagny', 'modifier le nome de la compagnie ; '. $proComp->getCompagny(), $proComp->getCompagny()) ?>
                <div> <p class="text-danger" id="ErrorCompagny"><?= isset($formError['compagny']) ? $img .$formError['compangy'] .$img : '' ?></p>
                </div>
                <div>
                    <?= $form->inputUdateText('desciption', 'description', 'Modifer la description: '.$proComp->getJobDescription(), $proComp->getJobDescription()) ?>
                    <p class="text-danger" id="ErrorDesciption"><?= isset($formError['desciption']) ? $img .$formError['desciption'] .$img : '' ?></p>
                </div>
                <div>
                    <?= $form->submit('Modifier', 'updateExPro', 'updateExPro') ?>
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