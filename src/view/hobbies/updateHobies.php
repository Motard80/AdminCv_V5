<?php

use src\class\otherClass\Form;

include_once '../src/controleur/hobbies/updateHobiesCtrl.php';
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
                <h1>Modifier <?= $hobbies->getHobbiesName() ?></h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <?= isset($error) ? $error : '' ?>
            <form action="" method="post">
                <div>
                    <?= $form->inputUdateText('updateHobbiesName', 'updateHobbiesName', 'modifier le nom', $hobbies->getHobbiesName()) ?>
                </div>
                <div>
                    <?= $form->inputUdateText('updateHHobbiesDescription', 'updateHHobbiesDescription', 'modifier la desciption', $hobbies->getHobbiesDescription()) ?>
                </div>                
                <div>
                    <?= $form->inputUdateText('Since', 'Since', 'Since', $hobbies->getSince(), '') ?>
                    <p class="text-danger" id="ErrorSince"><?= isset($formError['Since']) ? $img .$formError['Since'] .$img : '' ?></p>
                </div>
                <?= $form->submit('Modifier', 'updateHobbies', 'updateHobbies') ?>
            </form>
        </div>

    </div>
    </div>
<?php
        } else {
            include_once '../src/view/error/restrictedZone.php';
        }
?>